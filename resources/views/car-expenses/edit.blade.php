@extends('layouts.app')

@section('title', 'تعديل بيانات المصروف')

@section('content_header')
    <h1 class="m-0">تعديل بيانات المصروف</h1>
@stop

@section('page_content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">بيانات المصروف</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ route('car-expenses.update', $carExpense) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="car_id">السيارة <span class="text-danger">*</span></label>
                            <select class="form-control @error('car_id') is-invalid @enderror" 
                                    id="car_id" 
                                    name="car_id" 
                                    required>
                                <option value="">اختر السيارة</option>
                                @foreach($cars as $car)
                                    <option value="{{ $car->id }}" {{ old('car_id', $carExpense->car_id) == $car->id ? 'selected' : '' }}>
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

                        <div class="form-group">
                            <label for="type">النوع <span class="text-danger">*</span></label>
                            <select class="form-control @error('type') is-invalid @enderror" 
                                    id="type" 
                                    name="type" 
                                    required>
                                <option value="">اختر النوع</option>
                                @foreach(\App\Models\CarExpense::getTypeOptions() as $value => $label)
                                    <option value="{{ $value }}" {{ old('type', $carExpense->type) == $value ? 'selected' : '' }}>
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

                        <div class="form-group">
                            <label for="description">الوصف</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" 
                                      id="description" 
                                      name="description" 
                                      rows="3">{{ old('description', $carExpense->description) }}</textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="cost">التكلفة <span class="text-danger">*</span></label>
                            <input type="number" 
                                   step="0.01" 
                                   min="0"
                                   class="form-control @error('cost') is-invalid @enderror" 
                                   id="cost" 
                                   name="cost" 
                                   value="{{ old('cost', $carExpense->cost) }}" 
                                   required>
                            @error('cost')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> تحديث
                            </button>
                            <a href="{{ route('car-expenses.index') }}" class="btn btn-default">
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

