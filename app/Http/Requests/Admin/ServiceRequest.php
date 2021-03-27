<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'type' => 'required',
          'title' => 'required',
          'icon' => 'image',
          'image' => 'image',
          'excerpt' => 'required',
          'description' => 'nullable',
        ];
    }
}
