@extends('layouts.app')

@section('title', 'إعدادات النظام')

@section('content_header')
    <h1>إعدادات النظام</h1>
@stop

@section('page_content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">إعدادات الحجوزات الخارجية</h3>
            </div>

            <form action="{{ route('settings.update', $setting) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="card-body">

                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <div class="form-group">
                        <!-- مهم جدًا: hidden input قبل الـ checkbox -->
                        <input type="hidden" name="enable_check_the_car_available" value="0">
                        
                        <div class="custom-control custom-switch">
                            <input type="checkbox"
                                   class="custom-control-input"
                                   id="enable_check_the_car_available"
                                   name="enable_check_the_car_available"
                                   value="1"
                                   {{ old('enable_check_the_car_available', $setting->value) ? 'checked' : '' }}>
                    
                            <label class="custom-control-label" for="enable_check_the_car_available">
                                تفعيل التحقق من توفر السيارة قبل إنشاء الحجز
                            </label>
                        </div>
                    
                        <small class="form-text text-muted">
                            عند التفعيل، لن يُسمح بحجز سيارة محجوزة في نفس الوقت.
                        </small>
                    </div>

                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> حفظ الإعدادات
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop