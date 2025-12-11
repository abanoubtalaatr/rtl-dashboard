<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSupervisorRequest;
use App\Http\Requests\UpdateSupervisorRequest;
use App\Models\Supervisor;
use App\Models\User;

class SupervisorController extends Controller
{
    public function index()
    {
        $supervisors = Supervisor::with('user')->latest()->paginate(20);

        return view('supervisors.index', compact('supervisors'));
    }

    public function create()
    {
        $users = User::whereDoesntHave('supervisor')->pluck('name', 'id');

        return view('supervisors.create', compact('users'));
    }

    public function store(StoreSupervisorRequest $request)
    {
        Supervisor::create($request->validated());

        return redirect()->route('supervisors.index')->with('success', 'تم إضافة المشرف بنجاح');
    }

    public function show(Supervisor $supervisor)
    {
        $supervisor->load('user');

        return view('supervisors.show', compact('supervisor'));
    }

    public function edit(Supervisor $supervisor)
    {
        $users = User::whereDoesntHave('supervisor')
            ->orWhere('id', $supervisor->user_id)
            ->pluck('name', 'id');

        return view('supervisors.edit', compact('supervisor', 'users'));
    }

    public function update(UpdateSupervisorRequest $request, Supervisor $supervisor)
    {
        $supervisor->update($request->validated());

        return redirect()->route('supervisors.index')->with('success', 'تم تحديث المشرف بنجاح');
    }

    public function destroy(Supervisor $supervisor)
    {
        $supervisor->delete();

        return back()->with('success', 'تم حذف المشرف بنجاح');
    }
}
