<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $setting = $this->route('setting');
        
        return [
            'enable_check_the_car_available' => 'required|in:0,1',
        ];
    }

    public function messages(): array
    {
        return [
            'enable_check_the_car_available.in' => 'القيمة يجب أن تكون مفعل أو معطل.',
        ];
    }
}