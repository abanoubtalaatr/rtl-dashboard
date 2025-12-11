<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCarRequest extends FormRequest
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
        $carId = $this->route('car')->id;

        return [
            'plate_number' => ['required', 'string', 'max:255', Rule::unique('cars', 'plate_number')->ignore($carId)],
            'model' => ['nullable', 'string', 'max:255'],
            'color' => ['nullable', 'string', 'max:255'],
            'car_type_id' => ['nullable', 'exists:car_types,id'],
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
            'plate_number.required' => 'رقم اللوحة مطلوب.',
            'plate_number.unique' => 'رقم اللوحة موجود مسبقاً.',
            'car_type_id.exists' => 'نوع السيارة غير موجود.',
        ];
    }
}
