@extends('layouts.app')

@section('title', 'السائقين')

@section('content_header')
    <h1 class="m-0">إدارة السائقين</h1>
@stop

@section('page_content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="card-title">قائمة السائقين</h3>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="{{ route('drivers.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus"></i> إضافة سائق جديد
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <!-- Search Form -->
                    <form method="GET" action="{{ route('drivers.index') }}" class="mb-3">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-default" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                    <input type="text" name="search" class="form-control" 
                                           placeholder="البحث بالاسم، الجوال، أو رقم الرخصة" 
                                           value="{{ request('search') }}">
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
                                <th>الاسم</th>
                                <th>الجوال</th>
                                <th>رقم الرخصة</th>
                                <th>الحالة</th>
                                <th>صورة الرخصة</th>
                                <th>الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($drivers as $driver)
                                <tr>
                                    <td>{{ $driver->id }}</td>
                                    <td>{{ $driver->name }}</td>
                                    <td>{{ $driver->mobile }}</td>
                                    <td>{{ $driver->license_number }}</td>
                                    <td>
                                        <span class="badge badge-info">{{ $driver->status_label }}</span>
                                    </td>
                                    <td>
                                        @if($driver->license_image)
                                            <a href="{{ $driver->license_image_url }}" target="_blank">
                                                <img src="{{ $driver->license_image_url }}" 
                                                     alt="صورة الرخصة" 
                                                     style="max-width: 50px; max-height: 50px;">
                                            </a>
                                        @else
                                            <span class="text-muted">لا توجد صورة</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('drivers.show', $driver) }}"
                                               class="btn btn-info btn-sm me-1 mx-1" title="عرض">
                                                <i class="fas fa-eye"></i>
                                                عرض
                                            </a>
                                    
                                            <a href="{{ route('drivers.edit', $driver) }}"
                                               class="btn btn-warning btn-sm me-1 mx-1" title="تعديل">
                                                <i class="fas fa-edit"></i>
                                                تعديل
                                            </a>
                                    
                                            <button type="button"
                                                    class="btn btn-danger btn-sm delete-driver mx-1"
                                                    data-id="{{ $driver->id }}"
                                                    data-name="{{ $driver->name }}"
                                                    title="حذف">
                                                <i class="fas fa-trash"></i>
                                                حذف
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">لا توجد بيانات</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <!-- Pagination -->
                    <div class="d-flex justify-content-center">
                        {{ $drivers->links() }}
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
            document.querySelectorAll('.delete-driver').forEach(button => {
                button.addEventListener('click', function() {
                    const driverId = this.getAttribute('data-id');
                    const driverName = this.getAttribute('data-name');
                    
                    Swal.fire({
                        title: 'هل أنت متأكد؟',
                        text: `هل تريد حذف السائق "${driverName}"؟`,
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
                            form.action = `/drivers/${driverId}`;
                            form.submit();
                        }
                    });
                });
            });
        });
    </script>
@stop

