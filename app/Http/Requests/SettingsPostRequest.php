<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class SettingsPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'key' => 'same:overtime_method',
            'value' => [
                Rule::exists('references')->where(function ($query) {
                    return $query->where('code', 'overtime_method');
                })
            ]
        ];
    }
}
