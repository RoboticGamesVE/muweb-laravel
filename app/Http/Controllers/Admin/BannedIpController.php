<?php

namespace App\Http\Controllers\Admin;

use App\Models\BannedIp;
use App\Http\Requests\BannedIpRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class BannedIpController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Banned Ip';
        $bannedip = BannedIp::all();

        return view('admin/modules/bannedip/table', compact('bannedip','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Banned Ip';
        return view('admin/modules/bannedip/form', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BannedIpRequest $request)
    {
        $arg = [
            'banned_ip' => $request->banned_ip,
        ];

        BannedIp::create($arg);
        return redirect()->route('banned_ip.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bannerip = BannedIp::where('id', $id)->first();
        $bannerip->delete();
        return redirect()->route('banned_ip.index');

    }
}