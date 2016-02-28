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

    /*
     *  PERMOHONAN 1
     */
    public function permohonan() {

        return View('ppk.rekod.permohonan');
    }


    /*
     *  PERMOHONAN 2
     */

    public function permohonan2(Request $request) {

        // ###########################  SESSION  #################################

        Session::put('tahunBerakhir', Carbon::parse($request->get('tarikh'))->format('d M Y'));

        // ########################  END SESSION  ################################

        $year = Carbon::parse($request->get('tarikh'))->format('Y');

        $lampiranbsatu = Lampiranbsatu::where('ppk_id', Auth::user()->ppk_id)
            ->where('tahun', $year)
            ->first();

        $banks = Bank::lists('name', 'id');

        return View('ppk.rekod.permohonan2', compact('banks', 'existed', 'lampiranbsatu'));
    }

    /*
     *  PERMOHONAN 3
     */

    public function permohonan3(Request $request) {

        // Handling posted datas

        $year = Carbon::parse(Session::get('tarikh'))->format('Y');

        $lampiranbsatu = Lampiranbsatu::where('ppk_id', Auth::user()->ppk_id)
            ->where('tahun', $year)
            ->first();

        if($lampiranbsatu == null)            
            $lampiranbsatu = new Lampiranbsatu;  

        $lampiranbsatu->tahun = $year;
             
        $lampiranbsatu->ditangan = $request->get('ditangan');

        $lampiranbsatu->semasa1 =  $request->get('semasa1');
        $lampiranbsatu->semasa2 =  $request->get('semasa2');
        $lampiranbsatu->semasa3 =  $request->get('semasa3');
        $lampiranbsatu->semasa4 =  $request->get('semasa4');
        $lampiranbsatu->semasa5 =  $request->get('semasa5');

        $lampiranbsatu->biasa1 =  $request->get('biasa1');
        $lampiranbsatu->biasa2 =  $request->get('biasa2');
        $lampiranbsatu->biasa3 =  $request->get('biasa3');

        $lampiranbsatu->tetap1 =  $request->get('tetap1');
        $lampiranbsatu->tetap2 =  $request->get('tetap2');
        $lampiranbsatu->tetap3 =  $request->get('tetap3');
        $lampiranbsatu->tetap4 =  $request->get('tetap4');
        $lampiranbsatu->tetap5 =  $request->get('tetap5');

        $lampiranbsatu->jumlahPembahagian =  $request->get('jumlahPembahagian');
        $lampiranbsatu->simpananAhli =  $request->get('simpananAhli');
        $lampiranbsatu->terimaanTerdahulu =  $request->get('terimaanTerdahulu');

        $lampiranbsatu->markah = $request->get('markah');

        if($lampiranbsatu->save())
            Session::flash('success', 'Berjaya. Lampiran B(1) telah berjaya disimpan/kemaskini');
        else 
            Session::flash('error', 'Gagal. Lampiran B(1) gagal disimpan');

        // Checking next data

        

        return View('ppk.rekod.permohonan3');
    }
    

    /*
     *  PERMOHONAN 4
     */
    public function permohonan4(Request $request) {

        if(Session::has('success'))
            return Session::get('success');
        else
            return Session::get('error');


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

    /*
     *  PERMOHONAN 5
     */
    public function permohonan5(Request $request) {

        // ###########################  SESSION  #################################

        

        // ########################  END SESSION  ################################

        return $request->all();

    }




}
