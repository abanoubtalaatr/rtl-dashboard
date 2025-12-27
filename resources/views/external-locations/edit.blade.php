@extends('layouts.app')

@section('title', 'تعديل الموقع الخارجي')

@section('content_header')
    <h1 class="m-0">تعديل الموقع الخارجي</h1>
@stop

@section('page_content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">تعديل بيانات الموقع الخارجي: {{ $externalLocation->name }}</h3>
                </div>
                <form action="{{ route('external-locations.update', $externalLocation) }}" method="POST">
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
                            <label for="name">اسم الموقع الخارجي <span class="text-danger">*</span></label>
                            <input type="text" name="name" id="name" 
                                   class="form-control @error('name') is-invalid @enderror"
                                   value="{{ old('name', $externalLocation->name) }}" 
                                   placeholder="مثال: فندق هيلتون، مطار القاهرة" required>
                            @error('name')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="type">نوع الموقع <span class="text-danger">*</span></label>
                            <select name="type" id="type" 
                                    class="form-control @error('type') is-invalid @enderror" required>
                                <option value="">-- اختر نوع الموقع --</option>
                                @foreach($types as $key => $label)
                                    <option value="{{ $key }}" 
                                            {{ old('type', $externalLocation->type) == $key ? 'selected' : '' }}>
                                        {{ $label }}
                                    </option>
                                @endforeach
                            </select>
                            @error('type')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="address">العنوان</label>
                            <textarea name="address" id="address" rows="3"
                                      class="form-control @error('address') is-invalid @enderror"
                                      placeholder="العنوان التفصيلي للموقع (اختياري)">{{ old('address', $externalLocation->address) }}</textarea>
                            @error('address')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                            <small class="form-text text-muted">
                                يمكنك إضافة عنوان تفصيلي يساعد في تحديد الموقع بدقة
                            </small>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> حفظ التعديلات
                        </button>
                        <a href="{{ route('external-locations.index') }}" class="btn btn-secondary">
                            <i class="fas fa-times"></i> إلغاء
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

