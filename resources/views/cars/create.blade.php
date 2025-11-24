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
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ route('cars.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="plate_number">رقم اللوحة <span class="text-danger">*</span></label>
                            <input type="text" 
                                   class="form-control @error('plate_number') is-invalid @enderror" 
                                   id="plate_number" 
                                   name="plate_number" 
                                   value="{{ old('plate_number') }}" 
                                   required>
                            @error('plate_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="model">الموديل</label>
                            <input type="text" 
                                   class="form-control @error('model') is-invalid @enderror" 
                                   id="model" 
                                   name="model" 
                                   value="{{ old('model') }}">
                            @error('model')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="color">اللون</label>
                            <input type="text" 
                                   class="form-control @error('color') is-invalid @enderror" 
                                   id="color" 
                                   name="color" 
                                   value="{{ old('color') }}">
                            @error('color')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> حفظ
                            </button>
                            <a href="{{ route('cars.index') }}" class="btn btn-default">
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

