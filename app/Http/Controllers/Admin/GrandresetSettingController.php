<?php

namespace App\Http\Controllers\Admin;

use App\Models\GrandresetSetting;
use App\Http\Requests\GrandresetSettingRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GrandresetSettingController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $title = 'Grand Reset Settings';
        $grandresetSetting = GrandresetSetting::first();

        return view('admin/modules/grandresetsettings/form', compact('grandresetSetting','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(GrandresetSettingRequest $request)
    {
        $arg = [
            'resets' => $request->resets,
			'level' => $request->level,
			'zen' => $request->zen,
			'credits' => $request->credits,
			'credits_formula' => $request->credits_formula,
			'level_points' => $request->level_points,
			'level_points_formula' => $request->level_points_formula,
			'clear_skills' => $request->clear_skills,
			'clear_inventory' => $request->clear_inventory,
			'reset_stats' => $request->reset_stats
        ];
        GrandresetSetting::first()->update($arg);
        return redirect()->route('grandreset_settings.show');
    }
}
