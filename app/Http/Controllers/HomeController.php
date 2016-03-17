<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Mail;
use Auth;
use App\User;

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

        /*****************************************
        *           Email Notification
        ******************************************/

        // Mail::send('mail.mailers', ['user' => '', 'ppk' => Auth::user()->ppk->fullname, 'name' => Auth::user()->ppk->name], function($message) {
        //     $message->to('suhairi81@gmail.com', 'user')->subject('e-Dividen (test)');            
        // });

        // // Mail::send('mail.mailers', ['user' => '', 'ppk' => Auth::user()->ppk->fullname, 'name' => Auth::user()->ppk->name], function($message) {
        // //     $message->to('rozaidi@mada.gov.my', 'user')->subject('e-Dividen (test)');            
        // // });

        // Mail::send('mail.mailers', ['user' => '', 'ppk' => Auth::user()->ppk->fullname, 'name' => Auth::user()->ppk->name], function($message) {
        //     $message->to('abrahim59@hotmail.com', 'user')->subject('e-Dividen (test)');            
        // });

        // Mail::send('mail.mailers', ['user' => '', 'ppk' => Auth::user()->ppk->fullname, 'name' => Auth::user()->ppk->name], function($message) {
        //     $message->to('abrahim59@hotmail.com', 'user')->subject('e-Dividen (test)');            
        // });


        //test to pendaftar

        // $ppk = Auth::user()->ppk->name;
        // $url = "http://login.bulksms.my/websmsapi/ISendSMS.aspx";

        // $fields_string = null;       


        // $pendaftars = User::where('level_id', 5)
        //     ->where('phone', '!=', '')
        //     ->get();

        // foreach ($pendaftars as $pendaftar) {

        //     $fields = array(
        //             'username' => 'suhairi',
        //             'password' => 'harry5367' ,           
        //             'message' => 'e-Dividen. Tuan, PPK ' . $ppk . ' telah memohon pembahagian dividen. Mohon tindakan tuan. Emel pautan/link telah dihantar kepada tuan. Terima kasih.',
        //             'mobile' => $pendaftar->phone,
        //             'type' => '1',            
        //         );

        //     $fields_string = http_build_query($fields);

        //     $ch = curl_init();

        //     curl_setopt($ch, CURLOPT_URL, $url);
        //     curl_setopt($ch, CURLOPT_POST, count($fields));
        //     curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);

        //     $result = curl_exec($ch);

        //     curl_close($ch);
        // }

        // return;




        /*****************************************
        *           SMS Notification
        ******************************************/

        // $ppk = Auth::user()->ppk->name;

        // $url = "http://login.bulksms.my/websmsapi/ISendSMS.aspx";
        // $url = "http://login.sms99.net/websmsapi/ISendSMS.aspx";
        // $fields_string = null;

        // $fields = array(
        //     // 'username' => 'suhairi',
        //     'username' => 'suhairi81',
        //     'password' => 'harry5367' ,           
        //     'message' => 'e-Dividen. Tuan, PPK ' . $ppk . ' telah memohon pembahagian dividen. Mohon tindakan tuan. Emel pautan/link telah dihantar kepada tuan. Terima kasih.',
        //     'mobile' => '601114962017',
        //     'type' => '1',            
        // );

        // $fields_string = http_build_query($fields);

        // $ch = curl_init();

        // curl_setopt($ch, CURLOPT_URL, $url);
        // curl_setopt($ch, CURLOPT_POST, count($fields));
        // curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);

        // $result = curl_exec($ch);

        // curl_close($ch);

        // return;
        

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
