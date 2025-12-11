{{-- resources/views/car-expenses/index.blade.php --}}
@extends('layouts.app')

@section('title', 'مصروفات السيارات')

@section('content_header')
    <h1 class="m-0">إدارة مصروفات السيارات</h1>
@stop

@section('page_content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h3 class="card-title">قائمة المصروفات</h3>
                    </div>
                    <div class="col-md-6 text-left">
                        <a href="{{ route('car-expenses.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> إضافة مصروف جديد
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <!-- Filters Form -->
                <form method="GET" action="{{ route('car-expenses.index') }}" class="mb-4">
                    <div class="row g-3">
                        <div class="col-md-3">
                            <label class="form-label">البحث</label>
                            <input type="text" name="search" class="form-control"
                                   placeholder="الوصف أو رقم اللوحة"
                                   value="{{ request('search') }}">
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">السيارة</label>
                            <select name="car_id" class="form-control" style="padding: unset;">
                                <option value="">الكل</option>
                                @foreach($cars as $car)
                                    <option value="{{ $car->id }}" {{ request('car_id') == $car->id ? 'selected' : '' }}>
                                        {{ $car->plate_number }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">النوع</label>
                            <select name="type" class="form-control" style="padding: unset;">
                                <option value="">الكل</option>
                                @foreach(\App\Models\CarExpense::typeOptions() as $value => $label)
                                    <option value="{{ $value }}" {{ request('type') == $value ? 'selected' : '' }}>
                                        {{ $label }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2 d-flex align-items-end">
                            <button type="submit" class="btn btn-primary w-100">
                                <i class="fas fa-search"></i> بحث
                            </button>
                        </div>
                        <div class="col-md-2 d-flex align-items-end">
                            <a href="{{ route('car-expenses.index') }}" class="btn btn-secondary w-100">
                                <i class="fas fa-eraser"></i> مسح البحث
                            </a>
                        </div>
                    </div>
                </form>

                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th width="5%">#</th>
                                <th>السيارة</th>
                                <th width="30%">الأنواع والتكاليف</th>
                                <th>الوصف</th>
                                <th width="12%">الإجمالي</th>
                                <th width="18%">الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($expenses as $expense)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>
                                        <strong>{{ $expense->car->plate_number ?? '-' }}</strong>
                                    </td>

                                    <!-- الأنواع مع التكلفة لكل نوع -->
                                    <td>
                                        @if(is_array($expense->items) && count($expense->items) > 0)
                                            @foreach($expense->items as $item)
                                                @php
                                                    $label = \App\Models\CarExpense::typeOptions()[$item['type']] ?? $item['type'];
                                                    $cost  = number_format($item['cost'], 2);
                                                @endphp
                                                <div class="mb-1">
                                                    @if($item['type'] === 'fuel')
                                                        <span class="badge bg-danger">
                                                            <i class="fas fa-gas-pump"></i> {{ $label }}
                                                        </span>
                                                    @elseif($item['type'] === 'spare_parts')
                                                        <span class="badge bg-info">
                                                            <i class="fas fa-cogs"></i> {{ $label }}
                                                        </span>
                                                    @elseif($item['type'] === 'oil_change')
                                                        <span class="badge bg-warning text-dark">
                                                            <i class="fas fa-oil-can"></i> {{ $label }}
                                                        </span>
                                                    @elseif($item['type'] === 'maintenance')
                                                        <span class="badge bg-success">
                                                            <i class="fas fa-tools"></i> {{ $label }}
                                                        </span>
                                                    @elseif($item['type'] === 'expense_traffic')
                                                        <span class="badge bg-primary">
                                                            <i class="fas fa-file-invoice-dollar"></i> {{ $label }}
                                                        </span>
                                                    @else
                                                        <span class="badge bg-secondary">{{ $label }}</span>
                                                    @endif
                                                    <strong class="ms-2">{{ $cost }} </strong>
                                                </div>
                                            @endforeach
                                        @else
                                            <span class="text-muted">لا توجد أنواع</span>
                                        @endif
                                    </td>

                                    <td>{{ $expense->description ?? '-' }}</td>

                                    <!-- الإجمالي (إما من العمود أو من accessor) -->
                                    <td class="text-center fw-bold text-primary fs-5">
                                        {{ number_format($expense->total_cost, 2) }} 
                                    </td>

                                    <td class="text-center">
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('car-expenses.show', $expense) }}"
                                               class="btn btn-info btn-sm" title="عرض">
                                                <i class="fas fa-eye"></i>
                                            </a>

                                            <a href="{{ route('car-expenses.edit', $expense) }}"
                                               class="btn btn-warning btn-sm" title="تعديل">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <button type="button"
                                                    class="btn btn-danger btn-sm delete-expense"
                                                    data-id="{{ $expense->id }}"
                                                    title="حذف">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center py-4 text-muted">
                                        لا توجد مصروفات مسجلة حتى الآن
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="d-flex justify-content-center mt-4">
                    {{ $expenses->appends(request()->query())->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Delete Form -->
<form id="delete-form" method="POST" style="display: none;">
    @csrf
    @method('DELETE')
</form>
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.delete-expense').forEach(button => {
        button.addEventListener('click', function () {
            const id = this.getAttribute('data-id');

            Swal.fire({
                title: 'هل أنت متأكد؟',
                text: 'سيتم حذف هذا المصروف نهائياً!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'نعم، احذف',
                cancelButtonText: 'إلغاء'
            }).then(result => {
                if (result.isConfirmed) {
                    const form = document.getElementById('delete-form');
                    form.action = `/car-expenses/${id}`;
                    form.submit();
                }
            });
        });
    });
});
</script>
@endsection