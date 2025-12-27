@extends('layouts.app')

@section('title', 'تفاصيل الموقع الخارجي')

@section('content_header')
    <h1 class="m-0">تفاصيل الموقع الخارجي</h1>
@stop

@section('page_content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        @if($externalLocation->type === 'hotel')
                            <i class="fas fa-hotel text-primary mr-2"></i>
                        @elseif($externalLocation->type === 'airport')
                            <i class="fas fa-plane text-info mr-2"></i>
                        @elseif($externalLocation->type === 'landmark')
                            <i class="fas fa-map-marker-alt text-success mr-2"></i>
                        @else
                            <i class="fas fa-map-pin text-secondary mr-2"></i>
                        @endif
                        {{ $externalLocation->name }}
                    </h3>
                    <div class="card-tools">
                        <a href="{{ route('external-locations.edit', $externalLocation) }}" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> تعديل
                        </a>
                        <a href="{{ route('external-locations.index') }}" class="btn btn-secondary btn-sm">
                            <i class="fas fa-arrow-right"></i> العودة للقائمة
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <strong><i class="fas fa-hashtag mr-2"></i>رقم الموقع الخارجي:</strong>
                        </div>
                        <div class="col-md-8">
                            <span class="badge badge-secondary">{{ $externalLocation->id }}</span>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <strong><i class="fas fa-map-marker-alt mr-2"></i>اسم الموقع الخارجي:</strong>
                        </div>
                        <div class="col-md-8">
                            {{ $externalLocation->name }}
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <strong><i class="fas fa-tag mr-2"></i>نوع الموقع:</strong>
                        </div>
                        <div class="col-md-8">
                            @if($externalLocation->type === 'hotel')
                                <span class="badge badge-primary badge-lg">
                                    <i class="fas fa-hotel"></i> {{ $externalLocation->type_label }}
                                </span>
                            @elseif($externalLocation->type === 'airport')
                                <span class="badge badge-info badge-lg">
                                    <i class="fas fa-plane"></i> {{ $externalLocation->type_label }}
                                </span>
                            @elseif($externalLocation->type === 'landmark')
                                <span class="badge badge-success badge-lg">
                                    <i class="fas fa-map-marker-alt"></i> {{ $externalLocation->type_label }}
                                </span>
                            @else
                                <span class="badge badge-secondary badge-lg">
                                    <i class="fas fa-map-pin"></i> {{ $externalLocation->type_label }}
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <strong><i class="fas fa-map mr-2"></i>العنوان:</strong>
                        </div>
                        <div class="col-md-8">
                            @if($externalLocation->address)
                                <div class="alert alert-info mb-0">
                                    <i class="fas fa-location-arrow mr-2"></i>
                                    {{ $externalLocation->address }}
                                </div>
                            @else
                                <span class="text-muted">لم يتم تحديد عنوان</span>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <strong><i class="fas fa-calendar-plus mr-2"></i>تاريخ الإضافة:</strong>
                        </div>
                        <div class="col-md-8">
                            {{ $externalLocation->created_at->format('Y-m-d h:i A') }}
                            <span class="text-muted">({{ $externalLocation->created_at->diffForHumans() }})</span>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <strong><i class="fas fa-calendar-check mr-2"></i>آخر تحديث:</strong>
                        </div>
                        <div class="col-md-8">
                            {{ $externalLocation->updated_at->format('Y-m-d h:i A') }}
                            <span class="text-muted">({{ $externalLocation->updated_at->diffForHumans() }})</span>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ route('external-locations.edit', $externalLocation) }}" class="btn btn-warning">
                                <i class="fas fa-edit"></i> تعديل الموقع الخارجي
                            </a>
                        </div>
                        <div class="col-md-6 text-left">
                            <button type="button" class="btn btn-danger" id="delete-btn">
                                <i class="fas fa-trash"></i> حذف الموقع الخارجي
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Form -->
    <form id="delete-form" action="{{ route('external-locations.destroy', $externalLocation) }}" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('delete-btn').addEventListener('click', function() {
                Swal.fire({
                    title: 'هل أنت متأكد؟',
                    text: 'هل تريد حذف الموقع الخارجي "{{ $externalLocation->name }}"؟',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'نعم، احذف',
                    cancelButtonText: 'إلغاء'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('delete-form').submit();
                    }
                });
            });
        });
    </script>
@stop

