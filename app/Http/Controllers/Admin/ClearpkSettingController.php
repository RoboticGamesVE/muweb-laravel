<?php

namespace App\Http\Controllers\Admin;

use App\Models\ClearpkSetting;
use App\Http\Requests\ClearpkSettingRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClearpkSettingController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $title = 'Clear PK Settings';
        $clearpkSetting = ClearpkSetting::first();

        return view('admin/modules/clearpksettings/form', compact('clearpkSetting','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(ClearpkSettingRequest $request)
    {
        $arg = [
            'amount' => $request->amount,
        ];
        ClearpkSetting::first()->update($arg);
        return redirect()->route('clearpk_settings.show');
    }
}