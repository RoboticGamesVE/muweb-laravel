<?php

namespace App\Http\Controllers\Admin;

use App\Models\NewSetting;
use App\Http\Requests\NewSettingRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewSettingController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $title = 'News Settings';
        $newSetting = NewSetting::first();

        return view('admin/modules/newsettings/form', compact('newSetting','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(NewSettingRequest $request)
    {
        $arg = [
            'style_id' => $request->style_id,
            'short_length' => $request->short_length,
            'enabled_bookmarking' => $request->enabled_bookmarking,
        ];
        NewSetting::first()->update($arg);
        return redirect()->route('new_settings.show');
    }
}