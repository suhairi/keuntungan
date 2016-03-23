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


        /*****************************************
        *              SMS Notification
        *              onewaysms.com.my
        ******************************************/



        // function gw_send_sms($user, $pass, $sms_from, $sms_to, $sms_msg) {       

        //     $query_string = "api.aspx?apiusername=".$user."&apipassword=".$pass;
        //     $query_string .= "&senderid=".rawurlencode($sms_from)."&mobileno=".rawurlencode($sms_to);
        //     $query_string .= "&message=".rawurlencode(stripslashes($sms_msg)) . "&languagetype=1";        
        //     $url = "http://gateway.onewaysms.com.my:10001/".$query_string;
            
        //     $fd = @implode ('', file($url)); 

        //     if ($fd) {                       
        //         if ($fd > 0) {
        //             Print("MT ID : " . $fd);
        //             $ok = "success";
        //         } else {
        //             print("Please refer to API on Error : " . $fd);
        //             $ok = "fail";
        //         }
        //     } else {                       
        //           // no contact with gateway                      
        //           $ok = "<strong>Failed !!</strong>";      
        //     }   

        //     return $ok;  
        // }  
        
        // $username   = "APIQ9DNB2E8R7";
        // $password   = "APIQ9DNB2E8R7EK783";
        // $senderid   = "onewaysms";
        // $to         = "601114962017";
        // $message = "Info e-Dividen:  This is a test message";
        
        // Print("Sending to one way sms <br />" . gw_send_sms($username, $password, $senderid, $to, $message));
        
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
