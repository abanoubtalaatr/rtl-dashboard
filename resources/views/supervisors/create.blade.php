@extends('layouts.app')

@section('title', 'إضافة مشرف جديد')

@section('content_header')
    <h1 class="m-0">إضافة مشرف جديد</h1>
@stop

@section('page_content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">إضافة مشرف جديد</h3>
        </div>

        <div class="card-body">
            <form action="{{ route('supervisors.store') }}" method="POST">
                @csrf

                <!-- Row: Name + User Select -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">اسم المشرف <span class="text-danger">*</span></label>
                            <input type="text"
                                   id="name"
                                   name="name"
                                   class="form-control @error('name') is-invalid @enderror"
                                   value="{{ old('name') }}"
                                   required>
                            @error('name')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="user_id">المستخدم <span class="text-danger">*</span></label>
                            <select id="user_id"
                                    name="user_id"
                                    style="padding: unset;"
                                    class="form-control @error('user_id') is-invalid @enderror"
                                    required>
                                <option value="">اختر المستخدم</option>
                                @foreach ($users as $id => $name)
                                    <option value="{{ $id }}" {{ old('user_id') == $id ? 'selected' : '' }}>
                                        {{ $name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('user_id')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> حفظ
                    </button>
                    <a href="{{ route('supervisors.index') }}" class="btn btn-secondary mx-2">
                        <i class="fas fa-times"></i> إلغاء
                    </a>
                </div>
            </form>
        </div>
        <!-- /.card-body -->

        
    </div>
@stop   
