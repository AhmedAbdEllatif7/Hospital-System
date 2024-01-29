<?php

namespace App\Http\Requests\AdminDashboard;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SectionRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {

        return [
            'name' => [
                'required', 'string', 'max:255', Rule::unique('section_translations', 'name')->ignore($this->route('doctor'))
            ],
            'description' => 'nullable|string|max:1000',
        ];
    }


    public function messages()
    {
        return [
                'name.required' => 'The name field is required.',
                'name.max' => 'The name field must not exceed 255 characters.',
                'description.max' => 'The description field must not exceed 1000 characters.',
            ];
    }
}
