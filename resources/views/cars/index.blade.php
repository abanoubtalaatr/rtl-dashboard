@extends('layouts.app')

@section('title', 'السيارات')

@section('content_header')
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="m-0">
            <i class="fas fa-car mr-2"></i>
            إدارة السيارات
        </h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent m-0 p-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">الرئيسية</a></li>
                <li class="breadcrumb-item active">السيارات</li>
            </ol>
        </nav>
    </div>
@stop

@section('page_content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="card-title">قائمة السيارات</h3>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="{{ route('cars.availability') }}" class="btn btn-info mx-1">
                                <i class="fas fa-search"></i> البحث عن التوفر
                            </a>
                            <a href="{{ route('cars.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus"></i> إضافة سيارة جديدة
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <!-- Search Form -->
                    <form method="GET" action="{{ route('cars.index') }}" class="mb-3">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-default" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                    <input type="text" name="search" class="form-control" 
                                           placeholder="البحث برقم اللوحة أو الموديل أو اللون" 
                                           value="{{ request('search') }}">
                                </div>
                            </div>
                        </div>
                    </form>

                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
                            <i class="fas fa-check-circle mr-2"></i>
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show shadow-sm" role="alert">
                            <i class="fas fa-exclamation-circle mr-2"></i>
                            {{ session('error') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th style="width: 80px;">#</th>
                                    <th>رقم اللوحة</th>
                                    <th>الموديل</th>
                                    <th>اللون</th>
                                    <th style="width: 200px;" class="text-center">الإجراءات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($cars as $car)
                                    <tr>
                                        <td><strong>{{ $car->id }}</strong></td>
                                        <td>
                                            <i class="fas fa-car text-primary mr-2"></i>
                                            <strong>{{ $car->plate_number }}</strong>
                                        </td>
                                        <td>{{ $car->model ?? '-' }}</td>
                                        <td>
                                            @if($car->color)
                                                <span class="badge badge-secondary">{{ $car->color }}</span>
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('cars.show', $car) }}"
                                                   class="btn btn-info btn-sm" title="عرض">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                        
                                                <a href="{{ route('cars.edit', $car) }}"
                                                   class="btn btn-warning btn-sm" title="تعديل">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                        
                                                <button type="button"
                                                        class="btn btn-danger btn-sm delete-car"
                                                        data-id="{{ $car->id }}"
                                                        data-name="{{ $car->plate_number }}"
                                                        title="حذف">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center py-5">
                                            <i class="fas fa-inbox fa-3x text-muted mb-3"></i>
                                            <p class="text-muted">لا توجد سيارات مسجلة</p>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="d-flex justify-content-center">
                        {{ $cars->links() }}
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
            document.querySelectorAll('.delete-car').forEach(button => {
                button.addEventListener('click', function() {
                    const carId = this.getAttribute('data-id');
                    const carName = this.getAttribute('data-name');
                    
                    Swal.fire({
                        title: 'هل أنت متأكد؟',
                        text: `هل تريد حذف السيارة "${carName}"؟`,
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#f5576c',
                        cancelButtonColor: '#667eea',
                        confirmButtonText: '<i class="fas fa-trash mr-1"></i> نعم، احذف',
                        cancelButtonText: '<i class="fas fa-times mr-1"></i> إلغاء',
                        reverseButtons: true,
                        buttonsStyling: false,
                        customClass: {
                            confirmButton: 'btn btn-danger mx-2',
                            cancelButton: 'btn btn-secondary mx-2'
                        }
                    }).then((result) => {
                        if (result.isConfirmed) {
                            const form = document.getElementById('delete-form');
                            form.action = `/cars/${carId}`;
                            form.submit();
                        }
                    });
                });
            });
        });
    </script>
@stop

