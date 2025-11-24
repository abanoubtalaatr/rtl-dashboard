@extends('layouts.app')

@section('title', 'تفاصيل المصروف')

@section('content_header')
    <h1 class="m-0">تفاصيل المصروف</h1>
@stop

@section('page_content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">بيانات المصروف</h3>
                    <div class="card-tools">
                        <a href="{{ route('car-expenses.edit', $carExpense) }}" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> تعديل
                        </a>
                        <a href="{{ route('car-expenses.index') }}" class="btn btn-default btn-sm">
                            <i class="fas fa-arrow-right"></i> رجوع
                        </a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 200px;">السيارة</th>
                            <td>{{ $carExpense->car->plate_number ?? '-' }}</td>
                        </tr>
                        <tr>
                            <th>النوع</th>
                            <td>{{ $carExpense->type_label }}</td>
                        </tr>
                        <tr>
                            <th>الوصف</th>
                            <td>{{ $carExpense->description ?? '-' }}</td>
                        </tr>
                        <tr>
                            <th>التكلفة</th>
                            <td>{{ number_format($carExpense->cost, 2) }}</td>
                        </tr>
                        <tr>
                            <th>تاريخ الإنشاء</th>
                            <td>{{ $carExpense->created_at->format('Y-m-d H:i') }}</td>
                        </tr>
                        <tr>
                            <th>آخر تحديث</th>
                            <td>{{ $carExpense->updated_at->format('Y-m-d H:i') }}</td>
                        </tr>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@stop

