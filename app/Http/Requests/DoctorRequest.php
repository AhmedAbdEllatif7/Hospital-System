<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class DoctorRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'name' =>'required|string|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('doctors', 'email')->ignore($this->route('doctor')),
            ],
            'password' => 'required|min:6',
            'phone' => 'nullable',
            'section_id' => 'required|exists:sections,id',
            'appointments' => 'required|array|min:1',
            'appointments.*' => 'integer|exists:appointments,id',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ];
    }
}
