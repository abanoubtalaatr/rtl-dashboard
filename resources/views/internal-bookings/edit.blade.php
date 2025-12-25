@extends('layouts.app')

@section('title', 'تعديل حجز داخلي')

@push('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Select2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<!-- Select2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<!-- Select2 Bootstrap 5 Theme -->
<link href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css"
    rel="stylesheet" />
@endpush
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


@section('content_header')
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="m-0"><i class="fas fa-edit mr-2"></i> تعديل حجز داخلي</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent m-0 p-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">الرئيسية</a></li>
                <li class="breadcrumb-item"><a href="{{ route('internal-bookings.index') }}">الحجوزات الداخلية</a></li>
                <li class="breadcrumb-item active">تعديل</li>
            </ol>
        </nav>
    </div>
@stop

@section('page_content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="{{ route('internal-bookings.update', $internalBooking) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- معلومات الحجز الأساسية -->
                        <h5 class="mb-3" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 15px; border-radius: 8px;">
                            <i class="fas fa-clipboard-list mr-2"></i> معلومات الحجز
                        </h5>

                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <select name="departure_from_location_id" id="departure_from_location_id" class="form-control" required>
                                        <option value="">-- من --</option>
                                        @foreach ($locations as $location)
                                            <option value="{{ $location->id }}" {{ old('departure_from_location_id', $internalBooking->departure_from_location_id) == $location->id ? 'selected' : '' }}>
                                                {{ $location->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <select name="departure_to_location_id" id="departure_to_location_id" class="form-control" required>
                                        <option value="">-- إلى --</option>
                                        @foreach ($locations as $location)
                                            <option value="{{ $location->id }}" {{ old('departure_to_location_id', $internalBooking->departure_to_location_id) == $location->id ? 'selected' : '' }}>
                                                {{ $location->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <select name="supervisor_id" id="supervisor_id" class="form-control" required>
                                        <option value="">-- اختر المشرف --</option>
                                        @foreach ($supervisors as $supervisor)
                                            <option value="{{ $supervisor->id }}" {{ old('supervisor_id', $internalBooking->supervisor_id) == $supervisor->id ? 'selected' : '' }}>
                                                {{ $supervisor->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <select name="car_type_id" id="car_type_id" class="form-control" required>
                                        <option value="">-- نوع السيارة --</option>
                                        @foreach ($carTypes as $type)
                                            <option value="{{ $type->id }}" {{ old('car_type_id', $internalBooking->car_type_id) == $type->id ? 'selected' : '' }}>
                                                {{ $type->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <input type="text" name="room_name" id="room_name" class="form-control"
                                           value="{{ old('room_name', $internalBooking->room_name) }}" placeholder="رقم الغرفة" required>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <select name="payment_type" id="payment_type" class="form-control" required>
                                        @foreach ($paymentTypes as $key => $label)
                                            <option value="{{ $key }}" {{ old('payment_type', $internalBooking->payment_type) == $key ? 'selected' : '' }}>
                                                {{ $label }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <input type="number" name="number_of_people" id="number_of_people" class="form-control"
                                           value="{{ old('number_of_people', $internalBooking->number_of_people) }}" min="1" required>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <select name="driver_id" id="driver_id" class="form-control" required>
                                        <option value="">-- السائق --</option>
                                        @foreach ($drivers as $driver)
                                            <option value="{{ $driver->id }}" {{ old('driver_id', $internalBooking->driver_id) == $driver->id ? 'selected' : '' }}>
                                                {{ $driver->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <input type="number" name="trip_duration" id="trip_duration" class="form-control"
                                           value="{{ old('trip_duration', $internalBooking->trip_duration) }}" min="1" placeholder="مدة التشغيلة" required>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <select name="company_id" id="company_id" class="form-control" required>
                                        <option value="">-- الشركة --</option>
                                        @foreach ($companies as $company)
                                            <option value="{{ $company->id }}" {{ old('company_id', $internalBooking->company_id) == $company->id ? 'selected' : '' }}>
                                                {{ $company->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <input type="number" name="commission_for_driver" id="commission_for_driver" class="form-control"
                                           value="{{ old('commission_for_driver', $internalBooking->commission_for_driver) }}" step="0.01" min="0" required>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <input type="number" name="booking_price" id="booking_price" class="form-control"
                                           value="{{ old('booking_price', $internalBooking->booking_price) }}" step="0.01" min="0" required>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <select name="currency_id" id="currency_id" class="form-control" required>
                                        <option value="">-- العملة --</option>
                                        @foreach ($currencies as $currency)
                                            <option value="{{ $currency->id }}" {{ old('currency_id', $internalBooking->currency_id) == $currency->id ? 'selected' : '' }}>
                                                {{ $currency->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="datetime-local" name="booking_from" id="booking_from" class="form-control"
                                           value="{{ old('booking_from', $internalBooking->booking_from?->format('Y-m-d\TH:i')) }}" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <select name="car_id" id="car_id" class="form-control" required>
                                        <option value="">-- السيارة --</option>
                                        @foreach ($cars as $car)
                                            <option value="{{ $car->id }}" {{ old('car_id', $internalBooking->car_id) == $car->id ? 'selected' : '' }}>
                                                {{ $car->plate_number }} - {{ $car->model }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3">
                                <div class="form-group d-flex align-items-center" style="gap: 10px;">
                                    <input type="checkbox" name="has_return" id="has_return"
                                           {{ old('has_return', $internalBooking->has_return) ? 'checked' : '' }}
                                           style="width: 1.3em; height: 1.3em;">
                                    <label for="has_return">هل يوجد عودة للحجز؟</label>
                                </div>
                            </div>
                        </div>

                        <div id="return_section" style="{{ old('has_return', $internalBooking->has_return) ? '' : 'display:none;' }}">
                            <h5 class="mb-3 mt-4" style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); color: white; padding: 15px; border-radius: 8px;">
                                <i class="fas fa-undo-alt mr-2"></i> معلومات العودة
                            </h5>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <select name="return_driver_id" id="return_driver_id" class="form-control">
                                            <option value="">-- نفس السائق --</option>
                                            @foreach ($drivers as $driver)
                                                <option value="{{ $driver->id }}" {{ old('return_driver_id', $internalBooking->return_driver_id ?? $internalBooking->driver_id) == $driver->id ? 'selected' : '' }}>
                                                    {{ $driver->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group d-flex align-items-center" style="gap: 10px;">
                                        <input type="checkbox" name="on_phone" id="on_phone"
                                               {{ old('on_phone', $internalBooking->on_phone) ? 'checked' : '' }}
                                               style="width: 1.3em; height: 1.3em;">
                                        <label for="on_phone">على الهاتف</label>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="datetime-local" name="booking_to" id="booking_to" class="form-control"
                                               value="{{ old('booking_to', $internalBooking->booking_to?->format('Y-m-d\TH:i')) }}">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="number" name="return_duration_minutes" id="return_duration_minutes" class="form-control"
                                               value="{{ old('return_duration_minutes', $internalBooking->return_duration_minutes) }}" min="1" placeholder="مدة العودة">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <select name="return_car_id" id="return_car_id" class="form-control">
                                            <option value="">-- سيارة العودة --</option>
                                            @foreach ($cars as $car)
                                                <option value="{{ $car->id }}" {{ old('return_car_id', $internalBooking->return_car_id ?? $internalBooking->car_id) == $car->id ? 'selected' : '' }}>
                                                    {{ $car->plate_number }} - {{ $car->model }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <select name="return_from_location_id" id="return_from_location_id" class="form-control">
                                            <option value="">-- من --</option>
                                            @foreach ($locations as $location)
                                                <option value="{{ $location->id }}" {{ old('return_from_location_id', $internalBooking->return_from_location_id) == $location->id ? 'selected' : '' }}>
                                                    {{ $location->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <select name="return_to_location_id" id="return_to_location_id" class="form-control">
                                            <option value="">-- إلى --</option>
                                            @foreach ($locations as $location)
                                                <option value="{{ $location->id }}" {{ old('return_to_location_id', $internalBooking->return_to_location_id) == $location->id ? 'selected' : '' }}>
                                                    {{ $location->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> تحديث الحجز</button>
                        <a href="{{ route('internal-bookings.show', $internalBooking) }}" class="btn btn-secondary"><i class="fas fa-times"></i> إلغاء</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            // Initialize Select2
            $('#departure_from_location_id, #departure_to_location_id, #return_from_location_id, #return_to_location_id, #car_id, #return_car_id, #driver_id, #return_driver_id, #supervisor_id, #car_type_id, #company_id, #currency_id').select2();

            // Auto-calculate booking_to
            function calculateEndTime() {
                const from = $('#booking_from').val();
                const duration = parseInt($('#trip_duration').val());
                if (from && duration > 0) {
                    const date = new Date(from);
                    date.setMinutes(date.getMinutes() + duration);
                    const formatted = date.toISOString().slice(0, 16);
                    if (!$('#booking_to').val()) {
                        $('#booking_to').val(formatted);
                    }
                }
            }

            $('#booking_from, #trip_duration').on('change input', calculateEndTime);

            // Auto-sync locations
            $('#departure_from_location_id').on('change', function() {
                $('#return_to_location_id').val($(this).val()).trigger('change');
            });
            $('#departure_to_location_id').on('change', function() {
                $('#return_from_location_id').val($(this).val()).trigger('change');
            });

            // Auto-sync car and driver
            $('#car_id').on('change', function() {
                if (!($('#return_car_id').val())) {
                    $('#return_car_id').val($(this).val()).trigger('change');
                }
            });
            $('#driver_id').on('change', function() {
                if (!($('#return_driver_id').val())) {
                    $('#return_driver_id').val($(this).val()).trigger('change');
                }
            });

            // Toggle return section
            $('#has_return').on('change', function() {
                $('#return_section').slideToggle();
            });
        });
    </script>
@stop