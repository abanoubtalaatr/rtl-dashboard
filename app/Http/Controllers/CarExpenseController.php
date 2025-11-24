<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarExpenseRequest;
use App\Http\Requests\UpdateCarExpenseRequest;
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
    public function index(Request $request): View
    {
        $query = CarExpense::with('car');

        // Filter by car
        if ($request->filled('car_id')) {
            $query->where('car_id', $request->car_id);
        }

        // Filter by type
        if ($request->filled('type')) {
            $query->where('type', $request->type);
        }

        // Search functionality
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('description', 'like', "%{$search}%")
                    ->orWhereHas('car', function ($q) use ($search) {
                        $q->where('plate_number', 'like', "%{$search}%");
                    });
            });
        }

        $expenses = $query->latest()->paginate(10)->withQueryString();
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
    public function store(StoreCarExpenseRequest $request): RedirectResponse
    {
        CarExpense::create($request->validated());

        return redirect()->route('car-expenses.index')
            ->with('success', 'تم إضافة المصروف بنجاح.');
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
    public function update(UpdateCarExpenseRequest $request, CarExpense $carExpense): RedirectResponse
    {
        $carExpense->update($request->validated());

        return redirect()->route('car-expenses.index')
            ->with('success', 'تم تحديث بيانات المصروف بنجاح.');
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
