@extends('layouts.app')

@section('title', 'تفاصيل الحجز')

@section('content_header')
    <h1 class="m-0">تفاصيل الحجز</h1>
@stop

@section('page_content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">بيانات الحجز</h3>
                    <div class="card-tools">
                        <a href="{{ route('bookings.edit', $booking) }}" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> تعديل
                        </a>
                        <a href="{{ route('bookings.index') }}" class="btn btn-default btn-sm">
                            <i class="fas fa-arrow-right"></i> رجوع
                        </a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 200px;">النوع</th>
                            <td>{{ $booking->type_label }}</td>
                        </tr>
                        <tr>
                            <th>السائق</th>
                            <td>{{ $booking->driver->name ?? '-' }}</td>
                        </tr>
                        <tr>
                            <th>السيارة</th>
                            <td>{{ $booking->car->plate_number ?? '-' }}</td>
                        </tr>
                        <tr>
                            <th>العميل</th>
                            <td>{{ $booking->customer->name ?? '-' }}</td>
                        </tr>
                        <tr>
                            <th>الشركة</th>
                            <td>{{ $booking->company->name ?? '-' }}</td>
                        </tr>
                        <tr>
                            <th>من</th>
                            <td>{{ $booking->booking_from->format('Y-m-d H:i') }}</td>
                        </tr>
                        <tr>
                            <th>إلى</th>
                            <td>{{ $booking->booking_to->format('Y-m-d H:i') }}</td>
                        </tr>
                        <tr>
                            <th>التكلفة</th>
                            <td>{{ number_format($booking->cost, 2) }}</td>
                        </tr>
                        <tr>
                            <th>سعر الحجز</th>
                            <td>{{ number_format($booking->booking_price, 2) }}</td>
                        </tr>
                        <tr>
                            <th>العملة</th>
                            <td>{{ $booking->currency->name ?? '-' }}</td>
                        </tr>
                        <tr>
                            <th>تاريخ الإنشاء</th>
                            <td>{{ $booking->created_at->format('Y-m-d H:i') }}</td>
                        </tr>
                        <tr>
                            <th>آخر تحديث</th>
                            <td>{{ $booking->updated_at->format('Y-m-d H:i') }}</td>
                        </tr>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@stop

