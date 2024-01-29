<?php

namespace App\Http\Requests\AdminDashboard;

use Illuminate\Foundation\Http\FormRequest;

class SingleServiceRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'name' => 'required|unique:service_translations,name,'.$this->id.',service_id',
            'price' => 'numeric|required',
            'description' => 'nullable|max:255',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => trans('validation.required'),
            'name.unique' => trans('validation.unique'),
            'price.required' => trans('validation.required'),
            'price.numeric' => trans('validation.numeric'),
            'description.max' => trans('validation.max'),
        ];
    }
}
