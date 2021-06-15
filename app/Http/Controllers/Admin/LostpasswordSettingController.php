<?php

namespace App\Http\Controllers\Admin;

use App\Models\LostpasswordSetting;
use App\Http\Requests\LostpasswordSettingRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LostpasswordSettingController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $title = 'Lost Password Settings';
        $all = LostpasswordSetting::all();
        $lostpasswordSetting = $all[0];

        return view('admin/modules/lostpasswordsettings/form', compact('lostpasswordSetting','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(LostpasswordSettingRequest $request)
    {
        $arg = [
            'method_id' => $request->method_id,
        ];
        LostpasswordSetting::where('id', 1)->update($arg);
        return redirect()->route('lostpassword_settings.show');
    }
}
