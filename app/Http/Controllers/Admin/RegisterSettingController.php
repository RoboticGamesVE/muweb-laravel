<?php

namespace App\Http\Controllers\Admin;

use App\Models\RegisterSetting;
use App\Http\Requests\RegisterSettingRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterSettingController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $title = 'Register Settings';
        $registerSetting = RegisterSetting::first();

        return view('admin/modules/registersettings/form', compact('registerSetting','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(RegisterSettingRequest $request)
    {
        $arg = [
            'required_verify' => $request->required_verify,
            'required_token' => $request->required_token,
            'length_token' => $request->length_token,
            'default_token' => $request->default_token,
        ];
        RegisterSetting::first()->update($arg);
        return redirect()->route('register_settings.show');
    }
}
