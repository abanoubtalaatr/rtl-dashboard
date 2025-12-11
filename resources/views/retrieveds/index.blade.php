@extends('layouts.app')

@section('title', 'المبالغ المستردة')

@section('content_header')
    <h1>المبالغ المستردة</h1>
    <a href="{{ route('retrieveds.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> إضافة مسترد جديد
    </a>
@stop

@section('page_content')
<div class="card">
    <div class="card-body">
        <table class="table table-bordered table-hover">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>التاريخ</th>
                    <th>الوصف</th>
                    <th>رقم الغرفة</th>
                    <th>المبلغ</th>
                    <th>العملة</th>
                    <th>الحجز</th>
                    <th>الإجراءات</th>
                </tr>
            </thead>
            <tbody>
                @forelse($retrieveds as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ \Illuminate\Support\Carbon::parse($item->date)->format('d/m/Y') }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->room_number ?? '—' }}</td>
                    <td>{{ number_format($item->amount, 2) }}</td>
                    <td>{{ $item->currency->name }}</td>
                    <td>{{ $item->booking_id ? "#{$item->booking_id}" : 'بدون حجز' }}</td>
                    <td>
                        <a href="{{ route('retrieveds.edit', $item) }}" class="btn btn-sm btn-warning">تعديل</a>
                        <form action="{{ route('retrieveds.destroy', $item) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('متأكد من الحذف؟')">حذف</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="8" class="text-center">لا توجد مبالغ مستردة</td></tr>
                @endforelse
            </tbody>
        </table>
        {{ $retrieveds->links() }}
    </div>
</div>
@stop