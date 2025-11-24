@extends('layouts.app')

@section('title', 'تفاصيل السيارة')

@section('content_header')
    <h1 class="m-0">تفاصيل السيارة</h1>
@stop

@section('page_content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">بيانات السيارة</h3>
                    <div class="card-tools">
                        <a href="{{ route('cars.edit', $car) }}" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> تعديل
                        </a>
                        <a href="{{ route('cars.index') }}" class="btn btn-default btn-sm">
                            <i class="fas fa-arrow-right"></i> رجوع
                        </a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 200px;">رقم اللوحة</th>
                            <td>{{ $car->plate_number }}</td>
                        </tr>
                        <tr>
                            <th>الموديل</th>
                            <td>{{ $car->model ?? '-' }}</td>
                        </tr>
                        <tr>
                            <th>اللون</th>
                            <td>{{ $car->color ?? '-' }}</td>
                        </tr>
                        <tr>
                            <th>تاريخ الإنشاء</th>
                            <td>{{ $car->created_at->format('Y-m-d H:i') }}</td>
                        </tr>
                        <tr>
                            <th>آخر تحديث</th>
                            <td>{{ $car->updated_at->format('Y-m-d H:i') }}</td>
                        </tr>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@stop

