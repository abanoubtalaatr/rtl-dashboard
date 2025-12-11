<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\Retrieved; // أو ExternalBooking
use Illuminate\Http\Request;

class RetrievedController extends Controller
{
    public function index()
    {
        $retrieveds = Retrieved::with(['currency', 'booking'])->latest()->paginate(20);

        return view('retrieveds.index', compact('retrieveds'));
    }

    // RetrievedController.php

    public function create()
    {
        $currencies = Currency::all();
        $retrieved = new Retrieved; // كائن فارغ

        return view('retrieveds.form', compact('retrieved', 'currencies'));
    }

    public function edit(Retrieved $retrieved)
    {
        $currencies = Currency::all();
        $retrieved->load('booking'); // لتحميل بيانات الحجز

        return view('retrieveds.form', compact('retrieved', 'currencies'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'description' => 'required|string',
            'room_number' => 'nullable|string|max:20',
            'currency_id' => 'required|exists:currencies,id',
            'date' => 'required|date',
            'amount' => 'required|numeric|min:0',
            'booking_id' => 'nullable|exists:bookings,id',
        ]);

        $retrieved = Retrieved::create($request->all());

        return redirect()->route('retrieveds.index')->with('success', 'تم إضافة المبلغ المسترد بنجاح');
    }

    public function show(Retrieved $retrieved)
    {
        return view('retrieveds.show', compact('retrieved'));
    }

    public function update(Request $request, Retrieved $retrieved)
    {
        $request->validate([
            'description' => 'required|string',
            'room_number' => 'nullable|string|max:20',
            'currency_id' => 'required|exists:currencies,id',
            'date' => 'required|date',
            'amount' => 'required|numeric|min:0',
            'booking_id' => 'nullable|exists:bookings,id',
        ]);

        $retrieved->update($request->all());

        return redirect()->route('retrieveds.index')->with('success', 'تم تعديل المبلغ المسترد بنجاح');
    }

    public function destroy(Retrieved $retrieved)
    {
        $retrieved->delete();

        return back()->with('success', 'تم حذف المبلغ المسترد');
    }
}
