@extends('layouts.app')

@section('title', 'تفاصيل المستخدم')

@section('content_header')
    <h1 class="m-0">تفاصيل المستخدم</h1>
@stop

@section('page_content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">بيانات المستخدم</h3>
                    <div class="card-tools">
                        <a href="{{ route('users.edit', $user) }}" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> تعديل
                        </a>
                        <a href="{{ route('users.index') }}" class="btn btn-default btn-sm">
                            <i class="fas fa-arrow-right"></i> رجوع
                        </a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 200px;">الاسم</th>
                            <td>
                                @if($user->isSuperAdmin())
                                    <i class="fas fa-crown text-warning mr-2"></i>
                                @elseif($user->isAdmin())
                                    <i class="fas fa-user-shield text-info mr-2"></i>
                                @else
                                    <i class="fas fa-user text-secondary mr-2"></i>
                                @endif
                                {{ $user->name }}
                            </td>
                        </tr>
                        <tr>
                            <th>البريد الإلكتروني</th>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th>الصلاحيات</th>
                            <td>
                                @if($user->isSuperAdmin())
                                    <span class="badge badge-warning badge-lg">
                                        <i class="fas fa-crown"></i> {{ $user->role_label }}
                                    </span>
                                    <p class="text-muted mt-2 mb-0">
                                        <i class="fas fa-info-circle"></i>
                                        صلاحيات كاملة - يمكن الوصول للتقارير وجميع الميزات
                                    </p>
                                @elseif($user->isAdmin())
                                    <span class="badge badge-info badge-lg">
                                        <i class="fas fa-user-shield"></i> {{ $user->role_label }}
                                    </span>
                                    <p class="text-muted mt-2 mb-0">
                                        <i class="fas fa-info-circle"></i>
                                        صلاحيات إدارية - لا يمكن الوصول للتقارير
                                    </p>
                                @else
                                    <span class="badge badge-secondary badge-lg">
                                        <i class="fas fa-user"></i> {{ $user->role_label }}
                                    </span>
                                    <p class="text-muted mt-2 mb-0">
                                        <i class="fas fa-info-circle"></i>
                                        صلاحيات محدودة - مستخدم عادي
                                    </p>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>تاريخ الإنشاء</th>
                            <td>{{ $user->created_at->format('Y-m-d H:i') }}</td>
                        </tr>
                        <tr>
                            <th>آخر تحديث</th>
                            <td>{{ $user->updated_at->format('Y-m-d H:i') }}</td>
                        </tr>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@stop

