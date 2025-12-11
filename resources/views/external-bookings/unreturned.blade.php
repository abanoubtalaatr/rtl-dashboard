@extends('layouts.app')

@section('title', 'الحجوزات الخارجية الغير مُرجعة')

@section('content_header')
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="m-0">
            <i class="fas fa-hourglass-half mr-2"></i>
            الحجوزات الخارجية الغير مُرجعة
        </h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent m-0 p-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">الرئيسية</a></li>
                <li class="breadcrumb-item"><a href="{{ route('external-bookings.index') }}">الحجوزات الخارجية</a></li>
                <li class="breadcrumb-item active">الحجوزات الغير مُرجعة</li>
            </ol>
        </nav>
    </div>
@stop

@section('page_content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-warning">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="card-title">الحجوزات التي لم يتم إرجاعها بعد</h3>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="{{ route('external-bookings.index') }}" class="btn btn-light">
                                <i class="fas fa-arrow-right"></i> جميع الحجوزات
                            </a>
                            <a href="{{ route('external-bookings.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus"></i> إضافة حجز جديد
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Search Form -->
                    <form method="GET" action="{{ route('external-bookings.unreturned') }}" class="mb-3">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-default" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                    <input type="text" name="search" class="form-control" 
                                           placeholder="البحث باسم العميل أو السائق" 
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

                    @if($bookings->total() > 0)
                        <div class="alert alert-warning">
                            <i class="fas fa-exclamation-triangle mr-2"></i>
                            <strong>تنبيه:</strong> يوجد {{ $bookings->total() }} حجز لم يتم إرجاعه بعد!
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th style="width: 80px;">#</th>
                                    <th>العميل</th>
                                    <th>السائق</th>
                                    <th>السيارة</th>
                                    <th>نوع السيارة</th>
                                    <th>من تاريخ</th>
                                    <th>إلى تاريخ</th>
                                    <th>السعر</th>
                                    <th style="width: 200px;" class="text-center">الإجراءات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($bookings as $booking)
                                    <tr class="table-warning">
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
                                            @if($booking->return_driver_id && $booking->return_driver_id != $booking->driver_id)
                                                <br>
                                                <small class="text-muted">
                                                    العودة: {{ $booking->returnDriver->name }}
                                                </small>
                                            @endif
                                        </td>
                                        <td>
                                            <i class="fas fa-car text-info mr-2"></i>
                                            {{ $booking->car->plate_number ?? '-' }}
                                            <br>
                                            <small class="text-muted">{{ $booking->car->model ?? '-' }}</small>
                                        </td>
                                        <td>
                                            <span class="badge badge-info">
                                                {{ $booking->carType->name ?? '-' }}
                                            </span>
                                        </td>
                                        <td>{{ $booking->booking_from->format('Y-m-d H:i') }}</td>
                                        <td>
                                            {{ $booking->booking_to->format('Y-m-d H:i') }}
                                            @if($booking->booking_to->isPast())
                                                <br>
                                                <span class="badge badge-danger">متأخر</span>
                                            @endif
                                        </td>
                                        <td>
                                            <strong>{{ number_format($booking->booking_price, 2) }}</strong>
                                            <small>{{ $booking->currency->symbol ?? '' }}</small>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group-vertical" role="group">
                                                <form action="{{ route('external-bookings.toggle-return', $booking) }}" method="POST" class="mb-1">
                                                    @csrf
                                                    <button type="submit" class="btn btn-success btn-sm w-100">
                                                        <i class="fas fa-check-circle"></i> تحديد كمُرجع
                                                    </button>
                                                </form>
                                                
                                                <a href="{{ route('external-bookings.show', $booking) }}"
                                                   class="btn btn-info btn-sm mb-1" title="عرض">
                                                    <i class="fas fa-eye"></i> عرض
                                                </a>
                                        
                                                <a href="{{ route('external-bookings.edit', $booking) }}"
                                                   class="btn btn-warning btn-sm" title="تعديل">
                                                    <i class="fas fa-edit"></i> تعديل
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="9" class="text-center py-5">
                                            <i class="fas fa-check-circle fa-3x text-success mb-3"></i>
                                            <h5 class="text-success">ممتاز!</h5>
                                            <p class="text-muted">جميع الحجوزات قد تم إرجاعها</p>
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
@stop

