<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLocationRequest;
use App\Http\Requests\UpdateLocationRequest;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of locations.
     */
    public function index(Request $request)
    {
        $query = Location::query();

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where('name', 'like', "%{$search}%")
                ->orWhere('address', 'like', "%{$search}%");
        }

        $locations = $query->latest()->paginate(15);

        return view('locations.index', compact('locations'));
    }

    /**
     * Show the form for creating a new location.
     */
    public function create()
    {
        $types = Location::getTypeOptions();

        return view('locations.create', compact('types'));
    }

    /**
     * Store a newly created location in storage.
     */
    public function store(StoreLocationRequest $request)
    {
        Location::create($request->validated());

        return redirect()
            ->route('locations.index')
            ->with('success', 'تم إضافة الموقع بنجاح');
    }

    /**
     * Display the specified location.
     */
    public function show(Location $location)
    {
        return view('locations.show', compact('location'));
    }

    /**
     * Show the form for editing the specified location.
     */
    public function edit(Location $location)
    {
        $types = Location::getTypeOptions();

        return view('locations.edit', compact('location', 'types'));
    }

    /**
     * Update the specified location in storage.
     */
    public function update(UpdateLocationRequest $request, Location $location)
    {
        $location->update($request->validated());

        return redirect()
            ->route('locations.index')
            ->with('success', 'تم تحديث الموقع بنجاح');
    }

    /**
     * Remove the specified location from storage.
     */
    public function destroy(Location $location)
    {
        $location->delete();

        return redirect()
            ->route('locations.index')
            ->with('success', 'تم حذف الموقع بنجاح');
    }
}
