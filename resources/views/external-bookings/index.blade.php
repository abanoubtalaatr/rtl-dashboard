@extends('layouts.app')

@section('title', 'الحجوزات الخارجية')

@section('content_header')
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="m-0">
            <i class="fas fa-plane-departure mr-2"></i>
            الحجوزات الخارجية
        </h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent m-0 p-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">الرئيسية</a></li>
                <li class="breadcrumb-item active">الحجوزات الخارجية </li>
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
                            <h3 class="card-title">قائمة الحجوزات الخارجية</h3>
                        </div>
                        @php
                        // Base query
                        $query = \App\Models\Booking::external()->unreturned();

                        // If NOT super admin → filter by created_by
                        if (!Auth::user()->isSuperAdmin()) {
                            $query->where('created_by', Auth::id());
                        }

                        // Get the final count
                        $count = $query->count();
                    @endphp
                        <div class="col-md-6 text-right">
                            <a href="{{ route('external-bookings.unreturned') }}" class="btn btn-warning mr-2">
                                <i class="fas fa-hourglass-half"></i> الحجوزات الغير مُرجعة
                                <span class="badge badge-danger fa-3x">{{ $count }}</span>
                            </a>
                            <a href="{{ route('external-bookings.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus"></i> إضافة حجز خارجي جديد
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Search Form -->
                    <form method="GET" action="{{ route('external-bookings.index') }}" class="mb-3">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-default" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                    <input type="text" name="search" class="form-control"
                                        placeholder="البحث باسم العميل أو السائق" value="{{ request('search') }}">
                                </div>
                            </div>
                            <div class="col-md-2 mb-2">
                                <input type="date" name="from_date" class="form-control" placeholder="من تاريخ"
                                    onchange="this.form.submit()" value="{{ request('from_date') }}">
                            </div>
                            <div class="col-md-2 mb-2">
                                <input type="date" name="to_date" class="form-control" placeholder="إلى تاريخ"
                                    onchange="this.form.submit()" value="{{ request('to_date') }}">
                            </div>

                            @if (Auth::user()->isSuperAdmin())
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                        <select name="user_id" class="form-control" style="padding: 0.375rem 0.75rem;"
                                            onchange="this.form.submit()">
                                            <option value="">كل المستخدمين</option>
                                            @foreach ($users as $user)
                                                <option value="{{ $user->id }}"
                                                    {{ request('user_id') == $user->id ? 'selected' : '' }}>
                                                    {{ $user->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            @endif
                            <div class="col-md-2 d-flex align-items-center">
                                <a href="{{ route('external-bookings.index') }}" class="btn btn-secondary ml-2">
                                    <i class="fas fa-redo"></i> إعادة ضبط البحث
                                </a>
                            </div>
                        </div>
                    </form>

                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
                            <i class="fas fa-check-circle mr-2"></i>
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    @if (session('error'))
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
                                    <th>العميل</th>
                                    <th>السائق</th>
                                    <th>نوع السيارة</th>
                                    <th>التشغيلة</th>
                                    <th>من تاريخ</th>

                                    <th>السعر</th>
                                    <th>نوع الدفع</th>
                                    <th>على الهاتف</th>
                                    <th style="width: 120px;" class="text-center">حالة الإرجاع</th>
                                    <th style="width: 200px;" class="text-center">الإجراءات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($bookings as $booking)
                                    <tr>
                                        <td><strong>{{ $booking->id }}</strong></td>
                                        <td>
                                            <i class="fas fa-user text-info mr-2"></i>
                                            <strong>{{ $booking->customer->name ?? '-' }}</strong>
                                            <br>
                                            <small class="text-muted">
                                                <i class="fas fa-users mr-1"></i>
                                                {{ $booking->number_of_people }} فرد
                                            </small>
                                        </td>
                                        <td>
                                            <i class="fas fa-user-tie text-primary mr-2"></i>
                                            {{ $booking->driver->name ?? '-' }}
                                            @if ($booking->return_driver_id && $booking->return_driver_id != $booking->driver_id)
                                                <br>
                                                <small class="text-muted">
                                                    العودة: {{ $booking->returnDriver->name }}
                                                </small>
                                            @endif
                                        </td>
                                        <td>
                                            <span class="badge badge-info">
                                                {{ $booking->carType->name ?? '-' }}
                                            </span>
                                        </td>
                                        <td>
                                            <small>
                                                <i class="fas fa-map-marker-alt text-success mr-1"></i>
                                                {{ $booking->departureFromLocation->name ?? '-' }}
                                                <i class="fas fa-arrow-left mx-1"></i>
                                                {{ $booking->departureToLocation->name ?? '-' }}
                                            </small>
                                        </td>
                                        <td>{{ $booking->booking_from->format('Y-m-d H:i') }}</td>
                                        <td>
                                            <strong>{{ number_format($booking->booking_price, 2) }}</strong>
                                            <small>{{ $booking->currency->symbol ?? '' }}</small>
                                        </td>
                                        <td>
                                            <span
                                                class="badge badge-{{ $booking->payment_type === 'cash' ? 'success' : ($booking->payment_type === 'visa' ? 'primary' : 'warning') }}">
                                                {{ $booking->payment_type_label }}
                                            </span>
                                        </td>
                                        <td>
                                            <span class="badge badge-{{ $booking->on_phone ? 'success' : 'warning' }}">
                                                {{ $booking->on_phone ? 'نعم' : 'لا' }}
                                            </span>
                                        </td>
                                        <td class="text-center">
                                            @if($booking->has_return)
                                            <form action="{{ route('external-bookings.toggle-return', $booking) }}"
                                                method="POST" class="d-inline">
                                                @csrf
                                                <button type="submit"
                                                    class="btn btn-sm {{ $booking->returned ? 'btn-success' : 'btn-secondary' }}"
                                                    title="{{ $booking->returned ? 'تم الإرجاع' : 'لم يتم الإرجاع' }}">
                                                    <i
                                                        class="fas {{ $booking->returned ? 'fa-check-circle' : 'fa-clock' }}"></i>
                                                    {{ $booking->returned ? 'مُرجع' : 'لم يُرجع' }}
                                                </button>
                                            </form>
                                            @endif
                                            @if ($booking->returned && $booking->returned_at)
                                                <br>
                                                <small class="text-muted">
                                                    {{ $booking->returned_at->diffForHumans() }}
                                                </small>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('external-bookings.show', $booking) }}"
                                                    class="btn btn-info btn-sm" title="عرض">
                                                    <i class="fas fa-eye"></i>
                                                </a>

                                                <a href="{{ route('external-bookings.edit', $booking) }}"
                                                    class="btn btn-warning btn-sm" title="تعديل">
                                                    <i class="fas fa-edit"></i>
                                                </a>

                                                <button type="button" class="btn btn-danger btn-sm delete-booking"
                                                    data-id="{{ $booking->id }}"
                                                    data-name="{{ $booking->customer->name ?? 'الحجز' }}" title="حذف">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="11" class="text-center py-5">
                                            <i class="fas fa-calendar-times fa-3x text-muted mb-3"></i>
                                            <p class="text-muted">لا توجد حجوزات خارجية</p>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="d-flex justify-content-center">
                        {{ $bookings->links() }}
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
            document.querySelectorAll('.delete-booking').forEach(button => {
                button.addEventListener('click', function() {
                    const bookingId = this.getAttribute('data-id');
                    const bookingName = this.getAttribute('data-name');

                    Swal.fire({
                        title: 'هل أنت متأكد؟',
                        text: `هل تريد حذف حجز العميل "${bookingName}"؟`,
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
                            form.action = `/external-bookings/${bookingId}`;
                            form.submit();
                        }
                    });
                });
            });
        });
    </script>
@stop
