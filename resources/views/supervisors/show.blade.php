@extends('layouts.app')

@section('title', 'تفاصيل المشرف')

@section('content_header')
    <h1 class="m-0">تفاصيل المشرف</h1>
@stop

@section('page_content')
<div class="card">
    <div class="card-body">
        <table class="table table-bordered">
            <tr><th>الاسم</th><td>{{ $supervisor->name }}</td></tr>
            <tr><th>المستخدم</th><td>{{ $supervisor->user->name ?? '-' }}</td></tr>
            <tr><th>تاريخ الإضافة</th><td>{{ $supervisor->created_at->format('d/m/Y h:i A') }}</td></tr>
        </table>
    </div>
    <div class="card-footer">
        <a href="{{ route('supervisors.edit', $supervisor) }}" class="btn btn-warning">تعديل</a>
        <a href="{{ route('supervisors.index') }}" class="btn btn-secondary">رجوع</a>
    </div>
</div>
@stop