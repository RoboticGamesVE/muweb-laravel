<?php

namespace App\Http\Controllers\Admin;

use App\Models\CreditsSetting;
use App\Http\Requests\CreditsSettingRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreditsSettingController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $title = 'Credits Settings';
        $creditsSetting = CreditsSetting::first();

        return view('admin/modules/creditssettings/form', compact('creditsSetting','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(CreditsSettingRequest $request)
    {
        $arg = [
            'url' => $request->url,
        ];
        CreditsSetting::first()->update($arg);
        return redirect()->route('credits_settings.show');
    }
}
