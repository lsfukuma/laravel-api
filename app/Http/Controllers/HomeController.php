<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\User;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function account(){
        return view('account');
    }

    public function generateToken(){
        $apiToken = Str::random(80);
        $user = Auth::user();
        $user->api_token = $apiToken;
        $user->save();
        return redirect()->route('account');
    }
}
