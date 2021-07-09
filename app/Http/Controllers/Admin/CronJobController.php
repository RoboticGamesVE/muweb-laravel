<?php

namespace App\Http\Controllers\Admin;

use App\Models\CronJob;
use App\Http\Requests\CronJobRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class CronJobController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Cron Jobs';
        $cronjobs = CronJob::all();
        return view('admin/modules/cronjobs/table', compact('cronjobs','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Cron Jobs';
        return view('admin/modules/cronjobs/form', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CronJobRequest $request)
    {
        $arg = [
            'title' => $request->title,
            'time_set' => $request->time_set,
        ];

        CronJob::create($arg);
        return redirect()->route('cron_jobs.index');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'Cron Jobs';
        $cronjob = CronJob::where('id', $id)->first();

        return view('admin/modules/cronjobs/form', compact('cronjob','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(CronJobRequest $request, $id)
    {
        CronJob::where('id', $id)->update([
            'title' => $request->title,
            'time_set' => $request->time_set,
        ]);
        return redirect()->route('cron_jobs.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cronjob = CronJob::where('id', $id)->first();
        $cronjob->delete();
        return redirect()->route('cron_jobs.index');

    }
}