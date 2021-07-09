<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use App\Http\Requests\NewRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class NewController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'News';
        $news = News::all();

        return view('admin/modules/news/table', compact('news','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'New';
        return view('admin/modules/news/form', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewRequest $request)
    {
        $arg = [
            'title' => $request->title,
            'short_title' => $request->short_title,
            'content' => $request->content,
            'active' => $request->active,
            'archived' => $request->archived,
        ];

        News::create($arg);
        return redirect()->route('news.index');
    }

     /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'News';
        $new = News::where('id', $id)->first();

        return view('admin/modules/news/form', compact('new','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(NewRequest $request, $id)
    {
        News::where('id', $id)->update([
            'title' => $request->title,
            'short_title' => $request->short_title,
            'content' => $request->content,
            'active' => $request->active,
            'archived' => $request->archived,
        ]);
        return redirect()->route('news.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $new = News::where('id', $id)->first();
        $new->delete();
        return redirect()->route('news.index');

    }
}