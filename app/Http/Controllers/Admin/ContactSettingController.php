<?php

namespace App\Http\Controllers\Admin;

use App\Models\ContactSetting;
use App\Http\Requests\ContactSettingRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ContactSettingController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $title = 'Contact Settings';
        $contactSetting = ContactSetting::first();

        return view('admin/modules/contactsettings/form', compact('contactSetting','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(ContactSettingRequest $request)
    {
        $arg = [
            'method' => $request->method,
            'email' => $request->email,
            'length' => $request->length,
        ];
        ContactSetting::first()->update($arg);
        return redirect()->route('contact_settings.show');
    }
}