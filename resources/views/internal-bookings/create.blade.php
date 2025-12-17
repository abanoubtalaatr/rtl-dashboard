    @extends('layouts.app')

    @section('title', 'إضافة حجز داخلي جديد')

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
            <h1 class="m-0">
                <i class="fas fa-plus-circle mr-2"></i>
                إضافة حجز داخلي جديد
            </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent m-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">الرئيسية</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('internal-bookings.index') }}">الحجوزات الداخلية</a></li>
                    <li class="breadcrumb-item active">إضافة جديد</li>
                </ol>
            </nav>
        </div>
    @stop

    @section('page_content')
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <form action="{{ route('internal-bookings.store') }}" method="POST">
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

                                        <select name="departure_from_location_id" id="departure_from_location_id"
                                            class="form-control @error('departure_from_location_id') is-invalid @enderror form-select"
                                            required>
                                            <option value="">-- من --</option>
                                            @foreach ($locations as $location)
                                                <option value="{{ $location->id }}"
                                                    {{ old('departure_from_location_id') == $location->id ? 'selected' : '' }}>
                                                    {{ $location->name }}
                                                </option>
                                            @endforeach
                                        </select>

                                        @error('departure_from')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <!-- إلى (To) -->
                                <div class="col-md-2">
                                    <div class="form-group">

                                        <select name="departure_to_location_id" id="departure_to_location_id"
                                            style="padding: unset;"
                                            class="form-control @error('departure_to_location_id') is-invalid @enderror"
                                            required>
                                            <option value="">-- إلى --</option>
                                            @foreach ($locations as $location)
                                                <option value="{{ $location->id }}"
                                                    {{ old('departure_to_location_id') == $location->id ? 'selected' : '' }}>
                                                    {{ $location->name }}
                                                </option>
                                            @endforeach
                                        </select>

                                        @error('departure_to')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="col-md-2">
                                    <div class="form-group">

                                        <select name="supervisor_id" id="supervisor_id" style="padding: unset;"
                                            class="form-control @error('supervisor_id') is-invalid @enderror form-select"
                                            required>
                                            <option value="" style="padding: 10px">-- اختر المشرف --</option>
                                            @foreach ($supervisors as $supervisor)
                                                <option value="{{ $supervisor->id }}"
                                                    {{ old('supervisor_id') == $supervisor->id ? 'selected' : '' }}>
                                                    {{ $supervisor->name }}
                                                </option>
                                            @endforeach
                                        </select>
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
                                                    {{ old('car_type_id') == $type->id ? 'selected' : '' }}>
                                                    {{ $type->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('car_type_id')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- رقم الغرفة -->
                                <div class="col-md-2">
                                    <div class="form-group">

                                        <input type="text" name="room_name" id="room_name"
                                            class="form-control @error('room_name') is-invalid @enderror"
                                            value="{{ old('room_name') }}" placeholder="اكتب رقم الغرفة" required>
                                        @error('room_name')
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
                                                    {{ old('payment_type', 'cash') == $key ? 'selected' : '' }}>
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
                                            value="{{ old('number_of_people') }}" min="1"
                                            placeholder="اكتب عدد الأفراد" required>
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
                                                    {{ old('driver_id') == $driver->id ? 'selected' : '' }}>
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
                                            value="{{ old('trip_duration') }}" min="1"
                                            placeholder="اكتب مدة التشغيلة" required>
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
                                                    {{ old('company_id') == $company->id ? 'selected' : '' }}>
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
                                            value="{{ old('commission_for_driver') }}" step="0.01" min="0"
                                            placeholder="اكتب عمولة السائق" required>
                                        @error('commission_for_driver')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input type="number" name="booking_price" id="booking_price"
                                            class="form-control @error('booking_price') is-invalid @enderror"
                                            value="{{ old('booking_price') }}" step="0.01" min="0"
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
                                                    {{ old('currency_id') == $currency->id ? 'selected' : '' }}>
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
                                <div class="col-md-4">
                                    <div class="form-group">

                                        <input type="datetime-local" name="booking_from" id="booking_from"
                                            class="form-control @error('booking_from') is-invalid @enderror"
                                            value="{{ old('booking_from') }}" required>
                                        @error('booking_from')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- السيارة -->
                                <div class="col-md-4">
                                    <div class="form-group">

                                        <select name="car_id" id="car_id" style="padding: unset;"
                                            class="form-control @error('car_id') is-invalid @enderror" required>
                                            <option value="" style="padding: 10px">-- اختر السيارة --</option>
                                            @foreach ($cars as $car)
                                                <option value="{{ $car->id }}"
                                                    {{ old('car_id') == $car->id ? 'selected' : '' }}>
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

                                        <input type="checkbox" name="has_return" id="has_return"
                                            id="has_return_checkbox" style="width: 1.3em; height: 1.3em;"
                                            class="@error('has_return') is-invalid @enderror" checked>
                                        <label for="has_return">هل يوجد للحجز عودة</label>
                                        @error('has_return')
                                            <span class="invalid-feedback d-block">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div id="return_section">
                                <!-- قسم العودة -->
                                <h5 class="mb-3"
                                    style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); color: white; padding: 5px; border-radius: 8px;">
                                    <i class="fas fa-undo-alt mr-2"></i>معلومات العودة
                                </h5>

                                <div class="row">

                                    <!-- سائق العودة - يتم ملؤه تلقائياً -->
                                    <div class="col-md-2">
                                        <div class="form-group">

                                            <select name="return_driver_id" id="return_driver_id" style="padding: unset;"
                                                class="form-control @error('return_driver_id') is-invalid @enderror">
                                                <option value="">-- نفس السائق --</option>
                                                @foreach ($drivers as $driver)
                                                    <option value="{{ $driver->id }}"
                                                        {{ old('return_driver_id') == $driver->id ? 'selected' : '' }}>
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

                                            <input type="checkbox" name="on_phone" id="on_phone"
                                                style="width: 1.3em; height: 1.3em;"
                                                class="@error('on_phone') is-invalid @enderror">
                                            <label for="on_phone"> على الهاتف</label>
                                        </div>
                                        @error('on_phone')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <!-- التاريخ والوقت للعودة -->
                                    <div class="col-md-2">
                                        <div class="form-group">

                                            <input type="datetime-local" name="booking_to" id="booking_to"
                                                class="form-control @error('booking_to') is-invalid @enderror"
                                                value="{{ old('booking_to') }}">
                                            @error('booking_to')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- مدة العودة (Length of Return) -->
                                    <div class="col-md-2">
                                        <div class="form-group">

                                            <input type="number" name="return_duration_minutes"
                                                id="return_duration_minutes"
                                                class="form-control @error('return_duration_minutes') is-invalid @enderror"
                                                value="{{ old('return_duration_minutes') }}" min="1"
                                                placeholder="اكتب مدة التشغيلة">
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
                                                        {{ old('return_car_id') == $car->id ? 'selected' : '' }}>
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
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <select name="return_from_location_id" id="return_from_location_id"
                                                style="padding: unset;"
                                                class="form-control @error('return_from_location_id') is-invalid @enderror">
                                                <option value="">-- من --</option>
                                                @foreach ($locations as $location)
                                                    <option value="{{ $location->id }}"
                                                        {{ old('return_from_location_id') == $location->id ? 'selected' : '' }}>
                                                        {{ $location->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('return_from_location_id')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- إلى (To) - العودة (select location) -->
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <select name="return_to_location_id" id="return_to_location_id"
                                                style="padding: unset;"
                                                class="form-control @error('return_to_location_id') is-invalid @enderror">
                                                <option value="">-- إلى --</option>
                                                @foreach ($locations as $location)
                                                    <option value="{{ $location->id }}"
                                                        {{ old('return_to_location_id') == $location->id ? 'selected' : '' }}>
                                                        {{ $location->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('return_to_location_id')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> حفظ الحجز
                            </button>
                            <a href="{{ route('internal-bookings.index') }}" class="btn btn-secondary">
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
            document.addEventListener('DOMContentLoaded', function() {
                // المتغيرات
                const bookingFromInput = document.getElementById('booking_from');
                const tripDurationInput = document.getElementById('trip_duration');
                const bookingToInput = document.getElementById('booking_to');

                // حساب وقت الانتهاء التلقائي بناءً على الوقت والمدة
                function calculateEndTime() {
                    if (bookingFromInput.value && tripDurationInput.value) {
                        const startTime = new Date(bookingFromInput.value);
                        const duration = parseInt(tripDurationInput.value);

                        if (!isNaN(startTime.getTime()) && duration > 0) {
                            startTime.setMinutes(startTime.getMinutes() + duration);

                            // تنسيق التاريخ لـ datetime-local (YYYY-MM-DDTHH:mm)
                            const year = startTime.getFullYear();
                            const month = String(startTime.getMonth() + 1).padStart(2, '0');
                            const day = String(startTime.getDate()).padStart(2, '0');
                            const hours = String(startTime.getHours()).padStart(2, '0');
                            const minutes = String(startTime.getMinutes()).padStart(2, '0');

                            const formattedDate = `${year}-${month}-${day}T${hours}:${minutes}`;

                            // اقتراح وقت البداية للعودة
                            if (!bookingToInput.value) {
                                bookingToInput.value = formattedDate;
                            }
                        }
                    }
                }

                bookingFromInput.addEventListener('change', calculateEndTime);
                tripDurationInput.addEventListener('input', calculateEndTime);

                // نسخ السائق إلى سائق العودة تلقائياً
                document.getElementById('driver_id').addEventListener('change', function() {
                    const returnDriverSelect = document.getElementById('return_driver_id');
                    if (!returnDriverSelect.value && this.value) {
                        returnDriverSelect.value = this.value;
                    }
                });
            });
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var hasReturnCheckbox = document.getElementById('has_return') || document.getElementById(
                    'has_return_checkbox');
                var returnSection = document.getElementById('return_section');
                if (hasReturnCheckbox && returnSection) {
                    hasReturnCheckbox.addEventListener('change', function() {
                        if (this.checked) {
                            returnSection.style.display = 'block';
                        } else {
                            returnSection.style.display = 'none';
                        }
                    });
                }
            });
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // When departure FROM changes → set return TO
                var depFromSelect = document.getElementById('departure_from_location_id');
                var returnToSelect = document.getElementById('return_to_location_id');

                if (depFromSelect && returnToSelect) {
                    depFromSelect.addEventListener('change', function() {
                        if (this.value) {
                            console.log('Setting return TO from departure FROM:', this.value);
                            returnToSelect.value = this.value;
                        }
                    });
                }

                // When departure TO changes → set return FROM
                var depToSelect = document.getElementById('departure_to_location_id');
                var returnFromSelect = document.getElementById('return_from_location_id');

                if (depToSelect && returnFromSelect) {
                    depToSelect.addEventListener('change', function() {
                        if (this.value) {
                            console.log('Setting return FROM from departure TO:', this.value);
                            returnFromSelect.value = this.value;
                        }
                    });
                }

                // Keep the car selection logic (same car for return)
                var depCarSelect = document.getElementById('car_id');
                var returnCarSelect = document.getElementById('return_car_id');

                if (depCarSelect && returnCarSelect) {
                    depCarSelect.addEventListener('change', function() {
                        if (this.value) {
                            returnCarSelect.value = this.value;
                        }
                    });
                }
            });
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                $('#departure_from_location_id').select2();
                $('#departure_to_location_id').select2();
                $('#return_from_location_id').select2();
                $('#return_to_location_id').select2();
                $('#car_id').select2();
                $('#return_car_id').select2();
                $('#driver_id').select2();
                $('#supervisor_id').select2();
                $('#return_car_id').select2();
                $('#return_driver_id').select2();
                $('#car_type_id').select2();

            });
        </script>

    @stop
