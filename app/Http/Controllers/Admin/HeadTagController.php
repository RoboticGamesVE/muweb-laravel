<?php

namespace App\Http\Controllers\Admin;

use App\Models\HeadTag;
use App\Http\Requests\HeadTagRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HeadTagController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $title = 'Head Tags';
        $all = HeadTag::all();
        $headTag = $all[0];

        return view('admin/modules/headtags/form', compact('headTag','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(HeadTagRequest $request)
    {
        $arg = [
            'keywords' => $request->keywords,
            'description' => $request->description,
        ];
        HeadTag::where('id', 1)->update($arg);
        return redirect()->route('head_tag.show');
    }
}
