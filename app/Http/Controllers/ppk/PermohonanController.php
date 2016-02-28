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
use App\Lampiranbdua;

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

        $existed = 0;

        $year = Carbon::parse($request->get('tarikh'))->format('Y');

        $lampiranbsatu = Lampiranbsatu::where('ppk_id', Auth::user()->ppk_id)
            ->where('tahun', $year)
            ->first();


        if($lampiranbsatu != null)
            $existed = 1;

        $banks = Bank::lists('name', 'id');

        if($existed)
            return View('ppk.rekod.forms._permohonan2', compact('banks', 'existed', 'lampiranbsatu'));
        else
            return View('ppk.rekod.permohonan2', compact('banks'));

    }

    /*
     *  PERMOHONAN 3
     */

    public function permohonan3(Request $request) {

        // Handling posted datas

        $year = Carbon::parse(Session::get('tarikh'))->format('Y');

        if($request->get('existed') == 1) {
            $lampiranbsatu = Lampiranbsatu::where('ppk_id', Auth::user()->ppk_id)
                ->where('tahun', $year)
                ->first();
        } else {        
            $lampiranbsatu = new Lampiranbsatu;  
        }

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
        $lampiranbsatu->ppk_id = Auth::user()->ppk_id;

        if($lampiranbsatu->save())
            Session::flash('success', 'Berjaya. Lampiran B(1) telah berjaya disimpan/kemaskini');
        else 
            Session::flash('error', 'Gagal. Lampiran B(1) gagal disimpan');

        // Checking next data B(2)

        $existed = 0;

        $lampiranbdua = Lampiranbdua::where('tahun', $year)
            ->where('ppk_id', Auth::user()->ppk_id)
            ->first();


        if($lampiranbdua != null)
            $existed = 1;

        if($existed == 1)
            return View('ppk.rekod.forms._permohonan3', compact('existed', 'lampiranbdua'));
        else
            return View('ppk.rekod.permohonan3');
    }
    

    /*
     *  PERMOHONAN 4
     */
    public function permohonan4(Request $request) {

        $year = Carbon::parse(Session::get('tarikh'))->format('Y');


        if($request->get('existed') == 1) {
            $lampiranbdua = Lampiranbdua::where('tahun', $year)
                ->where('ppk_id', Auth::user()->ppk_id)
                ->first();
        } else {
            $lampiranbdua = new Lampiranbdua;
        }


        $jumlah = $request->get('item1') + $request->get('item2') + $request->get('item3') + $request->get('item4') + $request->get('item5');

        $jumlahAtas = $request->get('untungBersih') - $jumlah;
        $jumlahBawah = $request->get('untungBersih');


        $lampiranbdua->tahun        = $year;
        $lampiranbdua->item1        = $request->get('item1');
        $lampiranbdua->item2        = $request->get('item2');
        $lampiranbdua->item3        = $request->get('item3');
        $lampiranbdua->item4        = $request->get('item4');
        $lampiranbdua->item5        = $request->get('item5');
        $lampiranbdua->item6        = $request->get('item6');

        $lampiranbdua->untungBersih = $request->get('untungBersih');

        $lampiranbdua->jumlahAtas   = $jumlahAtas;
        $lampiranbdua->jumlahBawah  = $request->get('untungBersih');

        $lampiranbdua->nisbah       = number_format(($jumlahAtas / $jumlahBawah), 2);
        $lampiranbdua->markah       = $request->get('markah');
        $lampiranbdua->ppk_id       = Auth::user()->ppk_id;

        
        if($lampiranbdua->save())
            Session::flash('success', 'Berjaya. Lampiran B(2) telah berjaya disimpan/kemaskini');
        else 
            Session::flash('error', 'Gagal. Lampiran B(2) gagal disimpan');


        // Checking next data B(3)

        $existed = 0;

        $lampiranbdua = Lampiranbdua::where('tahun', $year)
            ->where('ppk_id', Auth::user()->ppk_id)
            ->first();


        if($lampiranbdua != null)
            $existed = 1;
        else {
            Session::flash('error', 'Sila isikan ruangan ini terlebih dahulu sebelum ke ruangan berikutnya.');
            return View('ppk.rekod.permohonan4');
        }

        if($existed == 1)
            return View('ppk.rekod.forms._permohonan4', compact('existed', 'lampiranbdua'));
        else
            return View('ppk.rekod.permohonan4');

    }

    /*
     *  PERMOHONAN 5
     */
    public function permohonan5(Request $request) {

        return $request->all();

    }




}
