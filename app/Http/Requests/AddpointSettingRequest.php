<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddpointSettingRequest extends FormRequest
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
            'strength_limit' => 'required|integer',
            'agility_limit' => 'required|integer',
            'vitality_limit' => 'required|integer',
            'energy_limit' => 'required|integer',
            'command_limit' => 'required|integer',
        ];
    }
}
