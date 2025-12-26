<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExpenseRequest;
use App\Http\Requests\UpdateExpenseRequest;
use App\Models\Expense;

class ExpenseController extends Controller
{
    public function index()
    {
        $expenses = Expense::latest()->paginate(20);

        return view('expenses.index', compact('expenses'));
    }

    public function create()
    {
        $expense = new Expense;

        return view('expenses.create', compact('expense'));
    }

    public function store(StoreExpenseRequest $request)
    {
        Expense::create($request->validated());

        return redirect()->route('reports.expenses.index')->with('success', 'تم إضافة المصروف بنجاح');
    }

    public function edit(Expense $expense)
    {
        return view('expenses.edit', compact('expense'));
    }

    public function update(UpdateExpenseRequest $request, Expense $expense)
    {
        $expense->update($request->validated());

        return redirect()->route('reports.expenses.index')->with('success', 'تم تحديث المصروف');
    }

    public function destroy(Expense $expense)
    {
        $expense->delete();

        return back()->with('success', 'تم حذف المصروف');
    }
}
