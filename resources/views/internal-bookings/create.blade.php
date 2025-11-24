@extends('layouts.app')

@section('title', 'إضافة حجز داخلي جديد')

@push('head')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    
@endpush

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
                <div class="card-header">
                    <h3 class="card-title">بيانات الحجز الداخلي</h3>
                </div>
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
                        <h5 class="mb-3" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 15px; border-radius: 8px;">
                            <i class="fas fa-clipboard-list mr-2"></i>معلومات الحجز
                        </h5>

                        <div class="row">
                            <!-- السيارة -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="car_id">السيارة <span class="text-danger">*</span></label>
                                    <select name="car_id" id="car_id" class="form-control @error('car_id') is-invalid @enderror" required>
                                        <option value="">-- اختر السيارة --</option>
                                        @foreach($cars as $car)
                                            <option value="{{ $car->id }}" {{ old('car_id') == $car->id ? 'selected' : '' }}>
                                                {{ $car->plate_number }} - {{ $car->model }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('car_id')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- نوع السيارة -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="car_type_id">نوع السيارة (باص، كوستر، الخ) <span class="text-danger">*</span></label>
                                    <select name="car_type_id" id="car_type_id" 
                                            class="form-control @error('car_type_id') is-invalid @enderror" required>
                                        <option value="">-- اختر نوع السيارة --</option>
                                        @foreach($carTypes as $type)
                                            <option value="{{ $type->id }}" {{ old('car_type_id') == $type->id ? 'selected' : '' }}>
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="room_name">رقم الغرفة <span class="text-danger">*</span></label>
                                    <input type="text" name="room_name" id="room_name" 
                                           class="form-control @error('room_name') is-invalid @enderror"
                                           value="{{ old('room_name') }}" placeholder="مثال: 201" required>
                                    @error('room_name')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- نوع الدفع -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="payment_type">نوع الدفع <span class="text-danger">*</span></label>
                                    <select name="payment_type" id="payment_type" 
                                            class="form-control @error('payment_type') is-invalid @enderror" required>
                                        @foreach($paymentTypes as $key => $label)
                                            <option value="{{ $key }}" {{ old('payment_type', 'cash') == $key ? 'selected' : '' }}>
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="number_of_people">عدد الأفراد <span class="text-danger">*</span></label>
                                    <input type="number" name="number_of_people" id="number_of_people" 
                                           class="form-control @error('number_of_people') is-invalid @enderror"
                                           value="{{ old('number_of_people', 1) }}" min="1" placeholder="مثال: 15" required>
                                    @error('number_of_people')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- السائق -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="driver_id">السائق <span class="text-danger">*</span></label>
                                    <select name="driver_id" id="driver_id" 
                                            class="form-control @error('driver_id') is-invalid @enderror" required>
                                        <option value="">-- اختر السائق --</option>
                                        @foreach($drivers as $driver)
                                            <option value="{{ $driver->id }}" {{ old('driver_id') == $driver->id ? 'selected' : '' }}>
                                                {{ $driver->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('driver_id')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- التاريخ والوقت -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="booking_from">التاريخ والوقت <span class="text-danger">*</span></label>
                                    <input type="datetime-local" name="booking_from" id="booking_from" 
                                           class="form-control @error('booking_from') is-invalid @enderror"
                                           value="{{ old('booking_from') }}" required>
                                    @error('booking_from')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- مدة الحجز (Length of Booking) -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="trip_duration">مدة الحجز - كم دقيقة للوصول للوجهة <span class="text-danger">*</span></label>
                                    <input type="number" name="trip_duration" id="trip_duration" 
                                           class="form-control @error('trip_duration') is-invalid @enderror"
                                           value="{{ old('trip_duration', 40) }}" min="1" placeholder="مثال: 40 دقيقة" required>
                                    @error('trip_duration')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- الشركة -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="company_id">الشركة المنفذة للحجز <span class="text-danger">*</span></label>
                                    <select name="company_id" id="company_id" 
                                            class="form-control @error('company_id') is-invalid @enderror" required>
                                        <option value="">-- اختر الشركة --</option>
                                        @foreach($companies as $company)
                                            <option value="{{ $company->id }}" {{ old('company_id') == $company->id ? 'selected' : '' }}>
                                                {{ $company->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('company_id')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- من (From) -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="departure_from">من (From) <span class="text-danger">*</span></label>
                                    <input type="text" name="departure_from" id="departure_from" 
                                           class="form-control @error('departure_from') is-invalid @enderror"
                                           value="{{ old('departure_from') }}" 
                                           placeholder="مثال: فندق ماريوت" required>
                                    @error('departure_from')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- إلى (To) -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="departure_to">إلى (To) <span class="text-danger">*</span></label>
                                    <input type="text" name="departure_to" id="departure_to" 
                                           class="form-control @error('departure_to') is-invalid @enderror"
                                           value="{{ old('departure_to') }}" 
                                           placeholder="مثال: الأهرامات" required>
                                    @error('departure_to')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        <!-- قسم العودة -->
                        <h5 class="mb-3" style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); color: white; padding: 15px; border-radius: 8px;">
                            <i class="fas fa-undo-alt mr-2"></i>معلومات العودة (Return Section)
                        </h5>
                        
                        <div class="row">
                            <!-- سائق العودة - يتم ملؤه تلقائياً -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="return_driver_id">سائق العودة (Driver) <span class="text-danger">*</span></label>
                                    <select name="return_driver_id" id="return_driver_id" 
                                            class="form-control @error('return_driver_id') is-invalid @enderror" required>
                                        <option value="">-- نفس السائق --</option>
                                        @foreach($drivers as $driver)
                                            <option value="{{ $driver->id }}" {{ old('return_driver_id') == $driver->id ? 'selected' : '' }}>
                                                {{ $driver->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('return_driver_id')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- التاريخ والوقت للعودة -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="booking_to">التاريخ والوقت (Date & Time) <span class="text-danger">*</span></label>
                                    <input type="datetime-local" name="booking_to" id="booking_to" 
                                           class="form-control @error('booking_to') is-invalid @enderror"
                                           value="{{ old('booking_to') }}" required>
                                    @error('booking_to')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- مدة العودة (Length of Return) -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="return_duration_minutes">مدة العودة (Length of Return) - بالدقائق <span class="text-danger">*</span></label>
                                    <input type="number" name="return_duration_minutes" id="return_duration_minutes" 
                                           class="form-control @error('return_duration_minutes') is-invalid @enderror"
                                           value="{{ old('return_duration_minutes', 40) }}" min="1" placeholder="مثال: 40 دقيقة" required>
                                    @error('return_duration_minutes')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- من (From) - العودة -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="return_from">من (From)</label>
                                    <input type="text" name="return_from" id="return_from" 
                                           class="form-control @error('return_from') is-invalid @enderror"
                                           value="{{ old('return_from') }}" 
                                           placeholder="مثال: الأهرامات">
                                    @error('return_from')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- إلى (To) - العودة -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="return_to">إلى (To)</label>
                                    <input type="text" name="return_to" id="return_to" 
                                           class="form-control @error('return_to') is-invalid @enderror"
                                           value="{{ old('return_to') }}" 
                                           placeholder="مثال: فندق ماريوت">
                                    @error('return_to')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        <h5 class="mb-3"><i class="fas fa-money-bill-wave mr-2"></i>المبالغ المالية</h5>
                        <div class="row">
                            <!-- التكلفة -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="cost">التكلفة <span class="text-danger">*</span></label>
                                    <input type="number" name="cost" id="cost" 
                                           class="form-control @error('cost') is-invalid @enderror"
                                           value="{{ old('cost', 0) }}" step="0.01" min="0" required>
                                    @error('cost')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- سعر الحجز -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="booking_price">سعر الحجز <span class="text-danger">*</span></label>
                                    <input type="number" name="booking_price" id="booking_price" 
                                           class="form-control @error('booking_price') is-invalid @enderror"
                                           value="{{ old('booking_price', 0) }}" step="0.01" min="0" required>
                                    @error('booking_price')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- العملة -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="currency_id">العملة <span class="text-danger">*</span></label>
                                    <select name="currency_id" id="currency_id" 
                                            class="form-control @error('currency_id') is-invalid @enderror" required>
                                        <option value="">-- اختر العملة --</option>
                                        @foreach($currencies as $currency)
                                            <option value="{{ $currency->id }}" {{ old('currency_id') == $currency->id ? 'selected' : '' }}>
                                                {{ $currency->name }} ({{ $currency->symbol }})
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('currency_id')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
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
    // تفعيل Select2 فقط للسيارة
    $('#car_id').select2({
        language: 'ar',
        dir: 'rtl',
        placeholder: 'اختر السيارة',
        allowClear: true,
        width: '100%'
    });

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
@stop