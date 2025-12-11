<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreDriverRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'mobile' => ['required', 'string', 'max:20'],
            'status' => ['required', 'string', Rule::in(['on_break', 'in_operation'])],
            'license_number' => ['required', 'string', 'max:255', 'unique:drivers,license_number'],
            'license_image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            'national_id' => ['required', 'string', 'max:255'],
            'national_images' => ['nullable', 'array'],
            'national_images.*' => ['image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
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
            'name.required' => 'الاسم مطلوب.',
            'mobile.required' => 'رقم الجوال مطلوب.',
            'status.required' => 'الحالة مطلوبة.',
            'license_number.required' => 'رقم الرخصة مطلوب.',
            'license_number.unique' => 'رقم الرخصة مستخدم بالفعل.',
            'license_image.image' => 'يجب أن يكون الملف صورة.',
            'license_image.mimes' => 'يجب أن تكون الصورة من نوع: jpeg, png, jpg, gif.',
            'license_image.max' => 'حجم الصورة يجب ألا يتجاوز 2 ميجابايت.',
            'national_id.required' => 'رقم البطاقة الوطنية مطلوب.',
            'national_images.array' => 'ملفات البطاقة غير صحيحة.',
            'national_images.*.image' => 'يجب أن تكون كل ملفات البطاقة صوراً.',
            'national_images.*.mimes' => 'يجب أن تكون صور البطاقة من نوع: jpeg, png, jpg, gif.',
            'national_images.*.max' => 'حجم كل صورة للبطاقة يجب ألا يتجاوز 2 ميجابايت.',
        ];
    }
}
