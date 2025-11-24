@extends('layouts.app')

@section('title', 'تفاصيل الشركة')

@section('content_header')
    <h1 class="m-0">تفاصيل الشركة</h1>
@stop

@section('page_content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">بيانات الشركة</h3>
                    <div class="card-tools">
                        <a href="{{ route('companies.edit', $company) }}" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> تعديل
                        </a>
                        <a href="{{ route('companies.index') }}" class="btn btn-default btn-sm">
                            <i class="fas fa-arrow-right"></i> رجوع
                        </a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 200px;">الاسم</th>
                            <td>{{ $company->name }}</td>
                        </tr>
                        <tr>
                            <th>السجل التجاري</th>
                            <td>{{ $company->commercial_register ?? 'غير محدد' }}</td>
                        </tr>
                        <tr>
                            <th>تاريخ الإنشاء</th>
                            <td>{{ $company->created_at->format('Y-m-d H:i') }}</td>
                        </tr>
                        <tr>
                            <th>آخر تحديث</th>
                            <td>{{ $company->updated_at->format('Y-m-d H:i') }}</td>
                        </tr>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@stop

