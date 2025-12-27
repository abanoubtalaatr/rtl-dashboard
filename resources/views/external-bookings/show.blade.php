@extends('layouts.app')

@section('title', 'تفاصيل الحجز الخارجي')

@section('content_header')
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="m-0">
            <i class="fas fa-eye mr-2"></i>
            تفاصيل الحجز الخارجي
        </h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent m-0 p-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">الرئيسية</a></li>
                <li class="breadcrumb-item"><a href="{{ route('external-bookings.index') }}">الحجوزات الخارجية</a></li>
                <li class="breadcrumb-item active">تفاصيل الحجز</li>
            </ol>
        </nav>
    </div>
@stop

@section('page_content')
    <div class="row">
        <div class="col-12">
            <!-- معلومات الحجز الأساسية -->
            <div class="card">
                <div class="card-header" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
                    <h3 class="card-title">
                        <i class="fas fa-clipboard-list mr-2"></i>
                        معلومات الحجز
                    </h3>
                    <div class="card-tools">
                        <a href="{{ route('external-bookings.edit', $externalBooking) }}" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> تعديل
                        </a>
                        <a href="{{ route('external-bookings.index') }}" class="btn btn-light btn-sm">
                            <i class="fas fa-arrow-right"></i> رجوع
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-bordered">
                                <tr>
                                    <th style="width: 40%; background-color: #f4f6f9;">العميل</th>
                                    <td>{{ $externalBooking->customer->name ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th style="background-color: #f4f6f9;">السيارة</th>
                                    <td>{{ $externalBooking->car->plate_number ?? '-' }} - {{ $externalBooking->car->model ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th style="background-color: #f4f6f9;">نوع السيارة</th>
                                    <td>{{ $externalBooking->carType->name ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th style="background-color: #f4f6f9;">عدد الأفراد</th>
                                    <td>{{ $externalBooking->number_of_people }} شخص</td>
                                </tr>
                                <tr>
                                    <th style="background-color: #f4f6f9;">نوع الدفع</th>
                                    <td>
                                        @if($externalBooking->payment_type === 'cash')
                                            <span class="badge badge-success">كاش</span>
                                        @elseif($externalBooking->payment_type === 'visa')
                                            <span class="badge badge-info">فيزا</span>
                                        @elseif($externalBooking->payment_type === 'credit')
                                            <span class="badge badge-warning">آجل</span>
                                        @else
                                            {{ $externalBooking->payment_type }}
                                        @endif
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-bordered">
                                <tr>
                                    <th style="width: 40%; background-color: #f4f6f9;">السائق</th>
                                    <td>{{ $externalBooking->driver->name ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th style="background-color: #f4f6f9;">الشركة</th>
                                    <td>{{ $externalBooking->company->name ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th style="background-color: #f4f6f9;">التاريخ والوقت</th>
                                    <td>{{ $externalBooking->booking_from->format('Y-m-d H:i') }}</td>
                                </tr>
                                <tr>
                                    <th style="background-color: #f4f6f9;">مدة الحجز</th>
                                    <td>{{ $externalBooking->trip_duration }} دقيقة</td>
                                </tr>
                                <tr>
                                    <th style="background-color: #f4f6f9;">تم الإنشاء بواسطة</th>
                                    <td>{{ $externalBooking->creator->name ?? '-' }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- معلومات المسار -->
            <div class="card">
                <div class="card-header bg-info">
                    <h3 class="card-title">
                        <i class="fas fa-route mr-2"></i>
                        معلومات المسار
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-bordered">
                                <tr>
                                    <th style="width: 40%; background-color: #f4f6f9;">من (From)</th>
                                    <td>{{ $externalBooking->externalLocationDeparture->name ?? '-' }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-bordered">
                                <tr>
                                    <th style="width: 40%; background-color: #f4f6f9;">إلى (To)</th>
                                    <td>{{ $externalBooking->externalLocationDepartureTo->name ?? '-' }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- معلومات العودة -->
            @if($externalBooking->has_return)
            <div class="card">
                <div class="card-header" style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); color: white;">
                    <h3 class="card-title">
                        <i class="fas fa-undo-alt mr-2"></i>
                        معلومات العودة
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-bordered">
                                <tr>
                                    <th style="width: 40%; background-color: #f4f6f9;">سائق العودة</th>
                                    <td>{{ $externalBooking->returnDriver->name ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th style="background-color: #f4f6f9;">التاريخ والوقت</th>
                                    <td>{{ $externalBooking->booking_to->format('Y-m-d H:i') }}</td>
                                </tr>
                                <tr>
                                    <th style="background-color: #f4f6f9;">مدة العودة</th>
                                    <td>{{ $externalBooking->return_duration_minutes }} دقيقة</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-bordered">
                                <tr>
                                    <th style="width: 40%; background-color: #f4f6f9;">من (From)</th>
                                    <td>{{ $externalBooking->returnFromLocation->name ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th style="background-color: #f4f6f9;">إلى (To)</th>
                                    <td>{{ $externalBooking->returnToLocation->name ?? '-' }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <!-- المعلومات المالية -->
            <div class="card">
                <div class="card-header bg-success">
                    <h3 class="card-title">
                        <i class="fas fa-money-bill-wave mr-2"></i>
                        المعلومات المالية
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <table class="table table-bordered">
                                <tr>
                                    <th style="background-color: #f4f6f9;">اكرامية السواق  </th>
                                    <td>{{ number_format($externalBooking->commission_for_driver, 2) }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-4">
                            <table class="table table-bordered">
                                <tr>
                                    <th style="background-color: #f4f6f9;">سعر الحجز</th>
                                    <td>{{ number_format($externalBooking->booking_price, 2) }}</td>
                                </tr>
                                <tr>
                                    <th style="background-color: #f4f6f9;">على الهاتف</th>
                                    <td>{{ $externalBooking->on_phone ? 'نعم' : 'لا' }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-4">
                            <table class="table table-bordered">
                                <tr>
                                    <th style="background-color: #f4f6f9;">العملة</th>
                                    <td>{{ $externalBooking->currency->name ?? '-' }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    
                </div>
            </div>

            <!-- معلومات النظام -->
            <div class="card">
                <div class="card-header bg-secondary">
                    <h3 class="card-title">
                        <i class="fas fa-info-circle mr-2"></i>
                        معلومات النظام
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 200px; background-color: #f4f6f9;">تاريخ الإنشاء</th>
                            <td>{{ $externalBooking->created_at->format('Y-m-d H:i:s') }}</td>
                        </tr>
                        <tr>
                            <th style="background-color: #f4f6f9;">آخر تحديث</th>
                            <td>{{ $externalBooking->updated_at->format('Y-m-d H:i:s') }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

