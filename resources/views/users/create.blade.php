@extends('layouts.app')

@section('title', 'إضافة مستخدم جديد')

@section('content_header')
    <h1 class="m-0">إضافة مستخدم جديد</h1>
@stop

@section('page_content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">بيانات الفندق</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ route('users.store') }}" method="POST">
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
                            <label for="email">البريد الإلكتروني <span class="text-danger">*</span></label>
                            <input type="email" 
                                   class="form-control @error('email') is-invalid @enderror" 
                                   id="email" 
                                   name="email" 
                                   value="{{ old('email') }}" 
                                   required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">كلمة المرور <span class="text-danger">*</span></label>
                            <input type="password" 
                                   class="form-control @error('password') is-invalid @enderror" 
                                   id="password" 
                                   name="password" 
                                   required>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation">تأكيد كلمة المرور <span class="text-danger">*</span></label>
                            <input type="password" 
                                   class="form-control" 
                                   id="password_confirmation" 
                                   name="password_confirmation" 
                                   required>
                        </div>

                        <div class="form-group">
                            <label>الصلاحيات <span class="text-danger">*</span></label>
                            <div class="card">
                                <div class="card-body">
                                    @foreach(\App\Models\User::getRoleOptions() as $value => $label)
                                        <div class="custom-control custom-radio mb-2">
                                            <input type="radio" 
                                                   class="custom-control-input @error('role') is-invalid @enderror" 
                                                   id="role_{{ $value }}" 
                                                   name="role" 
                                                   value="{{ $value }}"
                                                   {{ old('role', 'user') == $value ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="role_{{ $value }}">
                                                @if($value === 'super_admin')
                                                    <i class="fas fa-crown text-warning"></i>
                                                @elseif($value === 'admin')
                                                    <i class="fas fa-user-shield text-info"></i>
                                                @else
                                                    <i class="fas fa-user text-secondary"></i>
                                                @endif
                                                <strong>{{ $label }}</strong>
                                                @if($value === 'super_admin')
                                                    <small class="text-muted d-block mr-4">
                                                        صلاحيات كاملة - يمكنه الوصول للتقارير وجميع الميزات
                                                    </small>
                                                @elseif($value === 'admin')
                                                    <small class="text-muted d-block mr-4">
                                                        صلاحيات إدارية - لا يمكنه الوصول للتقارير
                                                    </small>
                                                @else
                                                    <small class="text-muted d-block mr-4">
                                                        صلاحيات محدودة - مستخدم عادي
                                                    </small>
                                                @endif
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            @error('role')
                                <span class="text-danger d-block mt-1">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> حفظ
                            </button>
                            <a href="{{ route('users.index') }}" class="btn btn-default">
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

