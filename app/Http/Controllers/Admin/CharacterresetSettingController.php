<?php

namespace App\Http\Controllers\Admin;

use App\Models\CharacterResetSetting;
use App\Http\Requests\CharacterResetSettingRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class CharacterresetSettingController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $title = 'Character Reset Settings';
        $characterResetSetting = CharacterResetSetting::first();

        return view('admin/modules/characterresetsettings/form', compact('characterResetSetting','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(CharacterResetSettingRequest $request)
    {
        $arg = [
            'level' => $request->level,
			'zen' => $request->zen,
			'level_points' => $request->level_points,
			'level_points_formula' => $request->level_points_formula,
			'clear_skills' => $request->clear_skills,
			'clear_inventory' => $request->clear_inventory,
			'reset_stats' => $request->reset_stats,
			'reset_limit' => $request->reset_limit
        ];
        CharacterResetSetting::first()->update($arg);
        return redirect()->route('charactereset_settings.show');
    }
}