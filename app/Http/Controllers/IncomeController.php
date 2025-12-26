<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIncomeRequest;
use App\Http\Requests\UpdateIncomeRequest;
use App\Models\Income;

class IncomeController extends Controller
{
    public function index()
    {
        $incomes = Income::latest()->paginate(20);

        return view('incomes.index', compact('incomes'));
    }

    public function create()
    {
        $income = new Income;

        return view('incomes.create', compact('income'));
    }

    public function store(StoreIncomeRequest $request)
    {
        Income::create($request->validated());

        return redirect()->route('reports.incomes.index')->with('success', 'تم إضافة الدخل بنجاح');
    }

    public function edit(Income $income)
    {
        return view('incomes.edit', compact('income'));
    }

    public function update(UpdateIncomeRequest $request, Income $income)
    {
        $income->update($request->validated());

        return redirect()->route('reports.incomes.index')->with('success', 'تم تحديث الدخل');
    }

    public function destroy(Income $income)
    {
        $income->delete();

        return back()->with('success', 'تم حذف الدخل');
    }
}
