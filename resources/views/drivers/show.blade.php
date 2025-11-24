@extends('layouts.app')

@section('title', 'تفاصيل السائق')

@section('content_header')
    <h1 class="m-0">تفاصيل السائق</h1>
@stop

@section('page_content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">بيانات السائق</h3>
                    <div class="card-tools">
                        <a href="{{ route('drivers.edit', $driver) }}" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> تعديل
                        </a>
                        <a href="{{ route('drivers.index') }}" class="btn btn-default btn-sm">
                            <i class="fas fa-arrow-right"></i> رجوع
                        </a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-bordered">
                                <tr>
                                    <th style="width: 200px;">الاسم</th>
                                    <td>{{ $driver->name }}</td>
                                </tr>
                                <tr>
                                    <th>رقم الجوال</th>
                                    <td>{{ $driver->mobile }}</td>
                                </tr>
                                <tr>
                                    <th>الحالة</th>
                                    <td>
                                        <span class="badge badge-info">{{ $driver->status_label }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>رقم الرخصة</th>
                                    <td>{{ $driver->license_number }}</td>
                                </tr>
                                <tr>
                                    <th>تاريخ الإنشاء</th>
                                    <td>{{ $driver->created_at->format('Y-m-d H:i') }}</td>
                                </tr>
                                <tr>
                                    <th>آخر تحديث</th>
                                    <td>{{ $driver->updated_at->format('Y-m-d H:i') }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            @if($driver->license_image)
                                <div class="text-center">
                                    <h5>صورة الرخصة</h5>
                                    <a href="{{ $driver->license_image_url }}" target="_blank">
                                        <img src="{{ $driver->license_image_url }}" 
                                             alt="صورة الرخصة" 
                                             class="img-fluid"
                                             style="max-width: 100%; border: 1px solid #ddd; padding: 10px;">
                                    </a>
                                    <p class="text-muted small mt-2">انقر على الصورة لعرضها بحجم كامل</p>
                                </div>
                            @else
                                <div class="text-center text-muted">
                                    <i class="fas fa-image fa-5x"></i>
                                    <p>لا توجد صورة للرخصة</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@stop


