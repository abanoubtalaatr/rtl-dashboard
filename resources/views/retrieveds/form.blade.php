{{-- resources/views/retrieveds/form.blade.php --}}
{{-- استخدم هذا الملف في create و edit --}}
@extends('layouts.app')

@section('title', $retrieved->exists ? 'تعديل المبلغ المسترد' : 'إضافة مبلغ مسترد')

@section('page_content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ $retrieved->exists ? 'تعديل' : 'إضافة' }} مبلغ مسترد</h3>
    </div>

    <div class="card-body">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ $retrieved->exists ? route('retrieveds.update', $retrieved) : route('retrieveds.store') }}" method="POST">
            @csrf
            @if($retrieved->exists) @method('PUT') @endif

            <div class="row">
                <!-- رقم الغرفة -->
                <div class="col-md-4">
                    <div class="form-group">
                        <label>رقم الغرفة</label>
                        <input type="text" name="room_number" id="room_number" class="form-control"
                               value="{{ old('room_number', $retrieved->room_number) }}"
                               placeholder="مثال: 305">
                    </div>
                </div>

                <!-- التاريخ -->
                <div class="col-md-4">
                    <div class="form-group">
                        <label>التاريخ <span class="text-danger">*</span></label>
                        <input type="date" name="date" id="date" class="form-control" required
                               value="{{ old('date', $retrieved->date ? $retrieved->date->format('Y-m-d') : '') }}">
                    </div>
                </div>

                <!-- الحجز (سيتم ملؤه بالـ AJAX) -->
                <div class="col-md-4">
                    <div class="form-group">
                        <label>الحجز</label>
                        <select name="booking_id" id="booking_id" class="form-control">
                            <option value="">-- اختر حجزًا --</option>
                            @if($retrieved->booking_id)
                                <option value="{{ $retrieved->booking_id }}" selected>
                                    حجز #{{ $retrieved->booking_id }} - {{ $retrieved->booking?->guest_name ?? 'غير معروف' }}
                                </option>
                            @endif
                        </select>
                        <small class="text-muted">اكتب رقم الغرفة أو اختر تاريخًا لتحميل الحجوزات</small>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>الوصف <span class="text-danger">*</span></label>
                        <textarea name="description" class="form-control" rows="3" required>{{ old('description', $retrieved->description) }}</textarea>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label>المبلغ <span class="text-danger">*</span></label>
                        <input type="number" name="amount" step="0.01" class="form-control" required
                               value="{{ old('amount', $retrieved->amount) }}">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label>العملة <span class="text-danger">*</span></label>
                        <select name="currency_id" class="form-control" required>
                            @foreach($currencies as $currency)
                                <option value="{{ $currency->id }}" {{ old('currency_id', $retrieved->currency_id) == $currency->id ? 'selected' : '' }}>
                                    {{ $currency->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-success btn-lg">
                    <i class="fas fa-save"></i> {{ $retrieved->exists ? 'تحديث' : 'حفظ' }}
                </button>
                <a href="{{ route('retrieveds.index') }}" class="btn btn-secondary btn-lg">رجوع</a>
            </div>
        </form>
    </div>
</div>
@endsection

@push('js')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const roomInput = document.getElementById('room_number');
    const dateInput = document.getElementById('date');
    const bookingSelect = document.getElementById('booking_id');

    function loadBookings() {
        const room = roomInput.value.trim();
        const date = dateInput.value;

        if (!room && !date) {
            bookingSelect.innerHTML = '<option value="">-- اختر حجزًا --</option>';
            return;
        }

        const url = `{{ route('bookings.search') }}?room=${encodeURIComponent(room)}&date=${date}`;

        fetch(url)
            .then(response => response.json())
            .then(data => {
                bookingSelect.innerHTML = '<option value="">-- اختر حجزًا --</option>';

                if (data.length === 0) {
                    bookingSelect.innerHTML += '<option disabled>لا توجد حجوزات</option>';
                    return;
                }

                data.forEach(booking => {
                    const option = document.createElement('option');
                    option.value = booking.id;
                    // التاريخ بتنسيق Y-m-d
                    // التاريخ مع الوقت بتنسيق Y-m-d H:i
                    function formatDateTime(dateString) {
                        if(!dateString) return '';
                        const d = new Date(dateString);
                        const y = d.getFullYear();
                        const m = String(d.getMonth()+1).padStart(2,'0');
                        const day = String(d.getDate()).padStart(2,'0');
                        const h = String(d.getHours()).padStart(2,'0');
                        const min = String(d.getMinutes()).padStart(2,'0');
                        return `${y}-${m}-${day} ${h}:${min}`;
                    }
                    const bookingFrom = booking.booking_from ? formatDateTime(booking.booking_from) : '';
                    const bookingTo = booking.booking_to ? formatDateTime(booking.booking_to) : '';
                    option.textContent = `حجز #${booking.id} - ${booking.company?.name} - ${booking.room_name} (${bookingFrom} إلى ${bookingTo})`;
                    
                    // إذا كان الحجز محدد مسبقًا (في التعديل)
                    if ({{ $retrieved->booking_id ?? 0 }} == booking.id) {
                        option.selected = true;
                    }

                    bookingSelect.appendChild(option);
                });
            })
            .catch(() => {
                bookingSelect.innerHTML = '<option disabled>خطأ في تحميل الحجوزات</option>';
            });
    }

    // تحميل عند الكتابة في رقم الغرفة أو تغيير التاريخ
    roomInput.addEventListener('input', debounce(loadBookings, 500));
    dateInput.addEventListener('change', loadBookings);

    // تحميل فوري عند فتح الصفحة إذا كان فيه بيانات
    if (roomInput.value || dateInput.value) {
        loadBookings();
    }
});

// دالة تأخير لتقليل الطلبات
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        countdown = setTimeout(later, wait);
    };
}
</script>
@endpush