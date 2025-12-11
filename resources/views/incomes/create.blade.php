{{-- resources/views/incomes/create.blade.php --}}
@extends('layouts.app')

@section('title', 'إضافة دخل جديد')

@section('page_content')
<div class="card">
    <div class="card-header mt-3">
        <h3 class="card-title">إضافة دخل جديد</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('reports.incomes.store') }}" method="POST">
            @csrf

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>اسم الدخل <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}" required
                               placeholder="مثال: تبرعات، إعلانات، خدمات إضافية">
                        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>المبلغ <span class="text-danger">*</span></label>
                        <input type="number" step="0.01" name="amount" class="form-control" value="{{ old('amount') }}" required>
                        @error('amount') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                </div>
            </div>

            <div class="form-group mt-3">
                <label>الوصف (اختياري)</label>
                <textarea name="description" class="form-control" rows="4" placeholder="تفاصيل إضافية...">{{ old('description') }}</textarea>
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-success btn-lg">
                    <i class="fas fa-save"></i> حفظ الدخل
                </button>
                <a href="{{ route('reports.incomes.index') }}" class="btn btn-secondary btn-lg">رجوع</a>
            </div>
        </form>
    </div>
</div>
@stop