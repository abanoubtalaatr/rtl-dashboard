<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarExpense;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CarExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // app/Http/Controllers/CarExpenseController.php

    public function index(Request $request): View
    {
        $query = CarExpense::with('car');

        // فلترة حسب السيارة
        if ($request->filled('car_id')) {
            $query->where('car_id', $request->car_id);
        }

        // فلترة حسب النوع – الحل المضمون 100% (يعمل على كل MySQL)
        if ($request->filled('type')) {
            $type = $request->type;
            $query->whereRaw('JSON_CONTAINS(items, ?)', [json_encode(['type' => $type])]);
            // أو هذا البديل الأقوى والأسرع:
            // $query->whereRaw("items LIKE ?", ['%"type":"'.$type.'"%']);
        }

        // البحث
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('description', 'like', "%{$search}%")
                    ->orWhereHas('car', fn ($q) => $q->where('plate_number', 'like', "%{$search}%"));
            });
        }

        $expenses = $query->latest()->paginate(15)->withQueryString();
        $cars = Car::orderBy('plate_number')->get();

        return view('car-expenses.index', compact('expenses', 'cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $cars = Car::orderBy('plate_number')->get();

        return view('car-expenses.create', compact('cars'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'car_id' => 'required|exists:cars,id',
            'description' => 'nullable|string',
            'types' => 'required|array|min:1',
            'types.*.checked' => 'sometimes|in:on',
        ]);

        $items = collect($request->types)
            ->filter(fn ($data) => ! empty($data['checked']))
            ->map(fn ($data, $type) => [
                'type' => $type,
                'cost' => (float) ($data['cost'] ?? 0),
            ])
            ->values()
            ->toArray();

        if (empty($items)) {
            return back()->withErrors(['types' => 'يجب اختيار نوع واحد على الأقل مع تكلفة']);
        }

        CarExpense::create([
            'car_id' => $request->car_id,
            'items' => $items,
            'description' => $request->description,
            // لا نرسل total_cost أبداً
        ]);

        return redirect()
            ->route('car-expenses.index')
            ->with('success', 'تم إضافة المصروف بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(CarExpense $carExpense): View
    {
        $carExpense->load('car');

        return view('car-expenses.show', compact('carExpense'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CarExpense $carExpense): View
    {
        $cars = Car::orderBy('plate_number')->get();

        return view('car-expenses.edit', compact('carExpense', 'cars'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CarExpense $carExpense): RedirectResponse
    {
        $request->validate([
            'car_id' => 'required|exists:cars,id',
            'description' => 'nullable|string',
            'types' => 'required|array|min:1',
            'types.*.checked' => 'sometimes|in:on',
            // 'types.*.cost'    => 'required_if:types.*.checked,on|numeric|min:0',
        ]);

        $items = collect($request->types)
            ->filter(fn ($data) => ! empty($data['checked']))
            ->map(fn ($data, $type) => [
                'type' => $type,
                'cost' => (float) ($data['cost'] ?? 0),
            ])
            ->values()
            ->toArray();

        if (empty($items)) {
            return back()->withErrors(['types' => 'يجب اختيار نوع واحد على الأقل مع تكلفة']);
        }

        $carExpense->update([
            'car_id' => $request->car_id,
            'items' => $items,
            'description' => $request->description,
        ]);

        return redirect()
            ->route('car-expenses.index')
            ->with('success', 'تم تحديث المصروف بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CarExpense $carExpense): RedirectResponse
    {
        $carExpense->delete();

        return redirect()->route('car-expenses.index')
            ->with('success', 'تم حذف المصروف بنجاح.');
    }
}
