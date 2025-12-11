@extends('layouts.app')

@section('title', 'إضافة راتب جديد - ' . $driver->name)

@section('content_header')
    <h1 class="m-0">إضافة راتب جديد للسائق: {{ $driver->name }}</h1>
@stop

@section('page_content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">بيانات الراتب</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('drivers.salaries.store', $driver) }}" method="POST">
                    @csrf

                    <input type="hidden" name="driver_id" value="{{ $driver->id }}">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>الراتب الأساسي <span class="text-danger">*</span></label>
                                <input type="number" step="0.01" name="salary" class="form-control @error('salary') is-invalid @enderror"
                                       value="{{ old('salary') }}" required placeholder="مثال: 5000">
                                @error('salary')<span class="invalid-feedback">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>العمولة</label>
                                <input type="number" step="0.01" name="commission" class="form-control"
                                       value="{{ old('commission', 0) }}" placeholder="0">
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-end">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>من تاريخ <span class="text-danger">*</span></label>
                                <input type="date" name="from_date" id="from_date" class="form-control @error('from_date') is-invalid @enderror"
                                       value="{{ old('from_date') }}" required>
                                @error('from_date')<span class="invalid-feedback">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="form-group">
                                <label>إلى تاريخ <span class="text-danger">*</span></label>
                                <input type="date" name="to_date" id="to_date" class="form-control @error('to_date') is-invalid @enderror"
                                       value="{{ old('to_date') }}" required>
                                @error('to_date')<span class="invalid-feedback">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label>عدد الأيام</label>
                                <input type="text" id="number_of_days_display" class="form-control text-center font-weight-bold"
                                       style="background:#f8f9fa; color:green;" readonly value="0">
                                <input type="hidden" name="number_of_days" id="number_of_days" value="0">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>السلف</label>
                                <input type="number" step="0.01" name="advance" class="form-control"
                                       value="{{ old('advance', 0) }}" placeholder="0">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>الخصومات</label>
                                <input type="number" step="0.01" name="discount" class="form-control"
                                       value="{{ old('discount', 0) }}" placeholder="0">
                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-4">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> حفظ الراتب
                        </button>
                        <a href="{{ route('drivers.salaries.index', $driver) }}" class="btn btn-default">
                            <i class="fas fa-times"></i> إلغاء
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop

@section('js')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const fromDate = document.getElementById('from_date');
    const toDate = document.getElementById('to_date');
    const display = document.getElementById('number_of_days_display');
    const hidden = document.getElementById('number_of_days');

    function calculateDays() {
        if (!fromDate.value || !toDate.value) {
            display.value = '0';
            hidden.value = '0';
            display.style.color = 'gray';
            return;
        }

        const from = new Date(fromDate.value);
        const to = new Date(toDate.value);

        if (to < from) {
            display.value = 'خطأ!';
            display.style.color = 'red';
            hidden.value = '0';
            return;
        }

        const diffTime = Math.abs(to - from);
        const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)) + 1;

        display.value = diffDays;
        hidden.value = diffDays;
        display.style.color = diffDays > 0 ? 'green' : 'gray';
    }

    fromDate.addEventListener('change', calculateDays);
    toDate.addEventListener('change', calculateDays);

    // Initial calculation
    calculateDays();
});
</script>
@stop