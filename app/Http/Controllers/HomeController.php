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

        // bulksms.my & sms99.net

        // $ppk = Auth::user()->ppk->name;

        // // $url = "http://login.bulksms.my/websmsapi/ISendSMS.aspx";
        // $url = "http://login.sms99.net/websmsapi/ISendSMS.aspx";
        // $fields_string = null;

        // $fields = array(
        //     // 'username' => 'suhairi',
        //     'username' => 'suhairi81',
        //     'password' => 'harry5367' ,           
        //     'message' => 'e-Dividen. Tuan, PPK ' . $ppk . ' telah memohon pembahagian dividen. Mohon tindakan tuan. Pautan/link telah di emel kepada tuan. Terima kasih.',
        //     'mobile' => '601114962017',
        //     'sender' => '12345',
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

        

        /********************************************
        //                  isms.com.my
        ********************************************/

        // function ismscURL($link){

        //     $http = curl_init($link);

        //     curl_setopt($http, CURLOPT_RETURNTRANSFER, TRUE);
        //     $http_result = curl_exec($http);
        //     $http_status = curl_getinfo($http, CURLINFO_HTTP_CODE);
        //     curl_close($http);

        //     return $http_result;
        // }


        // $destination = urlencode("601114962017");
        // $message = "e-Dividen. This is a test message sent by isms.com.my";
        // $message = html_entity_decode($message, ENT_QUOTES, 'utf-8'); 
        // $message = urlencode($message);
          
        // $username = urlencode("suhairi");
        // $password = urlencode("Suhairi1981");
        // $sender_id = urlencode("66630");
        // $type = 1;

        // $fp = "https://www.isms.com.my/isms_send.php";
        // $fp .= "?un=$username&pwd=$password&dstno=$destination&msg=$message&type=$type&sendid=$sender_id";
        // echo $fp;
          
        // $result = ismscURL($fp);
        // echo $result;

        // return;

        /********************************************
        //            onewaysms.com.my
        ********************************************/


        function gw_send_sms($user, $pass, $sms_from, $sms_to, $sms_msg) {       

            $query_string = "api.aspx?apiusername=".$user."&apipassword=".$pass;
            $query_string .= "&senderid=".rawurlencode($sms_from)."&mobileno=".rawurlencode($sms_to);
            $query_string .= "&message=".rawurlencode(stripslashes($sms_msg)) . "&languagetype=1";        
            $url = "http://gateway.onewaysms.com.my:10001/".$query_string;
            
            $fd = @implode ('', file($url)); 

            echo $url; return;

            if ($fd) {                       
                if ($fd > 0) {
                    Print("MT ID : " . $fd);
                    $ok = "success";
                } else {
                    print("Please refer to API on Error : " . $fd);
                    $ok = "fail";
                }
            } else {                       
                  // no contact with gateway                      
                  $ok = "<strong>Failed !!</strong>";       
            }   

            return $ok;  
        }  
        
        Print("Sending to one way sms <br />" . gw_send_sms("APIQ9DNB2E8R7", "APIQ9DNB2E8R7EK783", "INFO", "601114962017", "RM0.00 e-Dividen. This message is by onewaysms.com.my"));

        
        return;

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
