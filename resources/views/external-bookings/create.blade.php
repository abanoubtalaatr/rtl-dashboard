@extends('layouts.app')

@section('title', 'إضافة حجز خارجي جديد')

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
            <i class="fas fa-plus-circle mr-2"></i>
            إضافة حجز خارجي جديد
        </h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent m-0 p-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">الرئيسية</a></li>
                <li class="breadcrumb-item"><a href="{{ route('external-bookings.index') }}">الحجوزات الخارجية</a></li>
                <li class="breadcrumb-item active">إضافة جديد</li>
            </ol>
        </nav>
    </div>
@stop

@section('page_content')
    <div class="row">
        <div class="col-12">
            <div class="card">

                <form action="{{ route('external-bookings.store') }}" method="POST">
                    @csrf
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

                        <!-- القسم الأول: معلومات الحجز الأساسية -->
                        <h5 class="mb-3"
                            style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 15px; border-radius: 8px;">
                            <i class="fas fa-clipboard-list mr-2"></i>معلومات الحجز
                        </h5>

                        <div class="row">


                            <!-- من (From) -->
                            <div class="col-md-2">
                                <div class="form-group">

                                    <select name="external_location_id_departure" id="external_location_id_departure"
                                        style="padding: unset;"
                                        class="form-control @error('external_location_id_departure') is-invalid @enderror"
                                        required>
                                        <option value="">-- المكان --</option>
                                        @foreach ($externalLocations as $location)
                                            <option value="{{ $location->id }}"
                                                {{ ($lastBooking && $lastBooking->external_location_id_departure == $location->id) || old('external_location_id_departure') == $location->id ? 'selected' : '' }}>
                                                {{ $location->name }}
                                            </option>
                                        @endforeach
                                    </select>

                                    @error('external_location_id_departure')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- إلى (To) -->
                            {{-- <div class="col-md-2">
                                <div class="form-group">

                                    <select name="departure_to_location_id" id="departure_to_location_id"
                                        style="padding: unset;"
                                        class="form-control @error('departure_to_location_id') is-invalid @enderror"
                                        required>
                                        <option value="">-- إلى --</option>
                                        @foreach ($locations as $location)
                                            <option value="{{ $location->id }}"
                                                {{ ($lastBooking && $lastBooking->departure_to_location_id == $location->id) || old('departure_to_location_id') == $location->id ? 'selected' : '' }}>
                                                {{ $location->name }}
                                            </option>
                                        @endforeach
                                    </select>

                                    @error('departure_to')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div> --}}
                            <div class="col-md-2">
                                <div class="form-group">

                                    <select name="supervisor_id" id="supervisor_id" style="padding: unset;"
                                        class="form-control @error('supervisor_id') is-invalid @enderror" required>
                                        <option value="" style="padding: 10px">-- اختر مدير الحركه --</option>
                                        @foreach ($supervisors as $supervisor)
                                            <option value="{{ $supervisor->id }}"
                                                {{ ($lastBooking && $lastBooking->supervisor_id == $supervisor->id) || old('supervisor_id') == $supervisor->id ? 'selected' : '' }}>
                                                {{ $supervisor->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- العميل -->
                            <div class="col-md-2">
                                <div class="form-group">

                                    <select name="customer_id" id="customer_id" style="padding: unset;"
                                        class="form-control @error('customer_id') is-invalid @enderror" required>
                                        <option value="" style="padding: 10px">-- اختر العميل --</option>
                                        @foreach ($customers as $customer)
                                            <option value="{{ $customer->id }}"
                                                {{ ($lastBooking && $lastBooking->customer_id == $customer->id) || old('customer_id') == $customer->id ? 'selected' : '' }}>
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

                                    <select name="car_type_id" id="car_type_id" style="padding: unset;"
                                        class="form-control @error('car_type_id') is-invalid @enderror" required>
                                        <option value="">-- اختر نوع السيارة --</option>
                                        @foreach ($carTypes as $type)
                                            <option value="{{ $type->id }}"
                                                {{ ($lastBooking && $lastBooking->car_type_id == $type->id) || old('car_type_id') == $type->id ? 'selected' : '' }}>
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

                                    <select name="payment_type" id="payment_type" style="padding: unset;"
                                        class="form-control @error('payment_type') is-invalid @enderror" required>
                                        @foreach ($paymentTypes as $key => $label)
                                            <option value="{{ $key }}"
                                                {{ ($lastBooking && $lastBooking->payment_type == $key) || old('payment_type', 'cash') == $key ? 'selected' : '' }}>
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
                                        value="{{ ($lastBooking && $lastBooking->number_of_people) || old('number_of_people') }}" min="1" placeholder="اكتب عدد الأفراد"
                                        required>
                                    @error('number_of_people')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- السائق -->
                            <div class="col-md-2">
                                <div class="form-group">

                                    <select name="driver_id" id="driver_id" style="padding: unset;"
                                        class="form-control @error('driver_id') is-invalid @enderror" required>
                                        <option value="">-- اختر السائق --</option>
                                        @foreach ($drivers as $driver)
                                            <option value="{{ $driver->id }}"
                                                {{ ($lastBooking && $lastBooking->driver_id == $driver->id) || old('driver_id') == $driver->id ? 'selected' : '' }}>
                                                {{ $driver->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('driver_id')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>



                            <!-- مدة الحجز (Length of Booking) -->
                            <div class="col-md-2">
                                <div class="form-group">

                                    <input type="number" name="trip_duration" id="trip_duration"
                                        class="form-control @error('trip_duration') is-invalid @enderror"
                                        value="{{ ($lastBooking && $lastBooking->trip_duration) || old('trip_duration') }}" min="1"
                                        placeholder="اكتب مدة التشغيلة" placeholder="مثال: 40 دقيقة" required>
                                    @error('trip_duration')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- الشركة -->
                            <div class="col-md-2">
                                <div class="form-group">

                                    <select name="company_id" id="company_id" style="padding: unset;"
                                        class="form-control @error('company_id') is-invalid @enderror" required>
                                        <option value="">-- اختر الشركة --</option>
                                        @foreach ($companies as $company)
                                            <option value="{{ $company->id }}"
                                                {{ ($lastBooking && $lastBooking->company_id == $company->id) || old('company_id') == $company->id ? 'selected' : '' }}>
                                                {{ $company->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('company_id')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">

                                    <input type="number" name="commission_for_driver" id="commission_for_driver"
                                        class="form-control @error('commission_for_driver') is-invalid @enderror"
                                        value="{{ ($lastBooking && $lastBooking->commission_for_driver) || old('commission_for_driver') }}" step="0.01" min="0"
                                        placeholder="اكتب عمولة السائق" required>
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
                                        value="{{ ($lastBooking && $lastBooking->booking_price) || old('booking_price') }}" step="0.01" min="0"
                                        placeholder="اكتب سعر الحجز" required>
                                    @error('booking_price')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- العملة -->
                            <div class="col-md-2">
                                <div class="form-group">

                                    <select name="currency_id" id="currency_id" style="padding: unset;"
                                        class="form-control @error('currency_id') is-invalid @enderror" required>
                                        <option value="">-- اختر العملة --</option>
                                        @foreach ($currencies as $currency)
                                            <option value="{{ $currency->id }}"
                                                {{ ($lastBooking && $lastBooking->currency_id == $currency->id) || old('currency_id') == $currency->id ? 'selected' : '' }}>
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

                                    @php
                                        $bookingFromValue = old('booking_from')
                                        ??now()->format('Y-m-d\TH:i:s');
                                    @endphp

                                    <input type="datetime-local" name="booking_from" id="booking_from"
                                        class="form-control @error('booking_from') is-invalid @enderror"
                                        value="{{ $bookingFromValue }}" required>
                                    @error('booking_from')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <!-- السيارة -->
                            <div class="col-md-3">
                                <div class="form-group">

                                    <select name="car_id" id="car_id" style="padding: unset;"
                                        class="form-control @error('car_id') is-invalid @enderror" required>
                                        <option value="" style="padding: 10px">-- اختر السيارة --</option>
                                        @foreach ($cars as $car)
                                            <option value="{{ $car->id }}"
                                                {{ ($lastBooking && $lastBooking->car_id == $car->id) || old('car_id') == $car->id ? 'selected' : '' }}>
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


                        
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group d-flex align-items-center" style="gap: 10px;">
                                    <input type="checkbox" name="has_return" id="has_return" id="has_return_checkbox"
                                        style="width: 1.3em; height: 1.3em;"
                                        
                                        class="@error('has_return') is-invalid @enderror">
                                    <label for="has_return" class="mb-0">هل يوجد للحجز عودة <span
                                            class="text-danger">*</span></label>
                                    @error('has_return')
                                        <span class="invalid-feedback d-block">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{-- @dd($lastBooking->has_return); --}}
                        <div id="return_section" >
                            <!-- قسم العودة -->
                            <h5 class="mb-3"
                                style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); color: white; padding: 15px; border-radius: 8px;">
                                <i class="fas fa-undo-alt mr-2"></i>معلومات العودة
                            </h5>

                            <div class="row">

                                <!-- سائق العودة - يتم ملؤه تلقائياً -->
                                <div class="col-md-3">
                                    <div class="form-group">

                                        <select name="return_driver_id" id="return_driver_id" style="padding: unset;"
                                            class="form-control @error('return_driver_id') is-invalid @enderror">
                                            <option value="">-- نفس السائق --</option>
                                            @foreach ($drivers as $driver)
                                                <option value="{{ $driver->id }}"
                                                    {{ ($lastBooking && $lastBooking->return_driver_id == $driver->id) || old('return_driver_id') == $driver->id ? 'selected' : '' }}>
                                                    {{ $driver->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('return_driver_id')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="on_phone"> على الهاتف <span class="text-danger">*</span></label>
                                        <input type="checkbox" name="on_phone" id="on_phone"
                                            style="width: 1.3em; height: 1.3em;"
                                            value="{{ ($lastBooking && $lastBooking->on_phone) ? 'checked' : '' }}"
                                            class="@error('on_phone') is-invalid @enderror">
                                    </div>
                                    @error('on_phone')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- التاريخ والوقت للعودة -->
                                <div class="col-md-3">
                                    {{-- <div class="form-group"> --}}

                                        @php
                                            $bookingToValue = old('booking_to')
                                                ??  now()->format('Y-m-d\TH:i:s')
                                                ;
                                        @endphp
                                        <input type="datetime-local" name="booking_to" id="booking_to"
                                            class="form-control @error('booking_to') is-invalid @enderror"
                                            value="{{ old('booking_to') || $bookingToValue }}">
                                        @error('booking_to')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    {{-- </div> --}}
                                </div>

                                <!-- مدة العودة (Length of Return) -->
                                <div class="col-md-2">
                                    <div class="form-group">

                                        <input type="number" name="return_duration_minutes" id="return_duration_minutes"
                                            class="form-control @error('return_duration_minutes') is-invalid @enderror"
                                            value="{{ ($lastBooking && $lastBooking->return_duration_minutes) || old('return_duration_minutes') }}" min="1"
                                            placeholder="اكتب مدة العودة">
                                        @error('return_duration_minutes')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">

                                        <select name="return_car_id" id="return_car_id" style="padding: unset;"
                                            class="form-control @error('return_car_id') is-invalid @enderror">
                                            <option value="">-- اختر السيارة العودة --</option>
                                            @foreach ($cars as $car)
                                                <option value="{{ $car->id }}"
                                                    {{ ($lastBooking && $lastBooking->return_car_id == $car->id) || old('return_car_id') == $car->id ? 'selected' : '' }}>
                                                    {{ $car->plate_number }} - {{ $car->model }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('return_car_id')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- من (From) - العودة (select location) -->
                                <div class="col-md-3">
                                    <div class="form-group">

                                        <select name="external_location_id_return" id="external_location_id_return"
                                            style="padding: unset;"
                                            class="form-control @error('external_location_id_return') is-invalid @enderror">
                                            <option value="">-- المكان --</option>
                                            @foreach ($externalLocations as $location)
                                                <option value="{{ $location->id }}"
                                                    {{ ($lastBooking && $lastBooking->external_location_id_return == $location->id) || old('external_location_id_return') == $location->id ? 'selected' : '' }}>
                                                    {{ $location->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('external_location_id_return')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
{{-- 
                                <!-- إلى (To) - العودة (select location) -->
                                <div class="col-md-3">
                                    <div class="form-group">

                                        <select name="return_to_location_id" id="return_to_location_id"
                                            style="padding: unset;"
                                            class="form-control @error('return_to_location_id') is-invalid @enderror">
                                            <option value="">-- إلى --</option>
                                            @foreach ($locations as $location)
                                                <option value="{{ $location->id }}"
                                                    {{ ($lastBooking && $lastBooking->return_to_location_id == $location->id) || old('return_to_location_id') == $location->id ? 'selected' : '' }}>
                                                    {{ $location->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('return_to_location_id')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div> --}}

                            </div>
                        </div>

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> حفظ الحجز
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
    <!-- Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

   <script>
    $(document).ready(function() {
    // ========================================
    // 1. Initialize Select2 on all select elements
    // ========================================
    $('#departure_from_location_id').select2();
    $('#external_location_id_departure').select2();
    $('#external_location_id_return').select2();
    $('#return_from_location_id').select2();
    $('#return_to_location_id').select2();
    $('#car_id').select2();
    $('#return_car_id').select2();
    $('#driver_id').select2();
    $('#supervisor_id').select2();
    $('#return_driver_id').select2();
    $('#car_type_id').select2();

    // ========================================
    // 2. Calculate end time based on start time and duration
    // ========================================
    const bookingFromInput = document.getElementById('booking_from');
    const tripDurationInput = document.getElementById('trip_duration');
    const bookingToInput = document.getElementById('booking_to');

    function calculateEndTime() {
        if (bookingFromInput.value && tripDurationInput.value) {
            const startTime = new Date(bookingFromInput.value);
            const duration = parseInt(tripDurationInput.value);

            if (!isNaN(startTime.getTime()) && duration > 0) {
                startTime.setMinutes(startTime.getMinutes() + duration);

                // Format date for datetime-local (YYYY-MM-DDTHH:mm)
                const year = startTime.getFullYear();
                const month = String(startTime.getMonth() + 1).padStart(2, '0');
                const day = String(startTime.getDate()).padStart(2, '0');
                const hours = String(startTime.getHours()).padStart(2, '0');
                const minutes = String(startTime.getMinutes()).padStart(2, '0');

                const formattedDate = `${year}-${month}-${day}T${hours}:${minutes}`;

                // Set return start time
                if (!bookingToInput.value) {
                    bookingToInput.value = formattedDate;
                }
            }
        }
    }

    if (bookingFromInput) {
        bookingFromInput.addEventListener('change', calculateEndTime);
    }
    if (tripDurationInput) {
        tripDurationInput.addEventListener('input', calculateEndTime);
    }

    // ========================================
    // 3. Location Logic: Departure FROM → Return TO
    // ========================================
    $('#external_location_id_departure').on('change', function() {
        const selectedValue = $(this).val();
        if (selectedValue) {
            console.log('Setting return TO from departure FROM:', selectedValue);
            $('#external_location_id_return').val(selectedValue).trigger('change');
        }
    });

    // ========================================
    // 4. Location Logic: Departure TO → Return FROM
    // ========================================
    $('#departure_to_location_id').on('change', function() {
        const selectedValue = $(this).val();
        if (selectedValue) {
            console.log('Setting return FROM from departure TO:', selectedValue);
            $('#external_location_id_return').val(selectedValue).trigger('change');
        }
    });

    // ========================================
    // 5. Car Logic: Same car for return
    // ========================================
    $('#car_id').on('change', function() {
        const selectedValue = $(this).val();
        if (selectedValue) {
            console.log('Setting return car:', selectedValue);
            $('#return_car_id').val(selectedValue).trigger('change');
        }
    });

    // ========================================
    // 6. Driver Logic: Copy driver to return driver
    // ========================================
    $('#driver_id').on('change', function() {
        const selectedValue = $(this).val();
        const returnDriverValue = $('#return_driver_id').val();
        
        // Only set if return driver is empty
        if (selectedValue && !returnDriverValue) {
            console.log('Setting return driver:', selectedValue);
            $('#return_driver_id').val(selectedValue).trigger('change');
        }
    });

    // ========================================
    // 7. Toggle Return Section based on checkbox
    // ========================================
    const hasReturnCheckbox = $('#has_return');
    const returnSection = $('#return_section');

    if (hasReturnCheckbox.length && returnSection.length) {
        // Set initial state
        if (hasReturnCheckbox.is(':checked')) {
            returnSection.show();
        } else {
            returnSection.hide();
        }

        // Handle checkbox change
        hasReturnCheckbox.on('change', function() {
            if ($(this).is(':checked')) {
                returnSection.slideDown();
            } else {
                returnSection.slideUp();
            }
        });
        
    }
});
   </script>
@stop
