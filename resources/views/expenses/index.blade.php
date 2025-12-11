@extends('layouts.app')

@section('title', 'المصروفات')

@section('content_header')
    <h1 class="mt-5">المصروفات</h1>
    <a href="{{ route('reports.expenses.create') }}" class="btn btn-primary mt-4">إضافة مصروف جديد</a>
@stop

@section('page_content')
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>النوع</th>
                        <th>الوصف</th>
                        <th>المبلغ</th>
                        <th>التاريخ</th>
                        <th>الإجراءات</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($expenses as $expense)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $expense->type == 'nasri_expenses' ? 'مصروفات نسرية' : 'مصروفات عامة' }}</td>
                            <td>{{ $expense->description ?? '—' }}</td>
                            <td class="text-danger font-weight-bold">{{ number_format($expense->amount, 2) }}</td>
                            <td>{{ $expense->created_at->format('d/m/Y') }}</td>
                            <td>
                                <a href="{{ route('reports.expenses.edit', $expense) }}" class="btn btn-sm btn-warning">تعديل</a>
                                <form action="{{ route('reports.expenses.destroy', $expense) }}" method="POST" class="d-inline">
                                    @csrf 
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('متأكد؟')">حذف</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">لا توجد مصروفات</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            {{ $expenses->links() }}
        </div>
    </div>
@stop