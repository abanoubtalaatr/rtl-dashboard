@extends('layouts.app')

@section('title', 'توفر السيارات')

@section('content_header')
    <h1 class="m-0">البحث عن توفر السيارات</h1>
@stop

@section('page_content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="card-title">فلترة السيارات حسب التوفر</h3>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="{{ route('cars.index') }}" class="btn btn-default">
                                <i class="fas fa-arrow-right"></i> رجوع إلى قائمة السيارات
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <!-- Filter Form -->
                    <form method="GET" action="{{ route('cars.availability') }}" class="mb-4">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="from">من <span class="text-danger">*</span></label>
                                    <input type="datetime-local" 
                                           class="form-control" 
                                           id="from" 
                                           name="from" 
                                           value="{{ $from }}" 
                                           required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="to">إلى <span class="text-danger">*</span></label>
                                    <input type="datetime-local" 
                                           class="form-control" 
                                           id="to" 
                                           name="to" 
                                           value="{{ $to }}" 
                                           required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="availability">حالة التوفر <span class="text-danger">*</span></label>
                                    <select class="form-control" 
                                            id="availability" 
                                            name="availability" 
                                            required>
                                        <option value="">اختر الحالة</option>
                                        <option value="available" {{ $availability == 'available' ? 'selected' : '' }}>
                                            متاحة
                                        </option>
                                        <option value="not_available" {{ $availability == 'not_available' ? 'selected' : '' }}>
                                            غير متاحة
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>&nbsp;</label>
                                    <button type="submit" class="btn btn-primary btn-block">
                                        <i class="fas fa-search"></i> بحث
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>

                    @if(request()->filled('from') && request()->filled('to') && request()->filled('availability'))
                        <div class="alert alert-info">
                            <strong>نتائج البحث:</strong>
                            @if($availability == 'available')
                                السيارات المتاحة من <strong>{{ \Carbon\Carbon::parse($from)->format('Y-m-d H:i') }}</strong> 
                                إلى <strong>{{ \Carbon\Carbon::parse($to)->format('Y-m-d H:i') }}</strong>
                            @else
                                السيارات غير المتاحة من <strong>{{ \Carbon\Carbon::parse($from)->format('Y-m-d H:i') }}</strong> 
                                إلى <strong>{{ \Carbon\Carbon::parse($to)->format('Y-m-d H:i') }}</strong>
                            @endif
                        </div>

                        @if($cars->count() > 0)
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>رقم اللوحة</th>
                                        <th>الموديل</th>
                                        <th>اللون</th>
                                        <th>الحالة</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cars as $car)
                                        <tr>
                                            <td>{{ $car->id }}</td>
                                            <td>{{ $car->plate_number }}</td>
                                            <td>{{ $car->model ?? '-' }}</td>
                                            <td>{{ $car->color ?? '-' }}</td>
                                            <td>
                                                @if($availability == 'available')
                                                    <span class="badge badge-success">متاحة</span>
                                                @else
                                                    <span class="badge badge-danger">غير متاحة</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <div class="alert alert-warning">
                                @if($availability == 'available')
                                    لا توجد سيارات متاحة في الفترة المحددة.
                                @else
                                    لا توجد سيارات غير متاحة في الفترة المحددة.
                                @endif
                            </div>
                        @endif
                    @else
                        <div class="alert alert-info">
                            <i class="fas fa-info-circle"></i> يرجى اختيار الفترة الزمنية وحالة التوفر للبحث.
                        </div>
                    @endif
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@stop
