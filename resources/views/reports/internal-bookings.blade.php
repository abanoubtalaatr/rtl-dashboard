@extends('layouts.app')

@section('title', 'تقارير الحجوزات الداخلية')

@section('content_header')
    <h1 class="m-0">
        <i class="fas fa-chart-line text-primary"></i>
        تقارير الحجوزات الداخلية
    </h1>
@stop

@section('page_content')
    <div class="row">
        <div class="col-12">
            <!-- Filters Card -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-filter"></i> الفلاتر والبحث
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <form method="GET" action="{{ route('reports.internal-bookings') }}">
                        <div class="row">
                            <!-- Driver Filter -->
                            <div class="col-md-3">
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

                            <!-- Car Filter -->
                            <div class="col-md-3">
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

                            <!-- Payment Type Filter -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>نوع الدفع</label>
                                    <select name="payment_type" class="form-control">
                                        <option value="">الكل</option>
                                        <option value="cash" {{ request('payment_type') == 'cash' ? 'selected' : '' }}>نقدي</option>
                                        <option value="card" {{ request('payment_type') == 'card' ? 'selected' : '' }}>بطاقة</option>
                                        <option value="transfer" {{ request('payment_type') == 'transfer' ? 'selected' : '' }}>تحويل</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Date From -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>من تاريخ</label>
                                    <input type="date" name="date_from" class="form-control" value="{{ request('date_from') }}">
                                </div>
                            </div>

                            <!-- Date To -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>إلى تاريخ</label>
                                    <input type="date" name="date_to" class="form-control" value="{{ request('date_to') }}">
                                </div>
                            </div>

                            <!-- Search Driver -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>بحث بالسائق</label>
                                    <input type="text" name="search_driver" class="form-control" placeholder="اسم السائق" value="{{ request('search_driver') }}">
                                </div>
                            </div>

                            <!-- Search Room/Location -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>بحث بالموقع/الغرفة</label>
                                    <input type="text" name="search_room" class="form-control" placeholder="اسم الموقع" value="{{ request('search_room') }}">
                                </div>
                            </div>

                            <!-- Buttons -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>&nbsp;</label>
                                    <div>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-search"></i> بحث
                                        </button>
                                        <a href="{{ route('reports.internal-bookings') }}" class="btn btn-secondary">
                                            <i class="fas fa-redo"></i> إعادة تعيين
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Results Card -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-list"></i> نتائج البحث
                        <span class="badge badge-info">{{ $bookings->total() }} حجز</span>
                    </h3>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th style="width: 60px;">#</th>
                                <th style="width: 100px;">التاريخ</th>
                                <th style="width: 80px;">الوقت</th>
                                <th>السائق</th>
                                <th>السيارة</th>
                                <th>من (انطلاق)</th>
                                <th>إلى (وجهة)</th>
                                <th style="width: 100px;">نوع الدفع</th>
                                <th style="width: 100px;">التكلفة</th>
                                <th style="width: 180px;" class="text-center">إجراءات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($bookings as $booking)
                                <tr>
                                    <td><strong>{{ $booking->id }}</strong></td>
                                    <td>{{ $booking->date ? $booking->date->format('Y-m-d') : '-' }}</td>
                                    <td>
                                        <span class="badge badge-secondary">
                                            {{ $booking->time ?? '-' }}
                                        </span>
                                    </td>
                                    <td>
                                        <i class="fas fa-user-circle text-primary"></i>
                                        {{ $booking->driver->name ?? '-' }}
                                    </td>
                                    <td>
                                        <i class="fas fa-car text-info"></i>
                                        {{ $booking->car->plate_number ?? '-' }}
                                    </td>
                                    <td>
                                        <div style="max-width: 150px;">
                                            <i class="fas fa-map-marker-alt text-success"></i>
                                            <strong>{{ $booking->fromLocation->name ?? $booking->departure_from ?? '-' }}</strong>
                                            @if($booking->fromLocation && $booking->fromLocation->address)
                                                <br><small class="text-muted">{{ Str::limit($booking->fromLocation->address, 30) }}</small>
                                            @endif
                                        </div>
                                    </td>
                                    <td>
                                        <div style="max-width: 150px;">
                                            <i class="fas fa-map-marker-alt text-danger"></i>
                                            <strong>{{ $booking->toLocation->name ?? $booking->departure_to ?? '-' }}</strong>
                                            @if($booking->toLocation && $booking->toLocation->address)
                                                <br><small class="text-muted">{{ Str::limit($booking->toLocation->address, 30) }}</small>
                                            @endif
                                        </div>
                                    </td>
                                    <td>
                                        @if($booking->payment_type === 'cash')
                                            <span class="badge badge-success">💵 نقدي</span>
                                        @elseif($booking->payment_type === 'visa')
                                            <span class="badge badge-info">💳 فيزا</span>
                                        @elseif($booking->payment_type === 'credit')
                                            <span class="badge badge-warning">🏦 أجل</span>
                                        @else
                                            <span class="badge badge-secondary">{{ $booking->payment_type }}</span>
                                        @endif
                                    </td>
                                    <td><strong class="text-success">{{ number_format($booking->price, 2) }}</strong></td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="{{ route('reports.internal.print-client', $booking) }}" 
                                               class="btn btn-sm btn-success" 
                                               target="_blank"
                                               title="طباعة للعميل">
                                                <i class="fas fa-print"></i> عميل
                                            </a>
                                            <a href="{{ route('reports.internal.print-driver', $booking) }}" 
                                               class="btn btn-sm btn-primary" 
                                               target="_blank"
                                               title="طباعة للسائق">
                                                <i class="fas fa-print"></i> سائق
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="10" class="text-center py-5">
                                        <i class="fas fa-inbox fa-3x text-muted mb-3"></i>
                                        <p class="text-muted">لا توجد نتائج</p>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="card-footer clearfix">
                    {{ $bookings->links() }}
                </div>
            </div>
        </div>
    </div>
@stop

