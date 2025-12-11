<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSupervisorRequest extends FormRequest
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
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'user_id' => 'required|exists:users,id|unique:supervisors,user_id',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'الاسم مطلوب.',
            'name.string' => 'الاسم يجب أن يكون نص.',
            'name.max' => 'الاسم يجب أن يكون أقل من 255 حرف.',
        ];
    }
}
