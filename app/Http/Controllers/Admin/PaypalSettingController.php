<?php

namespace App\Http\Controllers\Admin;

use App\Models\PaypalSetting;
use App\Http\Requests\PaypalSettingRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaypalSettingController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $title = 'Paypal Settings';
        $paypalSetting = PaypalSetting::first();

        return view('admin/modules/paypalsettings/form', compact('paypalSetting','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(PaypalSettingRequest $request)
    {
        $arg = [
            'email' => $request->email,
        	'punish' => $request->punish,
        	'required_code' => $request->required_code,
        ];
        PaypalSetting::first()->update($arg);
        return redirect()->route('paypal_settings.show');
    }
}
