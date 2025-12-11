{{-- resources/views/car-expenses/edit.blade.php --}}
@extends('layouts.app')

@section('title', 'تعديل بيانات المصروف')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">تعديل بيانات المصروف</h3>
    </div>

    @error('types')
        <div class="alert alert-danger mx-4 mt-3">
            <strong>{{ $message }}</strong>
        </div>
    @enderror

    <div class="card-body">
        <form action="{{ route('car-expenses.update', $carExpense) }}" method="POST" id="expense-form">
            @csrf
            @method('PUT')

            <!-- Car Selection + Description -->
            <div class="row">
                <div class="col-6 mb-4">
                    <label class="font-weight-bold">السيارة <span class="text-danger">*</span></label>
                    <select name="car_id" class="form-control select2" required>
                        <option value="">اختر السيارة</option>
                        @foreach($cars as $car)
                            <option value="{{ $car->id }}" 
                                {{ old('car_id', $carExpense->car_id) == $car->id ? 'selected' : '' }}>
                                {{ $car->plate_number }}
                            </option>
                        @endforeach
                    </select>
                    @error('car_id')
                        <span class="text-danger small d-block mt-1">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-6 mb-4">
                    <label>الوصف (اختياري)</label>
                    <textarea name="description" class="form-control" rows="3">
                        {{ old('description', $carExpense->description) }}
                    </textarea>
                </div>
            </div>

            <!-- Expense Types – نفس تصميم الإضافة -->
            <div class="row">
                <div class="col-12">
                    <label class="font-weight-bold mb-3">الأنواع والتكاليف <span class="text-danger">*</span></label>
                </div>

                @php
                    // تحويل items إلى مصفوفة لسهولة الاستخدام
                    $existingItems = collect($carExpense->items ?? [])
                        ->keyBy('type')
                        ->toArray();
                @endphp

                @foreach(\App\Models\CarExpense::typeOptions() as $key => $label)
                    @php
                        $isChecked = old("types.$key.checked") 
                                    || (!old() && isset($existingItems[$key]));
                        $costValue = old("types.$key.cost") 
                                    ?? ($existingItems[$key]['cost'] ?? '');
                    @endphp

                    <div class="col-md-6 col-12 mb-4">
                        <div class="card h-100 shadow-sm border">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox"
                                               class="custom-control-input type-checkbox"
                                               id="edit_type_{{ $key }}"
                                               name="types[{{ $key }}][checked]"
                                               {{ $isChecked ? 'checked' : '' }}>
                                        <label class="custom-control-label font-weight-bold h5 mb-0" for="edit_type_{{ $key }}">
                                            @if($key === 'fuel') Fuel Icon
                                            @elseif($key === 'spare_parts') Spare Parts Icon
                                            @elseif($key === 'oil_change') Oil Change Icon
                                            @elseif($key === 'maintenance') Maintenance Icon
                                            @elseif($key === 'expense_traffic') Traffic Icon
                                            @endif
                                            {{ $label }}
                                        </label>
                                    </div>
                                </div>

                                <div class="cost-input-wrapper" style="display: {{ $isChecked ? 'block' : 'none' }};">
                                    <label class="small text-muted">التكلفة </label>
                                    <input type="number"
                                           step="0.01"
                                           min="0"
                                           class="form-control form-control-lg cost-input text-primary font-weight-bold"
                                           name="types[{{ $key }}][cost]"
                                           value="{{ $costValue }}"
                                           placeholder="0.00">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Total -->
            <div class="row mt-4">
                <div class="col-12">
                    <div class="alert alert-info text-center py-4">
                        <h3 class="mb-0">
                            الإجمالي: <strong id="total-display" class="text-primary">
                                {{ number_format($carExpense->total_cost, 2) }}
                            </strong> 
                        </h3>
                    </div>
                </div>
            </div>

            <!-- Buttons -->
            <div class="row mt-3">
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-success btn-lg px-5">
                        <i class="fas fa-save"></i> تحديث المصروف
                    </button>
                    <a href="{{ route('car-expenses.index') }}" class="btn btn-secondary btn-lg px-5">
                        إلغاء
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('js')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const checkboxes = document.querySelectorAll('.type-checkbox');
    const costInputs  = document.querySelectorAll('.cost-input');

    function toggleCostField(checkbox) {
        const wrapper = checkbox.closest('.card-body').querySelector('.cost-input-wrapper');
        const input   = wrapper.querySelector('input');

        if (checkbox.checked) {
            wrapper.style.display = 'block';
            input.setAttribute('required', 'required');
        } else {
            wrapper.style.display = 'none';
            input.removeAttribute('required');
            input.value = '';
        }
        updateTotal();
    }

    function updateTotal() {
        let total = 0;
        document.querySelectorAll('.cost-input').forEach(input => {
            if (input.closest('.cost-input-wrapper').style.display !== 'none') {
                total += parseFloat(input.value) || 0;
            }
        });
        document.getElementById('total-display').textContent = total.toFixed(2);
    }

    checkboxes.forEach(cb => cb.addEventListener('change', () => toggleCostField(cb)));
    costInputs.forEach(input => input.addEventListener('input', updateTotal));

    // تهيئة الحالة عند التحميل
    checkboxes.forEach(cb => toggleCostField(cb));
    updateTotal();
});
</script>
@endpush