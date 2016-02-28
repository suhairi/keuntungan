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

        $existed = false;
        $year = Carbon::parse($request->get('tarikh'))->format('Y');

        $lampiranbsatu = Lampiranbsatu::where('ppk_id', Auth::user()->ppk_id)
            ->where('tahun', $year)
            ->first();

        dd($lampiranbsatu);
        
        if($lampiranbsatu != null)
            $existed = true;

        $banks = Bank::lists('name', 'id');

        if($existed)
            return View('ppk.rekod.forms._permohonan2', compact('banks', 'lampiranbsatu'));
        else
            return View('ppk.rekod.permohonan2', compact('banks', 'lampiranbsatu'));

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

        $lampiranbsatu->bank_semasa1   = $request->get('semasa1Select');
        $lampiranbsatu->semasa1        = $request->get('semasa1');
        $lampiranbsatu->bank_semasa2   = $request->get('semasa2Select');
        $lampiranbsatu->semasa2        = $request->get('semasa2');
        $lampiranbsatu->bank_semasa3   = $request->get('semasa3Select');
        $lampiranbsatu->semasa3        = $request->get('semasa3');
        $lampiranbsatu->bank_semasa4   = $request->get('semasa4Select');
        $lampiranbsatu->semasa4        = $request->get('semasa4');
        $lampiranbsatu->bank_semasa5   = $request->get('semasa5Select');
        $lampiranbsatu->semasa5        = $request->get('semasa5');

        $lampiranbsatu->bank_biasa1    = $request->get('biasa15Select');
        $lampiranbsatu->biasa1         = $request->get('biasa1');
        $lampiranbsatu->bank_biasa2    = $request->get('biasa25Select');
        $lampiranbsatu->biasa2         = $request->get('biasa2');
        $lampiranbsatu->bank_biasa3    = $request->get('biasa35Select');
        $lampiranbsatu->biasa3         = $request->get('biasa3');

        $lampiranbsatu->bank_tetap1    = $request->get('tetap1Select');
        $lampiranbsatu->tetap1         = $request->get('tetap1');
        $lampiranbsatu->bank_tetap2    = $request->get('tetap2Select');
        $lampiranbsatu->tetap2         = $request->get('tetap2');
        $lampiranbsatu->bank_tetap3    = $request->get('tetap3Select');
        $lampiranbsatu->tetap3         = $request->get('tetap3');
        $lampiranbsatu->bank_tetap4    = $request->get('tetap4Select');
        $lampiranbsatu->tetap4         = $request->get('tetap4');
        $lampiranbsatu->bank_tetap5    = $request->get('tetap5Select');
        $lampiranbsatu->tetap5         = $request->get('tetap5');

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
