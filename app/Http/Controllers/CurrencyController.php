<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurrencyRequest;
use App\Http\Requests\UpdateCurrencyRequest;
use App\Models\Currency;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $query = Currency::query();

        // Search functionality
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where('name', 'like', "%{$search}%");
        }

        $currencies = $query->latest()->paginate(10)->withQueryString();

        return view('currencies.index', compact('currencies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('currencies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCurrencyRequest $request): RedirectResponse
    {
        Currency::create($request->validated());

        return redirect()->route('currencies.index')
            ->with('success', 'تم إضافة العملة بنجاح.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Currency $currency): View
    {
        return view('currencies.show', compact('currency'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Currency $currency): View
    {
        return view('currencies.edit', compact('currency'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCurrencyRequest $request, Currency $currency): RedirectResponse
    {
        $currency->update($request->validated());

        return redirect()->route('currencies.index')
            ->with('success', 'تم تحديث بيانات العملة بنجاح.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Currency $currency): RedirectResponse
    {
        $currency->delete();

        return redirect()->route('currencies.index')
            ->with('success', 'تم حذف العملة بنجاح.');
    }
}
