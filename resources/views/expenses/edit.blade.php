@extends('layouts.app')

@section('title', $expense->exists ? 'تعديل مصروف' : 'إضافة مصروف')

@section('page_content')
<div class="card">
    <div class="card-header">
        <h3>{{ $expense->exists ? 'تعديل' : 'إضافة' }} مصروف</h3>
    </div>
    <div class="card-body">
        <form action="{{ $expense->exists ? route('expenses.update', $expense) : route('expenses.store') }}" method="POST">
            @csrf
            @if($expense->exists) @method('PUT') @endif

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>النوع <span class="text-danger">*</span></label>
                        <input type="text" name="type" class="form-control" value="{{ old('type', $expense->type) }}" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>المبلغ <span class="text-danger">*</span></label>
                        <input type="number" step="0.01" name="amount" class="form-control" value="{{ old('amount', $expense->amount) }}" required>
                    </div>
                </div>
            </div>

            <div class="form-group mt-3">
                <label>الوصف (اختياري)</label>
                <textarea name="description" class="form-control" rows="3">{{ old('description', $expense->description) }}</textarea>
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-success btn-lg">حفظ</button>
                <a href="{{ route('expenses.index') }}" class="btn btn-secondary btn-lg">رجوع</a>
            </div>
        </form>
    </div>
</div>
@stop