<?php

namespace App\Http\Controllers\Ppk;

use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

use Auth;
use App\Bank;
use App\Lampiranbsatu;

class PermohonanController extends Controller
{
    public function permohonan() {

        return View('ppk.rekod.permohonan');
    }

    public function permohonan2(Request $request) {

        // ###########################  SESSION  #################################

        Session::put('tahunBerakhir', Carbon::parse($request->get('tarikh'))->format('d M Y'));

        // ########################  END SESSION  ################################

        $existed = false;

        $banks = Bank::lists('name', 'id');

        return View('ppk.rekod.permohonan2', compact('banks'));
    }

    public function permohonan3(Request $request) {

        // ###########################  SESSION  #################################

        Session::put('ditangan', $request->get('ditangan'));

        Session::put('semasa1', $request->get('semasa1'));
        Session::put('semasa2', $request->get('semasa2'));
        Session::put('semasa3', $request->get('semasa3'));
        Session::put('semasa4', $request->get('semasa4'));
        Session::put('semasa5', $request->get('semasa5'));

        Session::put('biasa1', $request->get('biasa1'));
        Session::put('biasa2', $request->get('biasa2'));
        Session::put('biasa3', $request->get('biasa3'));

        Session::put('tetap1', $request->get('tetap1'));
        Session::put('tetap2', $request->get('tetap2'));
        Session::put('tetap3', $request->get('tetap3'));
        Session::put('tetap4', $request->get('tetap4'));
        Session::put('tetap5', $request->get('tetap5'));

        Session::put('jumlahA', $request->get('jumlahA'));
        Session::put('jumlahPembahagian', $request->get('jumlahPembahagian'));
        Session::put('simpananAhli', $request->get('simpananAhli'));
        Session::put('terimaanTerdahulu', $request->get('terimaanTerdahulu'));

        Session::put('p2Markah', $request->get('markah'));

        // ########################  END SESSION  ################################

        return View('ppk.rekod.permohonan3');
    }
    
    public function permohonan4(Request $request) {


        // ###########################  SESSION  #################################

       Session::put('aItem1', $request->get('aItem1'));
       Session::put('aItem2', $request->get('aItem2'));
       Session::put('aItem3', $request->get('aItem3'));
       Session::put('aItem4', $request->get('aItem4'));
       Session::put('aItem5', $request->get('aItem5'));

       Session::put('jumlah', $request->get('jumlah'));
       Session::put('bUntungBersih', $request->get('bUntungBersih'));

       Session::put('p3Markah', $request->get('markah'));

        // ########################  END SESSION  ################################

        return View('ppk.rekod.permohonan4');

    }

    public function permohonan5(Request $request) {

        // ###########################  SESSION  #################################

        

        // ########################  END SESSION  ################################

        return $request->all();

    }




}
