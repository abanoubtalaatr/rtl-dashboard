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
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="card-title">قائمة المصروفات</h3>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="{{ route('car-expenses.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus"></i> إضافة مصروف جديد
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <!-- Filters Form -->
                    <form method="GET" action="{{ route('car-expenses.index') }}" class="mb-3">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>البحث</label>
                                    <input type="text" name="search" class="form-control" 
                                           placeholder="البحث بالوصف أو رقم اللوحة" 
                                           value="{{ request('search') }}">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>السيارة</label>
                                    <select name="car_id" class="form-control">
                                        <option value="">الكل</option>
                                        @foreach($cars as $car)
                                            <option value="{{ $car->id }}" {{ request('car_id') == $car->id ? 'selected' : '' }}>
                                                {{ $car->plate_number }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>النوع</label>
                                    <select name="type" class="form-control">
                                        <option value="">الكل</option>
                                        <option value="fix" {{ request('type') == 'fix' ? 'selected' : '' }}>إصلاح</option>
                                        <option value="fuel" {{ request('type') == 'fuel' ? 'selected' : '' }}>وقود</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="form-group">
                                    <label>&nbsp;</label>
                                    <button type="submit" class="btn btn-primary btn-block">
                                        <i class="fas fa-search"></i> بحث
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>

                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>السيارة</th>
                                <th>النوع</th>
                                <th>الوصف</th>
                                <th>التكلفة</th>
                                <th>الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($expenses as $expense)
                                <tr>
                                    <td>{{ $expense->id }}</td>
                                    <td>{{ $expense->car->plate_number ?? '-' }}</td>
                                    <td>{{ $expense->type_label }}</td>
                                    <td>{{ $expense->description ?? '-' }}</td>
                                    <td>{{ number_format($expense->cost, 2) }}</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('car-expenses.show', $expense) }}"
                                               class="btn btn-info btn-sm me-1 mx-1" title="عرض">
                                                <i class="fas fa-eye"></i>
                                                عرض
                                            </a>
                                    
                                            <a href="{{ route('car-expenses.edit', $expense) }}"
                                               class="btn btn-warning btn-sm me-1 mx-1" title="تعديل">
                                                <i class="fas fa-edit"></i>
                                                تعديل
                                            </a>
                                    
                                            <button type="button"
                                                    class="btn btn-danger btn-sm delete-expense mx-1"
                                                    data-id="{{ $expense->id }}"
                                                    title="حذف">
                                                <i class="fas fa-trash"></i>
                                                حذف
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">لا توجد بيانات</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <!-- Pagination -->
                    <div class="d-flex justify-content-center">
                        {{ $expenses->links() }}
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

    <!-- Delete Form -->
    <form id="delete-form" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Delete confirmation
            document.querySelectorAll('.delete-expense').forEach(button => {
                button.addEventListener('click', function() {
                    const expenseId = this.getAttribute('data-id');
                    
                    Swal.fire({
                        title: 'هل أنت متأكد؟',
                        text: 'هل تريد حذف هذا المصروف؟',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'نعم، احذف',
                        cancelButtonText: 'إلغاء',
                        reverseButtons: true
                    }).then((result) => {
                        if (result.isConfirmed) {
                            const form = document.getElementById('delete-form');
                            form.action = `/car-expenses/${expenseId}`;
                            form.submit();
                        }
                    });
                });
            });
        });
    </script>
@stop

