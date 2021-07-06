<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RssSettingRequest extends FormRequest
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
            'url' => 'required|string|max:255',
            'title_length' => 'required|integer',
            'count' => 'required|integer',
            'time_check' => 'required|integer',
        ];
    }
}
