@extends('layouts.app')

@section('title', 'المواقع')

@section('content_header')
    <h1 class="m-0">المواقع</h1>
@stop

@section('page_content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="card-title">قائمة المواقع</h3>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="{{ route('locations.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus"></i> إضافة موقع جديد
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Search Form -->
                    <form method="GET" action="{{ route('locations.index') }}" class="mb-3">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-default" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                    <input type="text" name="search" class="form-control" 
                                           placeholder="البحث بالاسم أو العنوان" 
                                           value="{{ request('search') }}">
                                </div>
                            </div>
                        </div>
                    </form>

                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fas fa-check-circle mr-2"></i>
                            {{ session('success') }}
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
                                    <th>اسم الموقع</th>
                                    <th>النوع</th>
                                    <th>العنوان</th>
                                    <th style="width: 200px;" class="text-center">الإجراءات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($locations as $location)
                                    <tr>
                                        <td><strong>{{ $location->id }}</strong></td>
                                        <td>
                                            @if($location->type === 'hotel')
                                                <i class="fas fa-hotel text-primary mr-2"></i>
                                            @elseif($location->type === 'airport')
                                                <i class="fas fa-plane text-info mr-2"></i>
                                            @elseif($location->type === 'landmark')
                                                <i class="fas fa-map-marker-alt text-success mr-2"></i>
                                            @else
                                                <i class="fas fa-map-pin text-secondary mr-2"></i>
                                            @endif
                                            <strong>{{ $location->name }}</strong>
                                        </td>
                                        <td>
                                            @if($location->type === 'hotel')
                                                <span class="badge badge-primary">{{ $location->type_label }}</span>
                                            @elseif($location->type === 'airport')
                                                <span class="badge badge-info">{{ $location->type_label }}</span>
                                            @elseif($location->type === 'landmark')
                                                <span class="badge badge-success">{{ $location->type_label }}</span>
                                            @else
                                                <span class="badge badge-secondary">{{ $location->type_label }}</span>
                                            @endif
                                        </td>
                                        <td>{{ $location->address ?? '-' }}</td>
                                        <td class="text-center">
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('locations.show', $location) }}"
                                                   class="btn btn-info btn-sm" title="عرض">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                        
                                                <a href="{{ route('locations.edit', $location) }}"
                                                   class="btn btn-warning btn-sm" title="تعديل">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                        
                                                <button type="button"
                                                        class="btn btn-danger btn-sm delete-location"
                                                        data-id="{{ $location->id }}"
                                                        data-name="{{ $location->name }}"
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
                                            <p class="text-muted">لا توجد مواقع</p>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="d-flex justify-content-center">
                        {{ $locations->links() }}
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
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.delete-location').forEach(button => {
                button.addEventListener('click', function() {
                    const locationId = this.getAttribute('data-id');
                    const locationName = this.getAttribute('data-name');
                    
                    Swal.fire({
                        title: 'هل أنت متأكد؟',
                        text: `هل تريد حذف الموقع "${locationName}"؟`,
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'نعم، احذف',
                        cancelButtonText: 'إلغاء'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            const form = document.getElementById('delete-form');
                            form.action = `/locations/${locationId}`;
                            form.submit();
                        }
                    });
                });
            });
        });
    </script>
@stop

