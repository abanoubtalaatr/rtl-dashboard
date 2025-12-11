@extends('layouts.app')

@section('title', 'تفاصيل نوع السيارة')

@section('content_header')
    <h1 class="m-0">تفاصيل نوع السيارة</h1>
@stop

@section('page_content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">بيانات نوع السيارة</h3>
                    <div class="card-tools">
                        <a href="{{ route('car-types.edit', $carType) }}" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> تعديل
                        </a>
                        <a href="{{ route('car-types.index') }}" class="btn btn-default btn-sm">
                            <i class="fas fa-arrow-right"></i> رجوع
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 200px; background-color: #f4f6f9;">الرقم</th>
                            <td>{{ $carType->id }}</td>
                        </tr>
                        <tr>
                            <th style="background-color: #f4f6f9;">الاسم</th>
                            <td><strong>{{ $carType->name }}</strong></td>
                        </tr>
                        <tr>
                            <th style="background-color: #f4f6f9;">الوصف</th>
                            <td>{{ $carType->description ?? '-' }}</td>
                        </tr>
                        <tr>
                            <th style="background-color: #f4f6f9;">عدد الحجوزات</th>
                            <td>
                                <span class="badge badge-info">
                                    {{ $carType->bookings->count() }} حجز
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <th style="background-color: #f4f6f9;">تاريخ الإنشاء</th>
                            <td>{{ $carType->created_at->format('Y-m-d H:i') }}</td>
                        </tr>
                        <tr>
                            <th style="background-color: #f4f6f9;">آخر تحديث</th>
                            <td>{{ $carType->updated_at->format('Y-m-d H:i') }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            @if($carType->bookings->count() > 0)
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">الحجوزات المرتبطة</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>التاريخ</th>
                                        <th>النوع</th>
                                        <th>السعر</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($carType->bookings()->latest()->limit(10)->get() as $booking)
                                        <tr>
                                            <td>{{ $booking->id }}</td>
                                            <td>{{ $booking->booking_from->format('Y-m-d') }}</td>
                                            <td>
                                                <span class="badge badge-{{ $booking->type === 'internal' ? 'primary' : 'success' }}">
                                                    {{ $booking->type_label }}
                                                </span>
                                            </td>
                                            <td>{{ number_format($booking->booking_price, 2) }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @if($carType->bookings->count() > 10)
                            <p class="text-muted text-center mt-3">
                                <small>عرض آخر 10 حجوزات من أصل {{ $carType->bookings->count() }}</small>
                            </p>
                        @endif
                    </div>
                </div>
            @endif
        </div>
    </div>
@stop


