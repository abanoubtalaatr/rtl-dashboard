<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarTypeRequest;
use App\Http\Requests\UpdateCarTypeRequest;
use App\Models\CarType;
use Illuminate\Http\Request;

class CarTypeController extends Controller
{
    /**
     * Display a listing of car types.
     */
    public function index(Request $request)
    {
        $query = CarType::query();

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where('name', 'like', "%{$search}%");
        }

        $carTypes = $query->latest()->paginate(15);

        return view('car-types.index', compact('carTypes'));
    }

    /**
     * Show the form for creating a new car type.
     */
    public function create()
    {
        return view('car-types.create');
    }

    /**
     * Store a newly created car type in storage.
     */
    public function store(StoreCarTypeRequest $request)
    {
        CarType::create($request->validated());

        return redirect()
            ->route('car-types.index')
            ->with('success', 'تم إضافة نوع السيارة بنجاح');
    }

    /**
     * Display the specified car type.
     */
    public function show(CarType $carType)
    {
        return view('car-types.show', compact('carType'));
    }

    /**
     * Show the form for editing the specified car type.
     */
    public function edit(CarType $carType)
    {
        return view('car-types.edit', compact('carType'));
    }

    /**
     * Update the specified car type in storage.
     */
    public function update(UpdateCarTypeRequest $request, CarType $carType)
    {
        $carType->update($request->validated());

        return redirect()
            ->route('car-types.index')
            ->with('success', 'تم تحديث نوع السيارة بنجاح');
    }

    /**
     * Remove the specified car type from storage.
     */
    public function destroy(CarType $carType)
    {
        $carType->delete();

        return redirect()
            ->route('car-types.index')
            ->with('success', 'تم حذف نوع السيارة بنجاح');
    }
}
