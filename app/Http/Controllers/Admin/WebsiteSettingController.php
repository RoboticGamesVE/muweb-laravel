<?php

namespace App\Http\Controllers\Admin;

use App\Models\WebsiteSetting;
use App\Http\Requests\WebsiteSettingRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteSettingController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $title = 'Website Settings';
        $websiteSetting = WebsiteSetting::first();

        return view('admin/modules/websitesettings/form', compact('websiteSetting','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(WebsiteSettingRequest $request)
    {
        $arg = [
            'website_url' => $request->website_url,
            'website_title' => $request->website_title,
            'md5' => $request->md5,
            'crypt_key' => $request->crypt_key,
            'admin_nick' => $request->admin_nick,
            'admin_mail' => $request->admin_mail,
            'id_template' => $request->id_template,
            'copyright' => $request->copyright,
        ];
        WebsiteSetting::first()->update($arg);
        return redirect()->route('website_settings.show');
    }
}
