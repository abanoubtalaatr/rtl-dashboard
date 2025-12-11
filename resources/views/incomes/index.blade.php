{{-- resources/views/incomes/index.blade.php --}}
@extends('layouts.app')

@section('title', 'الدخل')

@section('content_header')
    <h1>الدخل والإيرادات</h1>
    <a href="{{ route('reports.incomes.create') }}" class="btn btn-primary mt-4">
        <i class="fas fa-plus"></i> إضافة دخل جديد
    </a>
@stop

@section('page_content')
<div class="card">
    <div class="card-body">
        <table class="table table-bordered table-hover table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>اسم الدخل</th>
                    <th>الوصف</th>
                    <th>المبلغ</th>
                    <th>التاريخ</th>
                    <th>الإجراءات</th>
                </tr>
            </thead>
            <tbody>
                @forelse($incomes as $income)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><strong>{{ $income->name }}</strong></td>
                        <td>{{ $income->description ?? '—' }}</td>
                        <td class="text-success font-weight-bold">
                            {{ number_format($income->amount, 2) }}
                        </td>
                        <td>{{ $income->created_at->format('d/m/Y') }}</td>
                        <td>
                            <a href="{{ route('reports.incomes.edit', $income) }}" class="btn btn-sm btn-warning">
                                تعديل
                            </a>
                            <form action="{{ route('reports.incomes.destroy', $income) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('متأكد من الحذف؟')">
                                    حذف
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted">لا توجد إيرادات مسجلة حتى الآن</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        {{ $incomes->links() }}
    </div>
</div>
@stop