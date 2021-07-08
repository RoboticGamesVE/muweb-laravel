<?php

namespace App\Http\Controllers\Admin;

use App\Models\RssSetting;
use App\Http\Requests\RssSettingRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RssSettingController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $title = 'Rss Settings';
        $rssSetting = RssSetting::first();

        return view('admin/modules/rsssettings/form', compact('rssSetting','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(RssSettingRequest $request)
    {
        $arg = [
            'url' => $request->url,
            'title_length' => $request->title_length,
            'count' => $request->count,
            'time_check' => $request->time_check,
        ];
        RssSetting::first()->update($arg);
        return redirect()->route('rss_settings.show');
    }
}
