<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExternalLocationRequest;
use App\Http\Requests\UpdateExternalLocationRequest;
use App\Models\ExternalLocation;
use Illuminate\Http\Request;

class ExternalLocationController extends Controller
{
    /**
     * Display a listing of external locations.
     */
    public function index(Request $request)
    {
        $query = ExternalLocation::query();

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where('name', 'like', "%{$search}%")
                ->orWhere('address', 'like', "%{$search}%");
        }

        $externalLocations = $query->latest()->paginate(15);

        return view('external-locations.index', compact('externalLocations'));
    }

    /**
     * Show the form for creating a new external location.
     */
    public function create()
    {
        $types = ExternalLocation::getTypeOptions();

        return view('external-locations.create', compact('types'));
    }

    /**
     * Store a newly created external location in storage.
     */
    public function store(StoreExternalLocationRequest $request)
    {
        ExternalLocation::create($request->validated());

        return redirect()
            ->route('external-locations.index')
            ->with('success', 'تم إضافة الموقع الخارجي بنجاح');
    }

    /**
     * Display the specified external location.
     */
    public function show(ExternalLocation $externalLocation)
    {
        return view('external-locations.show', compact('externalLocation'));
    }

    /**
     * Show the form for editing the specified external location.
     */
    public function edit(ExternalLocation $externalLocation)
    {
        $types = ExternalLocation::getTypeOptions();

        return view('external-locations.edit', compact('externalLocation', 'types'));
    }

    /**
     * Update the specified external location in storage.
     */
    public function update(UpdateExternalLocationRequest $request, ExternalLocation $externalLocation)
    {
        $externalLocation->update($request->validated());

        return redirect()
            ->route('external-locations.index')
            ->with('success', 'تم تحديث الموقع الخارجي بنجاح');
    }

    /**
     * Remove the specified external location from storage.
     */
    public function destroy(ExternalLocation $externalLocation)
    {
        $externalLocation->delete();

        return redirect()
            ->route('external-locations.index')
            ->with('success', 'تم حذف الموقع الخارجي بنجاح');
    }
}
