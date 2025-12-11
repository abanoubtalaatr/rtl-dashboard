@extends('layouts.app')

@section('title', 'إضافة سيارة جديدة')

@section('content_header')
    <h1 class="m-0">إضافة سيارة جديدة</h1>
@stop

@section('page_content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">بيانات السيارة</h3>
                </div>

                <div class="card-body">
                    <form action="{{ route('cars.store') }}" method="POST">
                        @csrf

                        <!-- Row 1: Plate Number + Model -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="plate_number">رقم اللوحة <span class="text-danger">*</span></label>
                                    <input type="text"
                                           class="form-control @error('plate_number') is-invalid @enderror"
                                           id="plate_number"
                                           name="plate_number"
                                           value="{{ old('plate_number') }}"
                                           required>
                                    @error('plate_number')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="model">الموديل</label>
                                    <input type="text"
                                           class="form-control @error('model') is-invalid @enderror"
                                           id="model"
                                           name="model"
                                           value="{{ old('model') }}">
                                    @error('model')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Row 2: Color + Car Type -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="color">اللون</label>
                                    <input type="text"
                                           class="form-control @error('color') is-invalid @enderror"
                                           id="color"
                                           name="color"
                                           value="{{ old('color') }}">
                                    @error('color')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="car_type_id">نوع السيارة <span class="text-danger">*</span></label>
                                    <select style="padding: unset;" class="form-control @error('car_type_id') is-invalid @enderror"
                                            id="car_type_id"
                                            name="car_type_id"
                                            required>
                                        <option value="">اختر النوع</option>
                                        @foreach($carTypes as $type)
                                            <option value="{{ $type->id }}"
                                                {{ old('car_type_id') == $type->id ? 'selected' : '' }}>
                                                {{ $type->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('car_type_id')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Submit Buttons -->
                        <div class="row mt-4">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i> حفظ
                                </button>
                                <a href="{{ route('cars.index') }}" class="btn btn-secondary ml-2">
                                    <i class="fas fa-times"></i> إلغاء
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@stop

