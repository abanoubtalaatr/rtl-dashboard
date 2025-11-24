<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCarExpenseRequest extends FormRequest
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
            'type' => ['required', 'string', Rule::in(['fix', 'fuel'])],
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
            'type.required' => 'نوع المصروف مطلوب.',
            'type.in' => 'نوع المصروف يجب أن يكون إصلاح أو وقود.',
            'cost.required' => 'التكلفة مطلوبة.',
            'cost.numeric' => 'التكلفة يجب أن تكون رقماً.',
            'cost.min' => 'التكلفة يجب أن تكون أكبر من أو تساوي صفر.',
        ];
    }
}
