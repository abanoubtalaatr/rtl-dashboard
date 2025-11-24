<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLocationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'type' => 'required|in:hotel,landmark,airport,other',
            'address' => 'nullable|string',
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => 'اسم الموقع',
            'type' => 'نوع الموقع',
            'address' => 'العنوان',
        ];
    }
}
