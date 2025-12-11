<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCarTypeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('car_types', 'name')->ignore($this->car_type),
            ],
            'description' => 'nullable|string',
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => 'اسم نوع السيارة',
            'description' => 'الوصف',
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'حقل :attribute مطلوب.',
            'string' => 'حقل :attribute يجب أن يكون نص.',
            'max' => 'حقل :attribute يجب ألا يتجاوز :max حرف.',
            'unique' => ':attribute موجود مسبقاً.',
        ];
    }
}
