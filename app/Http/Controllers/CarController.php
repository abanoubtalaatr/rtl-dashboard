<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use App\Models\Car;
use App\Models\CarType;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $query = Car::query();

        // Search functionality
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('plate_number', 'like', "%{$search}%")
                    ->orWhere('model', 'like', "%{$search}%")
                    ->orWhere('color', 'like', "%{$search}%");
            });
        }

        $cars = $query->latest()->paginate(10)->withQueryString();

        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $carTypes = CarType::all();

        return view('cars.create', compact('carTypes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCarRequest $request): RedirectResponse
    {
        Car::create($request->validated());

        return redirect()->route('cars.index')
            ->with('success', 'تم إضافة السيارة بنجاح.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car): View
    {
        $car->load('carType');

        return view('cars.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car): View
    {
        $car->load('carType');
        $carTypes = CarType::all();

        return view('cars.edit', compact('car', 'carTypes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCarRequest $request, Car $car): RedirectResponse
    {
        $car->update($request->validated());

        return redirect()->route('cars.index')
            ->with('success', 'تم تحديث بيانات السيارة بنجاح.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car): RedirectResponse
    {
        $car->delete();

        return redirect()->route('cars.index')
            ->with('success', 'تم حذف السيارة بنجاح.');
    }

    /**
     * Display cars availability filter page.
     */
    public function availability(Request $request): View
    {
        $from = $request->input('from');
        $to = $request->input('to');
        $availability = $request->input('availability');
        $cars = collect();

        if ($request->filled('from') && $request->filled('to') && $request->filled('availability')) {
            // Get all cars
            $allCars = Car::all();
            $filteredCars = collect();

            foreach ($allCars as $car) {
                $isAvailable = $car->isAvailable($from, $to);

                if ($availability === 'available' && $isAvailable) {
                    $filteredCars->push($car);
                } elseif ($availability === 'not_available' && ! $isAvailable) {
                    $filteredCars->push($car);
                }
            }

            $cars = $filteredCars;
        }

        return view('cars.availability', compact('cars', 'from', 'to', 'availability'));
    }
}
