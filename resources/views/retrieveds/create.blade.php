{{-- create.blade.php & edit.blade.php --}}
@extends('layouts.app')
@php
    // إذا ما كان فيه $retrieved → أنشئ كائن فارغ عشان ما يطلع خطأ
    $retrieved = $retrieved ?? new \App\Models\Retrieved();
@endphp
@section('title', $retrieved->exists ? 'تعديل مسترد' : 'إضافة مبلغ مسترد')

@section('page_content')
<div class="card">
    <div class="card-header">
        <h3>{{ $retrieved->exists ? 'تعديل' : 'إضافة' }} مبلغ مسترد</h3>
    </div>
    
    @if ($errors->any())
        <div class="alert alert-danger mt-3">
            <h5 class="mb-2"><i class="fas fa-exclamation-triangle"></i> حدثت أخطاء:</h5>
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ $retrieved->exists ? route('retrieveds.update', $retrieved) : route('retrieveds.store') }}" method="POST">
        @csrf
        @if($retrieved->exists) @method('PUT') @endif

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>الوصف <span class="text-danger">*</span></label>
                        <textarea name="description" class="form-control" rows="3" required>{{ old('description', $retrieved->description) }}</textarea>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>رقم الغرفة</label>
                        <input type="text" name="room_number" class="form-control" value="{{ old('room_number', $retrieved->room_number) }}" placeholder="مثال: 305">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label>التاريخ <span class="text-danger">*</span></label>
                        <input type="date" name="date" class="form-control"
                            value="{{ old('date', $retrieved->date ? (is_string($retrieved->date) ? $retrieved->date : $retrieved->date->format('Y-m-d')) : '') }}"
                            required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label>المبلغ <span class="text-danger">*</span></label>
                        <input type="number" name="amount" step="amount" class="form-control" value="{{ old('amount', $retrieved->amount) }}" step="0.01" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label>العملة <span class="text-danger">*</span></label>
                        <select name="currency_id" class="form-control" required>
                            @foreach($currencies as $currency)
                                <option value="{{ $currency->id }}" {{ old('currency_id', $retrieved->currency_id) == $currency->id ? 'selected' : '' }}>
                                    {{ $currency->name }} ({{ $currency->symbol }})
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>مرتبط بحجز (اختياري)</label>
                        <select name="booking_id" class="form-control">
                            <option value="">-- بدون حجز --</option>
                            @foreach($bookings as $booking)
                                <option value="{{ $booking->id }}" {{ old('booking_id', $retrieved->booking_id) == $booking->id ? 'selected' : '' }}>
                                    حجز رقم {{ $booking->id }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-success">
                <i class="fas fa-save"></i> {{ $retrieved->exists ? 'تحديث' : 'حفظ' }}
            </button>
            <a href="{{ route('retrieveds.index') }}" class="btn btn-secondary">رجوع</a>
        </div>
    </form>
</div>
@stop