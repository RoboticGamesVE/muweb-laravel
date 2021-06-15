<?php

namespace App\Http\Controllers\Admin;

use App\Models\HumanverificationSetting;
use App\Http\Requests\HumanverificationSettingRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HumanverificationSettingController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $title = 'Human Verification Settings';
        $all = HumanverificationSetting::all();
        $humanverificationSetting = $all[0];

        return view('admin/modules/humanverificationsettings/form', compact('humanverificationSetting','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(HumanverificationSettingRequest $request)
    {
        $arg = [
            'method' => $request->method,
        ];
        HumanverificationSetting::where('id', 1)->update($arg);
        return redirect()->route('humanverification_settings.show');
    }
}