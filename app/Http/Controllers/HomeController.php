<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

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
        if(auth()->user()->level->name == 'SYS_ADMIN')
            return view('admin/home');
        elseif(auth()->user()->level->name == 'PENGURUS BESAR')
            return view('gm/home');
        elseif(auth()->user()->level->name == 'PENGARAH BPIP')
            return view('pengarah/home');
        else
            return view('home');
    }
}
