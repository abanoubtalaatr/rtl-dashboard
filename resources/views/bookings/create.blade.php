@extends('layouts.app')

@section('title', 'إضافة حجز جديد')

@section('content_header')
    <h1 class="m-0">إضافة حجز جديد</h1>
@stop

@section('page_content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">بيانات الحجز</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ route('bookings.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="type">نوع الحجز <span class="text-danger">*</span></label>
                            <select class="form-control @error('type') is-invalid @enderror" 
                                    id="type" 
                                    name="type" 
                                    required>
                                <option value="">اختر النوع</option>
                                @foreach(\App\Models\Booking::getTypeOptions() as $value => $label)
                                    <option value="{{ $value }}" {{ old('type') == $value ? 'selected' : '' }}>
                                        {{ $label }}
                                    </option>
                                @endforeach
                            </select>
                            @error('type')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="driver_id">السائق <span class="text-danger">*</span></label>
                                    <select class="form-control @error('driver_id') is-invalid @enderror" 
                                            id="driver_id" 
                                            name="driver_id" 
                                            required>
                                        <option value="">اختر السائق</option>
                                        @foreach($drivers as $driver)
                                            <option value="{{ $driver->id }}" {{ old('driver_id') == $driver->id ? 'selected' : '' }}>
                                                {{ $driver->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('driver_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="car_id">السيارة</label>
                                    <select class="form-control @error('car_id') is-invalid @enderror" 
                                            id="car_id" 
                                            name="car_id">
                                        <option value="">اختر السيارة</option>
                                        @foreach($cars as $car)
                                            <option value="{{ $car->id }}" {{ old('car_id') == $car->id ? 'selected' : '' }}>
                                                {{ $car->plate_number }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('car_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="customer_id">العميل</label>
                                    <select class="form-control @error('customer_id') is-invalid @enderror" 
                                            id="customer_id" 
                                            name="customer_id">
                                        <option value="">اختر العميل</option>
                                        @foreach($customers as $customer)
                                            <option value="{{ $customer->id }}" {{ old('customer_id') == $customer->id ? 'selected' : '' }}>
                                                {{ $customer->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('customer_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="company_id">الشركة</label>
                                    <select class="form-control @error('company_id') is-invalid @enderror" 
                                            id="company_id" 
                                            name="company_id">
                                        <option value="">اختر الشركة</option>
                                        @foreach($companies as $company)
                                            <option value="{{ $company->id }}" {{ old('company_id') == $company->id ? 'selected' : '' }}>
                                                {{ $company->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('company_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="booking_from">من <span class="text-danger">*</span></label>
                                    <input type="datetime-local" 
                                           class="form-control @error('booking_from') is-invalid @enderror" 
                                           id="booking_from" 
                                           name="booking_from" 
                                           value="{{ old('booking_from') }}" 
                                           required>
                                    @error('booking_from')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="booking_to">إلى <span class="text-danger">*</span></label>
                                    <input type="datetime-local" 
                                           class="form-control @error('booking_to') is-invalid @enderror" 
                                           id="booking_to" 
                                           name="booking_to" 
                                           value="{{ old('booking_to') }}" 
                                           required>
                                    @error('booking_to')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="cost">التكلفة <span class="text-danger">*</span></label>
                                    <input type="number" 
                                           step="0.01" 
                                           min="0"
                                           class="form-control @error('cost') is-invalid @enderror" 
                                           id="cost" 
                                           name="cost" 
                                           value="{{ old('cost') }}" 
                                           required>
                                    @error('cost')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="booking_price">سعر الحجز <span class="text-danger">*</span></label>
                                    <input type="number" 
                                           step="0.01" 
                                           min="0"
                                           class="form-control @error('booking_price') is-invalid @enderror" 
                                           id="booking_price" 
                                           name="booking_price" 
                                           value="{{ old('booking_price') }}" 
                                           required>
                                    @error('booking_price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="currency_id">العملة <span class="text-danger">*</span></label>
                                    <select class="form-control @error('currency_id') is-invalid @enderror" 
                                            id="currency_id" 
                                            name="currency_id" 
                                            required>
                                        <option value="">اختر العملة</option>
                                        @foreach($currencies as $currency)
                                            <option value="{{ $currency->id }}" {{ old('currency_id') == $currency->id ? 'selected' : '' }}>
                                                {{ $currency->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('currency_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> حفظ
                            </button>
                            <a href="{{ route('bookings.index') }}" class="btn btn-default">
                                <i class="fas fa-times"></i> إلغاء
                            </a>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@stop


