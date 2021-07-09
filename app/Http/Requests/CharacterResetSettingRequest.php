<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CharacterResetSettingRequest extends FormRequest
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
            'level' => 'required|integer|max:1000000000',
			'zen' => 'required|integer|max:1000000000',
			'level_points' => 'required|integer|max:1000000000',
			'level_points_formula' => 'required|integer|max:1000000000',
			'clear_skills' => 'required',
			'clear_inventory' => 'required',
			'reset_stats' => 'required',
			'reset_limit' => 'required|integer|max:1000000000'
        ];
    }
}
