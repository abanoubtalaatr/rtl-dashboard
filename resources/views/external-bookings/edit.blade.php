@extends('layouts.app')

@section('title', 'تعديل حجز خارجي')

@push('head')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>



@section('content_header')
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="m-0">
            <i class="fas fa-edit mr-2"></i>
            تعديل حجز خارجي
        </h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent m-0 p-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">الرئيسية</a></li>
                <li class="breadcrumb-item"><a href="{{ route('external-bookings.index') }}">الحجوزات الخارجية</a></li>
                <li class="breadcrumb-item active">تعديل</li>
            </ol>
        </nav>
    </div>
@stop

@section('page_content')
    <div class="row">
        <div class="col-12">
            <div class="card">

                <form action="{{ route('external-bookings.update', $externalBooking) }}" method="POST">
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
                        <h5 class="mb-3"
                            style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 15px; border-radius: 8px;">
                            <i class="fas fa-clipboard-list mr-2"></i>معلومات الحجز
                        </h5>

                        <div class="row">
                            <!-- من (From) -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    <select name="departure_from_location_id" id="departure_from_location_id" style="padding: unset;"
                                        class="form-control @error('departure_from_location_id') is-invalid @enderror">
                                        <option value="">-- التشغيلة --</option>
                                        @foreach ($locations as $location)
                                            <option value="{{ $location->id }}"
                                                {{ old('departure_from_location_id', $externalBooking->departure_from_location_id) == $location->id ? 'selected' : '' }}>
                                                {{ $location->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('departure_from_location_id')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- مدير الحركة -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    <select name="supervisor_id" id="supervisor_id"
                                        style="padding: unset;"
                                        class="form-control @error('supervisor_id') is-invalid @enderror" required>
                                        <option value="">-- اختر مدير الحركة --</option>
                                        @foreach ($supervisors as $supervisor)
                                            <option value="{{ $supervisor->id }}"
                                                {{ old('supervisor_id', $externalBooking->supervisor_id) == $supervisor->id ? 'selected' : '' }}>
                                                {{ $supervisor->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!-- العميل -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    <select name="customer_id" id="customer_id"
                                        style="padding: unset;"
                                        class="form-control @error('customer_id') is-invalid @enderror" required>
                                        <option value="">-- اختر العميل --</option>
                                        @foreach ($customers as $customer)
                                            <option value="{{ $customer->id }}"
                                                {{ old('customer_id', $externalBooking->customer_id) == $customer->id ? 'selected' : '' }}>
                                                {{ $customer->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('customer_id')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- نوع السيارة -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    <select name="car_type_id" id="car_type_id"
                                        style="padding: unset;"
                                        class="form-control @error('car_type_id') is-invalid @enderror" required>
                                        <option value="">-- اختر نوع السيارة --</option>
                                        @foreach ($carTypes as $type)
                                            <option value="{{ $type->id }}"
                                                {{ old('car_type_id', $externalBooking->car_type_id) == $type->id ? 'selected' : '' }}>
                                                {{ $type->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('car_type_id')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- نوع الدفع -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    <select name="payment_type" id="payment_type"
                                        style="padding: unset;"
                                        class="form-control @error('payment_type') is-invalid @enderror" required>
                                        @foreach ($paymentTypes as $key => $label)
                                            <option value="{{ $key }}"
                                                {{ old('payment_type', $externalBooking->payment_type) == $key ? 'selected' : '' }}>
                                                {{ $label }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('payment_type')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- عدد الأفراد -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    <input type="number" name="number_of_people" id="number_of_people"
                                        class="form-control @error('number_of_people') is-invalid @enderror"
                                        value="{{ old('number_of_people', $externalBooking->number_of_people) }}" min="1">
                                    @error('number_of_people')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- السائق -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    <select name="driver_id" id="driver_id"
                                        style="padding: unset;"
                                        class="form-control @error('driver_id') is-invalid @enderror" required>
                                        <option value="">-- اختر السائق --</option>
                                        @foreach ($drivers as $driver)
                                            <option value="{{ $driver->id }}"
                                                {{ old('driver_id', $externalBooking->driver_id) == $driver->id ? 'selected' : '' }}>
                                                {{ $driver->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('driver_id')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- مدة الحجز -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    <input type="number" name="trip_duration" id="trip_duration"
                                        class="form-control @error('trip_duration') is-invalid @enderror"
                                        value="{{ old('trip_duration', $externalBooking->trip_duration) }}" min="1">
                                    @error('trip_duration')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- الشركة -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    <select name="company_id" id="company_id"
                                        style="padding: unset;"
                                        class="form-control @error('company_id') is-invalid @enderror" required>
                                        <option value="">-- اختر الشركة --</option>
                                        @foreach ($companies as $company)
                                            <option value="{{ $company->id }}"
                                                {{ old('company_id', $externalBooking->company_id) == $company->id ? 'selected' : '' }}>
                                                {{ $company->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('company_id')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- عمولة السائق -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    <input type="number" name="commission_for_driver" id="commission_for_driver"
                                        class="form-control @error('commission_for_driver') is-invalid @enderror"
                                        value="{{ old('commission_for_driver', $externalBooking->commission_for_driver) }}">
                                    @error('commission_for_driver')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- سعر الحجز -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    <input type="number" name="booking_price" id="booking_price"
                                        class="form-control @error('booking_price') is-invalid @enderror"
                                        value="{{ old('booking_price', $externalBooking->booking_price) }}" step="0.01" min="0" required>
                                    @error('booking_price')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- العملة -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    <select name="currency_id" id="currency_id"
                                        style="padding: unset;"
                                        class="form-control @error('currency_id') is-invalid @enderror" required>
                                        <option value="">-- اختر العملة --</option>
                                        @foreach ($currencies as $currency)
                                            <option value="{{ $currency->id }}"
                                                {{ old('currency_id', $externalBooking->currency_id) == $currency->id ? 'selected' : '' }}>
                                                {{ $currency->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('currency_id')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- التاريخ والوقت -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="datetime-local" name="booking_from" id="booking_from"
                                        class="form-control @error('booking_from') is-invalid @enderror"
                                        value="{{ old('booking_from', $externalBooking->booking_from?->format('Y-m-d\TH:i')) }}" required>
                                    @error('booking_from')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- السيارة -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select name="car_id" id="car_id"
                                        style="padding: unset;"
                                        class="form-control @error('car_id') is-invalid @enderror" required>
                                        <option value="">-- اختر السيارة --</option>
                                        @foreach ($cars as $car)
                                            <option value="{{ $car->id }}"
                                                {{ old('car_id', $externalBooking->car_id) == $car->id ? 'selected' : '' }}>
                                                {{ $car->plate_number }} - {{ $car->model }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('car_id')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- هل يوجد عودة -->
                        <div class="row mt-3">
                            <div class="col-md-3">
                                <div class="form-group d-flex align-items-center" style="gap: 10px;">
                                    <input type="checkbox" name="has_return" id="has_return"
                                        {{ old('has_return', $externalBooking->has_return ?? false) ? 'checked' : '' }}
                                        class="@error('has_return') is-invalid @enderror">
                                    <label for="has_return" class="mb-0">هل يوجد للحجز عودة <span class="text-danger">*</span></label>
                                    @error('has_return')
                                        <span class="invalid-feedback d-block">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- قسم العودة -->
                        <div id="return_section" style="display: {{ old('has_return', $externalBooking->has_return ?? false) ? 'block' : 'none' }};">
                            <h5 class="mb-3"
                                style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); color: white; padding: 15px; border-radius: 8px;">
                                <i class="fas fa-undo-alt mr-2"></i>معلومات العودة
                            </h5>

                            <div class="row">
                                <!-- سائق العودة -->
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <select name="return_driver_id" id="return_driver_id"
                                            style="padding: unset;"
                                            class="form-control @error('return_driver_id') is-invalid @enderror">
                                            <option value="">-- نفس السائق --</option>
                                            @foreach ($drivers as $driver)
                                                <option value="{{ $driver->id }}"
                                                    {{ old('return_driver_id', $externalBooking->return_driver_id) == $driver->id ? 'selected' : '' }}>
                                                    {{ $driver->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('return_driver_id')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- على الهاتف -->
                                <div class="col-md-2">
                                    <div class="form-group d-flex align-items-center">
                                        <input type="checkbox" name="on_phone" id="on_phone"
                                            {{ old('on_phone', $externalBooking->on_phone) ? 'checked' : '' }}
                                            class="@error('on_phone') is-invalid @enderror">
                                        <label for="on_phone" class="mb-0 ml-2">على الهاتف</label>
                                    </div>
                                    @error('on_phone')
                                        <span class="invalid-feedback d-block">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- تاريخ ووقت العودة -->
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="datetime-local" name="booking_to" id="booking_to"
                                            class="form-control @error('booking_to') is-invalid @enderror"
                                            value="{{ old('booking_to', $externalBooking->booking_to?->format('Y-m-d\TH:i')) }}">
                                        @error('booking_to')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- مدة العودة -->
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input type="number" name="return_duration_minutes" id="return_duration_minutes"
                                            class="form-control @error('return_duration_minutes') is-invalid @enderror"
                                            value="{{ old('return_duration_minutes', $externalBooking->return_duration_minutes) }}" min="1">
                                        @error('return_duration_minutes')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- سيارة العودة -->
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <select name="return_car_id" id="return_car_id"
                                            style="padding: unset;"
                                            class="form-control @error('return_car_id') is-invalid @enderror">
                                            <option value="">-- اختر السيارة العودة --</option>
                                            @foreach ($cars as $car)
                                                <option value="{{ $car->id }}"
                                                    {{ old('return_car_id', $externalBooking->return_car_id) == $car->id ? 'selected' : '' }}>
                                                    {{ $car->plate_number }} - {{ $car->model }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('return_car_id')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- من (عودة) -->
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <select name="return_from_location_id" id="return_from_location_id"
                                            style="padding: unset;"
                                            class="form-control @error('return_from_location_id') is-invalid @enderror">
                                            <option value="">-- التشغيلة --</option>
                                            @foreach ($locations as $location)
                                                <option value="{{ $location->id }}"
                                                    {{ old('return_from_location_id', $externalBooking->return_from_location_id) == $location->id ? 'selected' : '' }}>
                                                    {{ $location->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('return_from_location_id')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> تحديث الحجز
                        </button>
                        <a href="{{ route('external-bookings.index') }}" class="btn btn-secondary">
                            <i class="fas fa-times"></i> إلغاء
                        </a>
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
            $('#departure_from_location_id, #return_from_location_id, #car_id, #return_car_id, #driver_id, #return_driver_id, #supervisor_id, #car_type_id').select2();

            // Calculate booking_to from booking_from + trip_duration
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

            // Auto-fill return fields
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

            $('#departure_from_location_id').on('change', function() {
                $('#return_from_location_id').val($(this).val()).trigger('change');
            });

            // Toggle return section
            const $hasReturn = $('#has_return');
            const $returnSection = $('#return_section');

            $hasReturn.on('change', function() {
                $returnSection.slideToggle();
            });

            // Initial state
            if ($hasReturn.is(':checked')) {
                $returnSection.show();
            }
        });
    </script>
@stop