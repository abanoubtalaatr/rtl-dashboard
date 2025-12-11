@extends('layouts.app')

@section('title', 'تعديل نوع السيارة')

@section('content_header')
    <h1 class="m-0">تعديل نوع السيارة</h1>
@stop

@section('page_content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">تعديل بيانات نوع السيارة</h3>
                </div>
                <form action="{{ route('car-types.update', $carType) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="form-group">
                            <label for="name">الاسم <span class="text-danger">*</span></label>
                            <input type="text" name="name" id="name" 
                                   class="form-control @error('name') is-invalid @enderror"
                                   value="{{ old('name', $carType->name) }}" placeholder="مثال: باص، كوستر، ميكروباص" required>
                            @error('name')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                            <small class="form-text text-muted">
                                أدخل نوع السيارة مثل: باص، كوستر، ميكروباص، سيارة ملاكي، إلخ
                            </small>
                        </div>

                        <div class="form-group">
                            <label for="description">الوصف</label>
                            <textarea name="description" id="description" rows="4"
                                      class="form-control @error('description') is-invalid @enderror"
                                      placeholder="وصف اختياري لنوع السيارة">{{ old('description', $carType->description) }}</textarea>
                            @error('description')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> تحديث
                        </button>
                        <a href="{{ route('car-types.index') }}" class="btn btn-secondary">
                            <i class="fas fa-times"></i> إلغاء
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop


