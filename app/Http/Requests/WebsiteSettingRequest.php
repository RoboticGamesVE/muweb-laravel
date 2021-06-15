<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WebsiteSettingRequest extends FormRequest
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
            'website_url' => 'required',
            'website_title' => 'required',
            'md5' => 'required',
            'crypt_key' => 'required',
            'admin_nick' => 'required',
            'admin_mail' => 'required',
            'id_template' => 'nullable',
            'copyright' => 'nullable',
            'license' => 'nullable',
        ];
    }
}
