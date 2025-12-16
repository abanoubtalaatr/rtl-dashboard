@extends('layouts.app')

@section('title', 'تقارير الحجوزات الخارجية')

@section('content_header')
    <h1 class="m-0">
        <i class="fas fa-chart-bar text-success"></i>
        تقارير الحجوزات الخارجية
    </h1>
@stop

@section('page_content')
    <div class="row">
        <div class="col-12">
            <!-- Filters Card -->
            <div class="card card-success no-print">
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
                    <form method="GET" action="{{ route('reports.external-bookings') }}">
                        <div class="row">
                            <!-- All your filters remain exactly as before -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>السائق</label>
                                    <select name="driver_id" class="form-control" style="padding: unset;">
                                        <option value="">الكل</option>
                                        @foreach($drivers as $driver)
                                            <option value="{{ $driver->id }}" {{ request('driver_id') == $driver->id ? 'selected' : '' }}>
                                                {{ $driver->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>السيارة</label>
                                    <select name="car_id" class="form-control" style="padding: unset;">
                                        <option value="">الكل</option>
                                        @foreach($cars as $car)
                                            <option value="{{ $car->id }}" {{ request('car_id') == $car->id ? 'selected' : '' }}>
                                                {{ $car->plate_number }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>الشركه المنفذه</label>
                                    <select name="company_id" class="form-control" style="padding: unset;">
                                        <option value="">الكل</option>
                                        @foreach($companies as $company)
                                            <option value="{{ $company->id }}" {{ request('company_id') == $company->id ? 'selected' : '' }}>
                                                {{ $company->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>العميل</label>
                                    <select name="customer_id" class="form-control" style="padding: unset;">
                                        <option value="">الكل</option>
                                        @foreach($customers as $customer)
                                            <option value="{{ $customer->id }}" {{ request('customer_id') == $customer->id ? 'selected' : '' }}>
                                                {{ $customer->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>نوع الدفع</label>
                                    <select name="payment_type" class="form-control" style="padding: unset;">
                                        <option value="">الكل</option>
                                        <option value="cash" {{ request('payment_type') == 'cash' ? 'selected' : '' }}>نقدي</option>
                                        <option value="card" {{ request('payment_type') == 'card' ? 'selected' : '' }}>بطاقة</option>
                                        <option value="transfer" {{ request('payment_type') == 'transfer' ? 'selected' : '' }}>تحويل</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>من تاريخ</label>
                                    <input type="date" name="date_from" class="form-control" value="{{ request('date_from') }}">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>إلى تاريخ</label>
                                    <input type="date" name="date_to" class="form-control" value="{{ request('date_to') }}">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>بحث بالسائق</label>
                                    <input type="text" name="search_driver" class="form-control" placeholder="اسم السائق" value="{{ request('search_driver') }}">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>بحث بالشركة</label>
                                    <input type="text" name="search_company" class="form-control" placeholder="اسم الشركة" value="{{ request('search_company') }}">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-search"></i> بحث
                                    </button>
                                    <a href="{{ route('reports.external-bookings') }}" class="btn btn-secondary">
                                        <i class="fas fa-redo"></i> إعادة تعيين
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Results Card -->
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center no-print">
                    <h3 class="card-title">
                        <i class="fas fa-list"></i> نتائج البحث
                        <span class="badge badge-success">{{ $bookings->total() }} حجز</span>
                    </h3>
                    <button onclick="window.print()" class="btn btn-info btn-sm">
                        <i class="fas fa-print"></i> طباعة النتائج
                    </button>
                </div>

                <!-- Print Header (only visible when printing) -->
                <div class="text-center py-4 print-only">
                    <h2 class="mb-2">تقرير الحجوزات الخارجية</h2>
                    <p class="lead mb-0">إجمالي عدد الحجوزات: <strong>{{ $bookings->total() }}</strong></p>
                    <hr class="my-4">
                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-bordered table-striped" id="report-table">
                        <thead class="bg-light">
                            <tr>
                                <th>#</th>
                                <th>التاريخ</th>
                                <th>الوقت</th>
                                <th>السائق</th>
                                <th>السيارة</th>
                                <th>الشركة</th>
                                <th>العميل</th>
                                <th>من</th>
                                <th>إلى</th>
                                <th>نوع الدفع</th>
                                <th>اكرامية السائق</th>
                                <th>التكلفة</th>
                                <th>ليه عودة</th>
                                <th class="no-print">إجراءات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($bookings as $booking)
                                <tr>
                                    <td><strong>{{ $booking->id }}</strong></td>
                                    <td>{{ $booking->date ? $booking->date->format('Y-m-d') : '-' }}</td>
                                    <td><span class="badge badge-secondary">{{ $booking->time ?? '-' }}</span></td>
                                    <td>{{ $booking->driver->name ?? '-' }}</td>
                                    <td>{{ $booking->car->plate_number ?? '-' }}</td>
                                    <td><strong>{{ $booking->company->name ?? '-' }}</strong></td>
                                    <td>{{ $booking->customer->name ?? '-' }}</td>
                                    <td>{{ $booking->fromLocation->name ?? $booking->departure_from ?? '-' }}</td>
                                    <td>{{ $booking->toLocation->name ?? $booking->departure_to ?? '-' }}</td>
                                    <td>
                                        @if($booking->payment_type === 'cash')
                                            <span class="badge badge-success">نقدي</span>
                                        @elseif($booking->payment_type === 'visa')
                                            <span class="badge badge-info">فيزا</span>
                                        @elseif($booking->payment_type === 'credit')
                                            <span class="badge badge-warning">أجل</span>
                                        @else
                                            <span class="badge badge-secondary">{{ $booking->payment_type }}</span>
                                        @endif
                                    </td>
                                    <td class="text-success"><strong>{{ number_format($booking->commission_for_driver, 2) }}</strong></td>
                                    <td class="text-success"><strong>{{ number_format($booking->cost, 2) }}</strong></td>
                                    <td>
                                        @if($booking->has_return)
                                            <span class="badge badge-success">نعم</span>
                                        @else
                                            <span class="badge badge-danger">لا</span>
                                        @endif
                                    </td>
                                    <td class="no-print text-center">
                                        <a href="{{ route('reports.external.print-client', $booking) }}" class="btn btn-sm btn-success" target="_blank">
                                            <i class="fas fa-print"></i> عميل
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="14" class="text-center py-5">لا توجد نتائج</td>
                                </tr>
                            @endforelse
                        </tbody>

                        @if($bookings->isNotEmpty())
                            <tfoot class="font-weight-bold">
                                <tr class="bg-light">
                                    <td colspan="10" class="text-right">الإجمالي:</td>
                                    <td class="text-success text-center">
                                        <strong>{{ number_format($bookings->sum('commission_for_driver'), 2) }}</strong>
                                        @if($bookings->total() > $bookings->count())
                                            <small class="d-block text-muted">(الصفحة الحالية)</small>
                                        @endif
                                    </td>
                                    <td class="text-success text-center">
                                        <strong>{{ number_format($bookings->sum('cost'), 2) }}</strong>
                                        @if($bookings->total() > $bookings->count())
                                            <small class="d-block text-muted">
                                                (الصفحة الحالية)<br>
                                                إجمالي الكل: {{ number_format($totalCost ?? $bookings->sum('cost'), 2) }}
                                            </small>
                                        @endif
                                    </td>
                                    <td colspan="2"></td>
                                </tr>
                            </tfoot>
                        @endif
                    </table>
                </div>

                <div class="card-footer clearfix no-print">
                    {{ $bookings->links() }}
                </div>
            </div>
        </div>
    </div>

    <!-- Enhanced Print CSS -->
    <style>
        @media print {
            /* Hide all non-essential elements */
            .no-print,
            .card-header,
            .card-footer,
            .filters-card {
                display: none !important;
            }

            /* Show only the table and print header */
            body * {
                visibility: hidden;
            }
            .print-only, #report-table, #report-table * {
                visibility: visible;
            }

            .print-only {
                display: block !important;
                position: relative;
            }

            #report-table {
                position: relative;
                width: 100%;
                margin-top: 20px;
            }

            /* Clean table styling for print */
            .table {
                border-collapse: collapse !important;
            }
            .table th,
            .table td {
                border: 1px solid #000 !important;
                padding: 8px !important;
                text-align: center;
            }
            .table thead th {
                background-color: #f0f0f0 !important;
                -webkit-print-color-adjust: exact;
            }
            .bg-light {
                background-color: #f8f9fa !important;
                -webkit-print-color-adjust: exact;
            }
            body {
                padding: 10px;
                font-size: 12px;
            }
        }

        /* Hide print header on screen */
        .print-only {
            display: none;
        }
    </style>
@stop