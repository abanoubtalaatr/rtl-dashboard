@extends('layouts.app')

@section('title', 'المشرفين')

@section('content_header')
    <h1 class="m-0">قائمة المشرفين</h1>
@stop

@section('page_content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">المشرفين</h3>
        <div class="card-tools">
            <a href="{{ route('supervisors.create') }}" class="btn btn-success btn-sm">
                <i class="fas fa-plus"></i> إضافة مشرف جديد
            </a>
        </div>
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>الاسم</th>
                    <th>المستخدم</th>
                    <th>تاريخ الإضافة</th>
                    <th>الإجراءات</th>
                </tr>
            </thead>
            <tbody>
                @forelse($supervisors as $supervisor)
                    <tr>
                        <td>{{ $loop->iteration + ($supervisors->currentPage() - 1) * $supervisors->perPage() }}</td>
                        <td>{{ $supervisor->name }}</td>
                        <td>{{ $supervisor->user->name ?? 'غير محدد' }}</td>
                        <td>{{ $supervisor->created_at->format('d/m/Y') }}</td>
                        <td>
                            @if (auth()->user()->isSuperAdmin() || auth()->user()->isAdmin())
                            <a href="{{ route('supervisors.edit', $supervisor) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('supervisors.destroy', $supervisor) }}" method="POST" class="d-inline">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('هل أنت متأكد؟')">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="5" class="text-center">لا يوجد مشرفين</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="card-footer">
        {{ $supervisors->links() }}
    </div>
</div>
@stop