@extends('layouts.app')

@section('title', 'الحجوزات')

@section('content_header')
    <h1 class="m-0">إدارة الحجوزات</h1>
@stop

@section('page_content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="card-title">قائمة الحجوزات</h3>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="{{ route('bookings.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus"></i> إضافة حجز جديد
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <!-- Filters Form -->
                    <form method="GET" action="{{ route('bookings.index') }}" class="mb-3">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>البحث</label>
                                    <input type="text" name="search" class="form-control" 
                                           placeholder="البحث بالاسم" 
                                           value="{{ request('search') }}">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>النوع</label>
                                    <select name="type" class="form-control">
                                        <option value="">الكل</option>
                                        <option value="internal" {{ request('type') == 'internal' ? 'selected' : '' }}>داخلي</option>
                                        <option value="external" {{ request('type') == 'external' ? 'selected' : '' }}>خارجي</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>السائق</label>
                                    <select name="driver_id" class="form-control">
                                        <option value="">الكل</option>
                                        @foreach($drivers as $driver)
                                            <option value="{{ $driver->id }}" {{ request('driver_id') == $driver->id ? 'selected' : '' }}>
                                                {{ $driver->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>الشركة</label>
                                    <select name="company_id" class="form-control">
                                        <option value="">الكل</option>
                                        @foreach($companies as $company)
                                            <option value="{{ $company->id }}" {{ request('company_id') == $company->id ? 'selected' : '' }}>
                                                {{ $company->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>العميل</label>
                                    <select name="customer_id" class="form-control">
                                        <option value="">الكل</option>
                                        @foreach($customers as $customer)
                                            <option value="{{ $customer->id }}" {{ request('customer_id') == $customer->id ? 'selected' : '' }}>
                                                {{ $customer->name }}
                                            </option>
                                        @endforeach
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
                                <th>النوع</th>
                                <th>السائق</th>
                                <th>السيارة</th>
                                <th>العميل</th>
                                <th>الشركة</th>
                                <th>من</th>
                                <th>إلى</th>
                                <th>التكلفة</th>
                                <th>سعر الحجز</th>
                                <th>العملة</th>
                                <th>الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($bookings as $booking)
                                <tr>
                                    <td>{{ $booking->id }}</td>
                                    <td>{{ $booking->type_label }}</td>
                                    <td>{{ $booking->driver->name ?? '-' }}</td>
                                    <td>{{ $booking->car->plate_number ?? '-' }}</td>
                                    <td>{{ $booking->customer->name ?? '-' }}</td>
                                    <td>{{ $booking->company->name ?? '-' }}</td>
                                    <td>{{ $booking->booking_from->format('Y-m-d H:i') }}</td>
                                    <td>{{ $booking->booking_to->format('Y-m-d H:i') }}</td>
                                    <td>{{ number_format($booking->cost, 2) }}</td>
                                    <td>{{ number_format($booking->booking_price, 2) }}</td>
                                    <td>{{ $booking->currency->name ?? '-' }}</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('bookings.show', $booking) }}"
                                               class="btn btn-info btn-sm me-1 mx-1" title="عرض">
                                                <i class="fas fa-eye"></i>
                                                عرض
                                            </a>
                                    
                                            <a href="{{ route('bookings.edit', $booking) }}"
                                               class="btn btn-warning btn-sm me-1 mx-1" title="تعديل">
                                                <i class="fas fa-edit"></i>
                                                تعديل
                                            </a>
                                    
                                            <button type="button"
                                                    class="btn btn-danger btn-sm delete-booking mx-1"
                                                    data-id="{{ $booking->id }}"
                                                    title="حذف">
                                                <i class="fas fa-trash"></i>
                                                حذف
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="12" class="text-center">لا توجد بيانات</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <!-- Pagination -->
                    <div class="d-flex justify-content-center">
                        {{ $bookings->links() }}
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
            document.querySelectorAll('.delete-booking').forEach(button => {
                button.addEventListener('click', function() {
                    const bookingId = this.getAttribute('data-id');
                    
                    Swal.fire({
                        title: 'هل أنت متأكد؟',
                        text: 'هل تريد حذف هذا الحجز؟',
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
                            form.action = `/bookings/${bookingId}`;
                            form.submit();
                        }
                    });
                });
            });
        });
    </script>
@stop

