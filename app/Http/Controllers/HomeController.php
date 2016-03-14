<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Mail;
use Auth;

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

        Mail::send('mail.mailers', ['user' => '', 'ppk' => Auth::user()->ppk->fullname, 'name' => Auth::user()->ppk->name], function($message) {
            $message->to('suhairi81@gmail.com', 'user')->subject('e-Dividen (test)');            
        });

        Mail::send('mail.mailers', ['user' => '', 'ppk' => Auth::user()->ppk->fullname, 'name' => Auth::user()->ppk->name], function($message) {
            $message->to('rozaidi@mada.gov.my', 'user')->subject('e-Dividen (test)');            
        });


        Session::flash('success', 'Berjaya send email');


        if(auth()->user()->level->name == 1)
            return view('admin/home');
        elseif(auth()->user()->level->name == 2)
            return view('gm/home');
        elseif(auth()->user()->level->name == 3)
            return view('pengarah/home');
        elseif(auth()->user()->level->name == 4)
            return view('akauntan/home');
        elseif(auth()->user()->level->name == 5)
            return view('pendaftar/home');
        elseif(auth()->user()->level->name == 6)
            return view('wilayah/home');
        elseif(auth()->user()->level->id == 7 || auth()->user()->level->id == 8)
            return view('ppk/home');
        else
            return view('home');
    }
}
