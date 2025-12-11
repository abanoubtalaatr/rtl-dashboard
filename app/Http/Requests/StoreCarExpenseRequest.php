<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCarExpenseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'car_id' => ['required', 'exists:cars,id'],
            'type' => ['required', 'array', 'min:1'],
            'type.*' => ['required', 'string', Rule::in(['fuel', 'spare_parts', 'oil_change', 'maintenance', 'expense_traffic'])],
            'description' => ['nullable', 'string'],
            'cost' => ['required', 'numeric', 'min:0'],
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'car_id.required' => 'السيارة مطلوبة.',
            'car_id.exists' => 'السيارة المحددة غير موجودة.',
            'type.required' => 'يجب اختيار نوع واحد على الأقل.',
            'type.array' => 'نوع المصروف غير صحيح.',
            'type.min' => 'يجب اختيار نوع واحد على الأقل.',
            'type.*.required' => 'نوع المصروف مطلوب.',
            'type.*.in' => 'نوع المصروف المختار غير صحيح.',
            'cost.required' => 'التكلفة مطلوبة.',
            'cost.numeric' => 'التكلفة يجب أن تكون رقماً.',
            'cost.min' => 'التكلفة يجب أن تكون أكبر من أو تساوي صفر.',
        ];
    }
}
