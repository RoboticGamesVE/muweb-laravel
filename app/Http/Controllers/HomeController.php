<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

     /**
     * Show the users.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function user()
    {
        $users = User::all();

        $file = collect(glob(base_path('routes').'/*.php'))
                ->each(function ($route) {
                    $name = explode('/', $route);
                    echo $name[1];
                });

        return response()->json($file);

        return view('user', compact('users'));
    }
}