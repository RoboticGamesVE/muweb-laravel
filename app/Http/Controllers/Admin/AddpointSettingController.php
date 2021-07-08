<?php

namespace App\Http\Controllers\Admin;

use App\Models\AddpointSetting;
use App\Http\Requests\AddpointSettingRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddpointSettingController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $title = 'Add Point Settings';
        $addpointSetting = AddpointSetting::first();

        return view('admin/modules/addpointsettings/form', compact('addpointSetting','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(AddpointSettingRequest $request)
    {
        $arg = [
            'strength_limit' => $request->strength_limit,
            'agility_limit' => $request->agility_limit,
            'vitality_limit' => $request->vitality_limit,
            'energy_limit' => $request->energy_limit,
            'command_limit' => $request->command_limit,
        ];
        AddpointSetting::first()->update($arg);
        return redirect()->route('addpoint_settings.show');
    }
}
