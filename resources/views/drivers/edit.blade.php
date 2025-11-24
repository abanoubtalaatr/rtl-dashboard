@extends('layouts.app')

@section('title', 'تعديل بيانات السائق')

@section('content_header')
    <h1 class="m-0">تعديل بيانات السائق</h1>
@stop

@section('page_content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">بيانات السائق</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ route('drivers.update', $driver) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name">الاسم <span class="text-danger">*</span></label>
                            <input type="text" 
                                   class="form-control @error('name') is-invalid @enderror" 
                                   id="name" 
                                   name="name" 
                                   value="{{ old('name', $driver->name) }}" 
                                   required>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="mobile">رقم الجوال <span class="text-danger">*</span></label>
                            <input type="text" 
                                   class="form-control @error('mobile') is-invalid @enderror" 
                                   id="mobile" 
                                   name="mobile" 
                                   value="{{ old('mobile', $driver->mobile) }}" 
                                   required>
                            @error('mobile')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="status">الحالة <span class="text-danger">*</span></label>
                            <select class="form-control @error('status') is-invalid @enderror" 
                                    id="status" 
                                    name="status" 
                                    required>
                                <option value="">اختر الحالة</option>
                                <option value="on_break" {{ old('status', $driver->status) == 'on_break' ? 'selected' : '' }}>
                                    في الاستراحة
                                </option>
                                <option value="in_operation" {{ old('status', $driver->status) == 'in_operation' ? 'selected' : '' }}>
                                    في التشغيل
                                </option>
                            </select>
                            @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="license_number">رقم الرخصة <span class="text-danger">*</span></label>
                            <input type="text" 
                                   class="form-control @error('license_number') is-invalid @enderror" 
                                   id="license_number" 
                                   name="license_number" 
                                   value="{{ old('license_number', $driver->license_number) }}" 
                                   required>
                            @error('license_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="license_image">صورة الرخصة</label>
                            @if($driver->license_image)
                                <div class="mb-2">
                                    <img src="{{ $driver->license_image_url }}" 
                                         alt="صورة الرخصة الحالية" 
                                         style="max-width: 200px; max-height: 200px; border: 1px solid #ddd; padding: 5px;">
                                    <p class="text-muted small">الصورة الحالية</p>
                                </div>
                            @endif
                            <div class="custom-file">
                                <input type="file" 
                                       class="custom-file-input @error('license_image') is-invalid @enderror" 
                                       id="license_image" 
                                       name="license_image"
                                       accept="image/*">
                                <label class="custom-file-label" for="license_image">اختر صورة جديدة (اختياري)</label>
                            </div>
                            @error('license_image')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <small class="form-text text-muted">الأنواع المسموحة: jpeg, png, jpg, gif - الحد الأقصى: 2 ميجابايت</small>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> تحديث
                            </button>
                            <a href="{{ route('drivers.index') }}" class="btn btn-default">
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

@section('js')
    <script>
        // Update file input label
        document.getElementById('license_image').addEventListener('change', function(e) {
            const fileName = e.target.files[0]?.name || 'اختر صورة جديدة (اختياري)';
            e.target.nextElementSibling.textContent = fileName;
        });
    </script>
@stop


