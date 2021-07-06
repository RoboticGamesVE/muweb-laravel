<?php

namespace App\Http\Controllers\Admin;

use App\Models\AnnouncementSetting;
use App\Http\Requests\AnnouncementSettingRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AnnouncementSettingController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $title = 'Announcement Settings';
        $announcementSetting = AnnouncementSetting::first();

        return view('admin/modules/announcementsetting/form', compact('announcementSetting','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(AnnouncementSettingRequest $request)
    {
        $arg = [
            'show_author' => $request->show_author,
        ];
        AnnouncementSetting::first()->update($arg);
        return redirect()->route('announcement_settings.show');
    }
}