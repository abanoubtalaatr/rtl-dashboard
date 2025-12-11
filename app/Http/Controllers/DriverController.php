<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDriverRequest;
use App\Http\Requests\UpdateDriverRequest;
use App\Models\Driver;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $query = Driver::query();

        // Search functionality
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('mobile', 'like', "%{$search}%")
                    ->orWhere('license_number', 'like', "%{$search}%");
            });
        }

        $drivers = $query->latest()->paginate(10)->withQueryString();

        return view('drivers.index', compact('drivers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('drivers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDriverRequest $request): RedirectResponse
    {
        $data = $request->validated();

        // Handle image upload
        if ($request->hasFile('license_image')) {
            $data['license_image'] = $request->file('license_image')->store('drivers', 'public');
        }

        // Handle national ID images (multiple)
        if ($request->hasFile('national_images')) {
            $paths = [];
            foreach ($request->file('national_images') as $image) {
                $paths[] = $image->store('drivers/national', 'public');
            }
            $data['national_images'] = $paths;
        }

        Driver::create($data);

        return redirect()->route('drivers.index')
            ->with('success', 'تم إضافة السائق بنجاح.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Driver $driver): View
    {
        return view('drivers.show', compact('driver'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Driver $driver): View
    {
        return view('drivers.edit', compact('driver'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDriverRequest $request, Driver $driver): RedirectResponse
    {
        $data = $request->validated();

        // Handle image upload
        if ($request->hasFile('license_image')) {
            // Delete old image if exists
            if ($driver->license_image) {
                Storage::disk('public')->delete($driver->license_image);
            }
            $data['license_image'] = $request->file('license_image')->store('drivers', 'public');
        }

        // Handle national ID images (multiple)
        if ($request->hasFile('national_images')) {
            // Delete old images if exist
            if (is_array($driver->national_images)) {
                foreach ($driver->national_images as $oldPath) {
                    Storage::disk('public')->delete($oldPath);
                }
            }

            $paths = [];
            foreach ($request->file('national_images') as $image) {
                $paths[] = $image->store('drivers/national', 'public');
            }
            $data['national_images'] = $paths;
        }

        $driver->update($data);

        return redirect()->route('drivers.index')
            ->with('success', 'تم تحديث بيانات السائق بنجاح.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Driver $driver): RedirectResponse
    {
        // Delete image if exists
        if ($driver->license_image) {
            Storage::disk('public')->delete($driver->license_image);
        }

        // Delete national ID images if exist
        if (is_array($driver->national_images)) {
            foreach ($driver->national_images as $path) {
                Storage::disk('public')->delete($path);
            }
        }

        $driver->delete();

        return redirect()->route('drivers.index')
            ->with('success', 'تم حذف السائق بنجاح.');
    }
}
