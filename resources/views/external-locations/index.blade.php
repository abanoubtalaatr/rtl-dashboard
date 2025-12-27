@extends('layouts.app')

@section('title', 'المواقع الخارجية')

@section('content_header')
    <h1 class="m-0">المواقع الخارجية</h1>
@stop

@section('page_content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="card-title">قائمة المواقع الخارجية</h3>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="{{ route('external-locations.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus"></i> إضافة موقع خارجي جديد
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Search Form -->
                    <form method="GET" action="{{ route('external-locations.index') }}" class="mb-3">
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
                                    <th>اسم الموقع الخارجي</th>
                                    <th>النوع</th>
                                    <th>العنوان</th>
                                    <th style="width: 200px;" class="text-center">الإجراءات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($externalLocations as $externalLocation)
                                    <tr>
                                        <td><strong>{{ $externalLocation->id }}</strong></td>
                                        <td>
                                            @if($externalLocation->type === 'hotel')
                                                <i class="fas fa-hotel text-primary mr-2"></i>
                                            @elseif($externalLocation->type === 'airport')
                                                <i class="fas fa-plane text-info mr-2"></i>
                                            @elseif($externalLocation->type === 'landmark')
                                                <i class="fas fa-map-marker-alt text-success mr-2"></i>
                                            @else
                                                <i class="fas fa-map-pin text-secondary mr-2"></i>
                                            @endif
                                            <strong>{{ $externalLocation->name }}</strong>
                                        </td>
                                        <td>
                                            @if($externalLocation->type === 'hotel')
                                                <span class="badge badge-primary">{{ $externalLocation->type_label }}</span>
                                            @elseif($externalLocation->type === 'airport')
                                                <span class="badge badge-info">{{ $externalLocation->type_label }}</span>
                                            @elseif($externalLocation->type === 'landmark')
                                                <span class="badge badge-success">{{ $externalLocation->type_label }}</span>
                                            @else
                                                <span class="badge badge-secondary">{{ $externalLocation->type_label }}</span>
                                            @endif
                                        </td>
                                        <td>{{ $externalLocation->address ?? '-' }}</td>
                                        <td class="text-center">
                                            @if (auth()->user()->isSuperAdmin() || auth()->user()->isAdmin())
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('external-locations.show', $externalLocation) }}"
                                                   class="btn btn-info btn-sm" title="عرض">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                        
                                                <a href="{{ route('external-locations.edit', $externalLocation) }}"
                                                   class="btn btn-warning btn-sm" title="تعديل">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                        
                                                <button type="button"
                                                        class="btn btn-danger btn-sm delete-external-location"
                                                        data-id="{{ $externalLocation->id }}"
                                                        data-name="{{ $externalLocation->name }}"
                                                        title="حذف">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center py-5">
                                            <i class="fas fa-inbox fa-3x text-muted mb-3"></i>
                                            <p class="text-muted">لا توجد مواقع خارجية</p>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="d-flex justify-content-center">
                        {{ $externalLocations->links() }}
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
            document.querySelectorAll('.delete-external-location').forEach(button => {
                button.addEventListener('click', function() {
                    const locationId = this.getAttribute('data-id');
                    const locationName = this.getAttribute('data-name');
                    
                    Swal.fire({
                        title: 'هل أنت متأكد؟',
                        text: `هل تريد حذف الموقع الخارجي "${locationName}"؟`,
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'نعم، احذف',
                        cancelButtonText: 'إلغاء'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            const form = document.getElementById('delete-form');
                            form.action = `/external-locations/${locationId}`;
                            form.submit();
                        }
                    });
                });
            });
        });
    </script>
@stop

