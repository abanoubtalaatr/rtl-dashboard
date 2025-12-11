{{-- resources/views/car-expenses/create.blade.php --}}
@extends('layouts.app')

@section('title', 'إضافة مصروف جديد')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">إضافة مصروف جديد</h3>
    </div>

    @error('types')
                <div class="row mt-3">
                    <div class="col-12">
                        <div class="alert alert-danger">
                            <strong>{{ $message }}</strong>
                        </div>
                    </div>
                </div>
            @enderror
    <div class="card-body">
        <form action="{{ route('car-expenses.store') }}" method="POST" id="expense-form">
            @csrf

            <!-- Car Selection – Full Width -->
            <div class="row">
                <div class="col-6 mb-4">
                    <label class="font-weight-bold">السيارة <span class="text-danger">*</span></label>
                    <select name="car_id" class="form-control select2"  required style="padding: unset;">
                        <option value="">اختر السيارة</option>
                        @foreach($cars as $car)
                            <option value="{{ $car->id }}" {{ old('car_id') == $car->id ? 'selected' : '' }}>
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
                    <textarea name="description" class="form-control" rows="3">{{ old('description') }}</textarea>
                </div>
            </div>

            <!-- Expense Types – 2 per row (col-6) -->
            <div class="row">
                <div class="col-12">
                    <label class="font-weight-bold mb-3">الأنواع والتكاليف <span class="text-danger">*</span></label>
                </div>

                @foreach(\App\Models\CarExpense::typeOptions() as $key => $label)
                    <div class="col-md-6 col-12 mb-4">
                        <div class="card h-100 shadow-sm border">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox"
                                               class="custom-control-input type-checkbox"
                                               id="type_{{ $key }}"
                                               name="types[{{ $key }}][checked]"
                                               {{ old("types.$key.checked") ? 'checked' : '' }}>
                                        <label class="custom-control-label font-weight-bold h5 mb-0" for="type_{{ $key }}">
                                            @if($key === 'fuel') <i class="fas fa-gas-pump text-danger mr-2"></i>
                                            @elseif($key === 'spare_parts') <i class="fas fa-cogs text-info mr-2"></i>
                                            @elseif($key === 'oil_change') <i class="fas fa-oil-can text-warning mr-2"></i>
                                            @elseif($key === 'maintenance') <i class="fas fa-tools text-success mr-2"></i>
                                            @elseif($key === 'expense_traffic') <i class="fas fa-file-invoice-dollar text-primary mr-2"></i>
                                            @endif
                                            {{ $label }}
                                        </label>
                                    </div>
                                </div>

                                <div class="cost-input-wrapper" style="display: {{ old("types.$key.checked") ? 'block' : 'none' }};">
                                    <label class="small text-muted">التكلفة ()</label>
                                    <input type="number"
                                           step="0.01"
                                           min="0"
                                           class="form-control form-control-lg cost-input text-primary font-weight-bold"
                                           name="types[{{ $key }}][cost]"
                                           value="{{ old("types.$key.cost") }}"
                                           placeholder="0.00">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            @error('types')
                <div class="row">
                    <div class="col-12">
                        <span class="text-danger small d-block mb-3">{{ $message }}</span>
                    </div>
                </div>
            @enderror

            
            <!-- Total -->
            <div class="row mt-4">
                <div class="col-12">
                    <div class="alert alert-info text-center py-4">
                        <h3 class="mb-0">
                            الإجمالي: <strong id="total-display" class="text-primary">0.00</strong> 
                        </h3>
                    </div>
                </div>
            </div>

            <!-- Buttons -->
            <div class="row mt-3">
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary btn-lg px-5">
                        <i class="fas fa-save"></i> حفظ المصروف
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

    // Initialize on load
    checkboxes.forEach(cb => toggleCostField(cb));
    updateTotal();
});
</script>
@endpush