<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\DriverSalary;
use Illuminate\Http\Request;

class DriverSalaryController extends Controller
{
    public function index(Driver $driver)
    {
        $salaries = $driver->salaries()->latest()->paginate(20);

        return view('driver_salaries.index', compact('driver', 'salaries'));
    }

    public function create(Driver $driver)
    {
        return view('driver_salaries.create', compact('driver'));
    }

    public function store(Request $request, Driver $driver)
    {
        $validated = $request->validate([
            'salary' => 'required|numeric|min:0',
            'from_date' => 'required|date',
            'to_date' => 'required|date|after_or_equal:from_date',
            'advance' => 'nullable|numeric|min:0',
            'discount' => 'nullable|numeric|min:0',
            'commission' => 'nullable|numeric|min:0',
            'number_of_days' => 'required|integer|min:0',
        ]);

        $validated['driver_id'] = $driver->id;

        DriverSalary::create($validated);

        return redirect()->route('drivers.salaries.index', $driver)
            ->with('success', 'تم إضافة الراتب بنجاح');
    }

    public function edit(Driver $driver, $driverSalary)
    {
        $driverSalary = DriverSalary::find($driverSalary);

        return view('driver_salaries.edit', compact('driver', 'driverSalary'));
    }

    public function update(Request $request, Driver $driver, $driverSalary)
    {
        $driverSalary = DriverSalary::find($driverSalary);

        $validated = $request->validate([
            'salary' => 'required|numeric|min:0',
            'from_date' => 'required|date',
            'to_date' => 'required|date|after_or_equal:from_date',
            'advance' => 'nullable|numeric|min:0',
            'discount' => 'nullable|numeric|min:0',
            'commission' => 'nullable|numeric|min:0',
            'number_of_days' => 'required|integer|min:0',
        ]);

        $driverSalary->update($validated);

        return redirect()->route('drivers.salaries.index', $driver)
            ->with('success', 'تم تعديل الراتب بنجاح');
    }

    public function destroy(Driver $driver, DriverSalary $driverSalary)
    {
        if ($driverSalary->driver_id !== $driver->id) {
            abort(404);
        }

        $driverSalary->delete();

        return back()->with('success', 'تم حذف الراتب بنجاح');
    }
}
