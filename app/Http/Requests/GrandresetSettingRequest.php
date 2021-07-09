<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GrandresetSettingRequest extends FormRequest
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
            'resets' => 'required|integer|max:1000000000',
			'level' => 'required|integer|max:1000000000',
			'zen' => 'required|integer|max:1000000000',
			'credits' => 'required|integer|max:1000000000',
			'credits_formula' => 'required|integer|max:1000000000',
			'level_points' => 'required',
			'level_points_formula' => 'required',
			'clear_skills' => 'required',
			'clear_inventory' => 'required',
			'reset_stats' => 'required'
        ];
    }
}
