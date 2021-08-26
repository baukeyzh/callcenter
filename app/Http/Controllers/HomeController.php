<?php

namespace App\Http\Controllers;

use App\Lesson;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
            $user = User::find(Auth::id());
            if ($user->admin){
                return view('home');
            }
            if (Auth::check()){
                Session::flash('info','Вы успешно вошли');
                return redirect('/');
            }
        }
    }
}
