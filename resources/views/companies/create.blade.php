@extends('layouts.app')

@section('title', 'إضافة شركة جديدة')

@section('content_header')
    <h1 class="m-0">إضافة شركة جديدة</h1>
@stop

@section('page_content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">بيانات الشركة</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ route('companies.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="name">الاسم <span class="text-danger">*</span></label>
                            <input type="text" 
                                   class="form-control @error('name') is-invalid @enderror" 
                                   id="name" 
                                   name="name" 
                                   value="{{ old('name') }}" 
                                   required>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="commercial_register">السجل التجاري</label>
                            <input type="text" 
                                   class="form-control @error('commercial_register') is-invalid @enderror" 
                                   id="commercial_register" 
                                   name="commercial_register" 
                                   value="{{ old('commercial_register') }}">
                            @error('commercial_register')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <small class="form-text text-muted">حقل اختياري</small>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> حفظ
                            </button>
                            <a href="{{ route('companies.index') }}" class="btn btn-default">
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

