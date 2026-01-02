@extends('layouts.app')

@section('title', 'التقرير المالي للسيارات')

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

@section('content_header')
    <h1 class="m-0">
        <i class="fas fa-car-side text-info"></i>
        التقرير المالي للسيارات
    </h1>
@stop


@section('page_content')
    <div class="row">
        <div class="col-12">
            <!-- Car Selector Card -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-search"></i> اختر السيارة
                    </h3>
                </div>
                <div class="card-body">
                    <form method="GET" action="{{ route('reports.car-report') }}">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="car_id">اختر السيارة <span class="text-danger">*</span></label>
                                    <select name="car_id" id="car_id" class="form-control" required style="padding: unset;">
                                        <option value="">-- اختر السيارة --</option>
                                        @foreach($cars as $car)
                                            <option value="{{ $car->id }}" {{ request('car_id') == $car->id ? 'selected' : '' }}>
                                                {{ $car->plate_number }} @if($car->model) - {{ $car->model }} @endif
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="date_from">من تاريخ</label>
                                    <input type="date" name="date_from" id="date_from" class="form-control" value="{{ request('date_from') }}">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="date_to">إلى تاريخ</label>
                                    <input type="date" name="date_to" id="date_to" class="form-control" value="{{ request('date_to') }}">
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>&nbsp;</label>
                                    <button type="submit" class="btn btn-info btn-block">
                                        <i class="fas fa-chart-line"></i> عرض التقرير
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            @if($selectedCar && $statistics)
                <!-- Statistics Cards -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{ number_format($statistics['total_expenses'], 2) }}</h3>
                                <p>إجمالي المصروفات</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-money-bill-wave"></i>
                            </div>
                            <div class="small-box-footer">
                                {{ $statistics['expense_count'] }} مصروف
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="small-box bg-primary">
                            <div class="inner">
                                <h3>{{ number_format($statistics['internal_revenue'], 2) }}</h3>
                                <p>إيرادات الحجوزات الداخلية</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <div class="small-box-footer">
                                {{ $statistics['internal_count'] }} حجز
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ number_format($statistics['external_revenue'], 2) }}</h3>
                                <p>إيرادات الحجوزات الخارجية</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                            <div class="small-box-footer">
                                {{ $statistics['external_count'] }} حجز
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="small-box {{ $statistics['net_profit'] >= 0 ? 'bg-success' : 'bg-warning' }}">
                            <div class="inner">
                                <h3>{{ number_format($statistics['net_profit'], 2) }}</h3>
                                <p>صافي الربح</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div class="small-box-footer">
                                الإيرادات - المصروفات
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Summary Card -->
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-info-circle"></i> ملخص التقرير المالي
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h5><i class="fas fa-car"></i> معلومات السيارة</h5>
                                <table class="table table-sm">
                                    <tr>
                                        <th>رقم اللوحة:</th>
                                        <td><strong>{{ $selectedCar->plate_number }}</strong></td>
                                    </tr>
                                    @if($selectedCar->model)
                                    <tr>
                                        <th>الموديل:</th>
                                        <td>{{ $selectedCar->model }}</td>
                                    </tr>
                                    @endif
                                    @if($selectedCar->year)
                                    <tr>
                                        <th>السنة:</th>
                                        <td>{{ $selectedCar->year }}</td>
                                    </tr>
                                    @endif
                                </table>
                            </div>
                            <div class="col-md-6">
                                <h5><i class="fas fa-calculator"></i> الملخص المالي</h5>
                                <table class="table table-sm">
                                    <tr>
                                        <th>إجمالي الإيرادات:</th>
                                        <td class="text-success"><strong>{{ number_format($statistics['total_revenue'], 2) }} جنيه</strong></td>
                                    </tr>
                                    <tr>
                                        <th>إجمالي المصروفات:</th>
                                        <td class="text-danger"><strong>{{ number_format($statistics['total_expenses'], 2) }} جنيه</strong></td>
                                    </tr>
                                    <tr class="border-top">
                                        <th>صافي الربح/الخسارة:</th>
                                        <td class="{{ $statistics['net_profit'] >= 0 ? 'text-success' : 'text-danger' }}">
                                            <strong>{{ number_format($statistics['net_profit'], 2) }} جنيه</strong>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Details Tabs -->
                <div class="card">
                    <div class="card-header p-0 pt-1">
                        <ul class="nav nav-tabs" id="custom-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="expenses-tab" data-toggle="pill" href="#expenses" role="tab">
                                    <i class="fas fa-receipt"></i> المصروفات ({{ $statistics['expense_count'] }})
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="internal-tab" data-toggle="pill" href="#internal" role="tab">
                                    <i class="fas fa-calendar-alt"></i> الحجوزات الداخلية ({{ $statistics['internal_count'] }})
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="external-tab" data-toggle="pill" href="#external" role="tab">
                                    <i class="fas fa-calendar-check"></i> الحجوزات الخارجية ({{ $statistics['external_count'] }})
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-content">
                            <!-- Expenses Tab -->
                            <div class="tab-pane fade show active" id="expenses" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table table-hover table-sm">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>التاريخ</th>
                                                <th>النوع</th>
                                                <th>الوصف</th>
                                                <th>التكلفة</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($expenses as $expense)
                                                <tr>
                                                    <td>{{ $expense->id }}</td>
                                                    <td>{{ $expense->created_at->format('Y-m-d') }}</td>
                                                    <td>
                                                        
                                                        @if(is_array($expense->items))
                                                            @foreach($expense->items as $item)
                                                                @php
                                                                    $typeLabel = $item['type'];
                                                                    $cost = $item['cost'];
                                                                @endphp
                                                                <span class="badge badge-secondary">{{ \App\Models\CarExpense::translateType($typeLabel) }} <strong>{{ number_format($cost, 2) }}</strong></span>
                                                            @endforeach
                                                        @endif
                                                    </td>
                                                    <td>{{ $expense->description ?? '-' }}</td>
                                                    <td class="text-danger"><strong>{{ number_format($expense->total_cost, 2) }}</strong></td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="5" class="text-center text-muted">لا توجد مصروفات</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                        @if($expenses->count() > 0)
                                        <tfoot>
                                            <tr class="bg-light">
                                                <th colspan="4" class="text-left">الإجمالي:</th>
                                                <th class="text-danger">{{ number_format($statistics['total_expenses'], 2) }}</th>
                                            </tr>
                                        </tfoot>
                                        @endif
                                    </table>
                                </div>
                            </div>

                            <!-- Internal Bookings Tab -->
                            <div class="tab-pane fade" id="internal" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table table-hover table-sm">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>التاريخ</th>
                                                <th>السائق</th>
                                                <th>من</th>
                                                <th>إلى</th>
                                                <th>السعر</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($internalBookings as $booking)
                                                <tr>
                                                    <td>{{ $booking->id }}</td>
                                                    <td>{{ $booking->booking_from ? $booking->booking_from->format('Y-m-d') : '-' }}</td>
                                                    <td>{{ $booking->driver->name ?? '-' }}</td>
                                                    <td>{{ $booking->fromLocation->name ?? $booking->departure_from ?? '-' }}</td>
                                                    <td>{{ $booking->toLocation->name ?? $booking->departure_to ?? '-' }}</td>
                                                    <td class="text-success"><strong>{{ number_format($booking->booking_price, 2) }}</strong></td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="6" class="text-center text-muted">لا توجد حجوزات داخلية</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                        @if($internalBookings->count() > 0)
                                        <tfoot>
                                            <tr class="bg-light">
                                                <th colspan="5" class="text-left">الإجمالي:</th>
                                                <th class="text-success">{{ number_format($statistics['internal_revenue'], 2) }}</th>
                                            </tr>
                                        </tfoot>
                                        @endif
                                    </table>
                                </div>
                            </div>

                            <!-- External Bookings Tab -->
                            <div class="tab-pane fade" id="external" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table table-hover table-sm">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>التاريخ</th>
                                                <th>السائق</th>
                                                <th>الشركة</th>
                                                <th>العميل</th>
                                                <th>السعر</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($externalBookings as $booking)
                                                <tr>
                                                    <td>{{ $booking->id }}</td>
                                                    <td>{{ $booking->booking_from ? $booking->booking_from->format('Y-m-d') : '-' }}</td>
                                                    <td>{{ $booking->driver->name ?? '-' }}</td>
                                                    <td>{{ $booking->company->name ?? '-' }}</td>
                                                    <td>{{ $booking->customer->name ?? '-' }}</td>
                                                    <td class="text-success"><strong>{{ number_format($booking->booking_price, 2) }}</strong></td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="6" class="text-center text-muted">لا توجد حجوزات خارجية</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                        @if($externalBookings->count() > 0)
                                        <tfoot>
                                            <tr class="bg-light">
                                                <th colspan="5" class="text-left">الإجمالي:</th>
                                                <th class="text-success">{{ number_format($statistics['external_revenue'], 2) }}</th>
                                            </tr>
                                        </tfoot>
                                        @endif
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif(request('car_id'))
                <div class="alert alert-warning">
                    <i class="fas fa-exclamation-triangle"></i>
                    لم يتم العثور على بيانات للسيارة المحددة
                </div>
            @endif
        </div>
    </div>
@stop
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@section('js')
    <!-- Select2 JS - loaded only once -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#car_id').select2({
                placeholder: "-- اختر السيارة --",
                allowClear: true,
                width: '100%'
            });
        });
    </script>
@stop


