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
use App\Lampiranbtiga;
use App\Lampiranbempat;
use App\Lampiranlima;
use App\Lampiranenam;
use App\Lampirantujuh;
use App\Level;

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

        $lampiranbtiga = Lampiranbtiga::where('tahun', $year)
            ->where('ppk_id', Auth::user()->ppk_id)
            ->first();


        if($lampiranbtiga != null)
            $existed = 1;

        if($existed == 1)
            return View('ppk.rekod.forms._permohonan4', compact('existed', 'lampiranbdua', 'lampiranbtiga'));
        else
            return View('ppk.rekod.permohonan4', compact('lampiranbdua'));

    }

    /*
     *  PERMOHONAN 5
     */
    public function permohonan5(Request $request) {

        $year = Carbon::parse(Session::get('tarikh'))->format('Y');
        // return $request->all();

        $lampiranbtiga = Lampiranbtiga::where('tahun', $year)
            ->where('ppk_id', Auth::user()->ppk_id)
            ->first();

        if($lampiranbtiga == null)
            $lampiranbtiga = new Lampiranbtiga;


        $lampiranbtiga->tahun               = $year;
        $lampiranbtiga->nisbah1             = ($request->get('untungBersih') - $request->get('jumlah')) / $request->get('untungBersih');
        $lampiranbtiga->markah1             = $request->get('markah1');
        $lampiranbtiga->harta_semasa        = $request->get('harta_semasa');
        $lampiranbtiga->tanggungan_semasa   = $request->get('tanggungan_semasa');
        $lampiranbtiga->nisbah2             = $request->get('harta_semasa') / $request->get('tanggungan_semasa');
        $lampiranbtiga->markah2             = $request->get('markah2');
        $lampiranbtiga->jumlah_tanggungan   = $request->get('jumlah_tanggungan');
        $lampiranbtiga->jumlah_harta        = $request->get('jumlah_harta');
        $lampiranbtiga->nisbah3             = ($request->get('jumlah_tanggungan') / $request->get('jumlah_harta'));
        $lampiranbtiga->markah3             = $request->get('markah3');

        $lampiranbtiga->ppk_id              = Auth::user()->ppk_id;

        if($lampiranbtiga->save())
            Session::flash('success', 'Berjaya. Lampiran B(3, 4, 5) telah berjaya disimpan/kemaskini');
        else 
            Session::flash('error', 'Gagal. Lampiran B(3, 4, 5) gagal disimpan');

        // Checking next data B(6, 7)

        $existed = 0;

        $lampiranbdua = Lampiranbdua::where('tahun', $year)
            ->where('ppk_id', Auth::user()->ppk_id)
            ->first();

        $lampiranlima = Lampiranlima::where('tahun', $year)
            ->where('ppk_id', Auth::user()->ppk_id)
            ->first();

        $jumlah7e = 0;
        
        if($lampiranlima != null){
            $existed = 1;
            $jumlah7e = $lampiranlima->_7e1 + $lampiranlima->_7e2;
        }
            

        // return $existed;


        if($existed == 1)
            return View('ppk.rekod.forms._permohonan5', compact('existed', 'lampiranbdua', 'lampiranlima', 'jumlah7e'));
        else
            return View('ppk.rekod.permohonan5', compact('lampiranbdua'));

    }

    /*
     *  PERMOHONAN 6
     */
    public function permohonan6(Request $request) {

        // return $request->all();

        $year = Carbon::parse(Session::get('tarikh'))->format('Y');
        // return $request->all();

        $lampiranlima = Lampiranlima::where('tahun', $year)
            ->where('ppk_id', Auth::user()->ppk_id)
            ->first();

        if($lampiranlima == null)
            $lampiranlima = new lampiranlima;


        $lampiranlima->tahun                = $year;
        $lampiranlima->untungrugi           = $request->get('untungrugi');
        $lampiranlima->untungBersih         = $request->get('untungBersih');
        $lampiranlima->markah1              = $request->get('markah1');
        $lampiranlima->_7a                  = $request->get('7a');
        $lampiranlima->_7b                  = $request->get('7b');
        $lampiranlima->_7c                  = $request->get('7c');
        $lampiranlima->_7d                  = $request->get('7d');
        $lampiranlima->_7e1                 = $request->get('7e1');
        $lampiranlima->_7e2                 = $request->get('7e2');
        $lampiranlima->jumlah7e             = $request->get('_7e1') + $request->get('_7e2');
        $lampiranlima->markah2              = $request->get('markah2');
        $lampiranlima->markah3              = $request->get('markah3');
        $lampiranlima->markah4              = $request->get('markah4');
        $lampiranlima->markah5              = $request->get('markah5');
        $lampiranlima->markah6              = $request->get('markah6');        

        $lampiranlima->ppk_id               = Auth::user()->ppk_id;

        if($lampiranlima->save())
            Session::flash('success', 'Berjaya. Lampiran B(6, 7) telah berjaya disimpan/kemaskini');
        else 
            Session::flash('error', 'Gagal. Lampiran B(6, 7) gagal disimpan');

        // Checking next data B(6, 7)

        $existed = 0;

        $lampiranenam = Lampiranenam::where('tahun', $year)
            ->where('ppk_id', Auth::user()->ppk_id)
            ->first();

        if($lampiranenam != null)
            $existed = 1;

        
        $totalMarkah = $this->getMarkah($year, Auth::user()->ppk_id);


        if($existed == 1)
            return View('ppk.rekod.forms._permohonan6', compact('existed', 'lampiranenam', 'totalMarkah'));
        else
            return View('ppk.rekod.permohonan6', compact('totalMarkah'));

    }

    /*
     *  PERMOHONAN 7
     */
    public function permohonan7(Request $request) {

        // return $request->all();

        $year = Carbon::parse(Session::get('tarikh'))->format('Y');

        $lampiranenam = Lampiranenam::where('tahun', $year)
            ->where('ppk_id', Auth::user()->ppk_id)
            ->first();

        if($lampiranenam == null)
            $lampiranenam = new lampiranenam;

        $lampiranenam->tahun                = $year;

        $lampiranenam->ahliawal             = $request->get('ahliawal');
        $lampiranenam->ahlisemasa           = $request->get('ahlisemasa');
        $lampiranenam->ahlipenggunaansemasa = $request->get('ahlipenggunaansemasa');
        $lampiranenam->ahlibakiakhir        = $request->get('ahlibakiakhir');
        $lampiranenam->ahliperatuspenggunaan= $request->get('ahliperatuspenggunaan');

        $lampiranenam->amawal               = $request->get('amawal');
        $lampiranenam->amsemasa             = $request->get('amsemasa');
        $lampiranenam->ampenggunaansemasa   = $request->get('ampenggunaansemasa');
        $lampiranenam->ambakiakhir          = $request->get('ambakiakhir');
        $lampiranenam->amperatuspenggunaan  = $request->get('amperatuspenggunaan');

        $lampiranenam->pendidikanawal       = $request->get('pendidikanawal');
        $lampiranenam->pendidikansemasa     = $request->get('pendidikansemasa');
        $lampiranenam->pendidikanpenggunaansemasa = $request->get('pendidikanpenggunaansemasa');
        $lampiranenam->pendidikanbakiakhir  = $request->get('pendidikanbakiakhir');
        $lampiranenam->pendidikanperatuspenggunaan = $request->get('pendidikanperatuspenggunaan');

        $lampiranenam->pemajuanawal       = $request->get('pemajuanawal');
        $lampiranenam->pemajuansemasa     = $request->get('pemajuansemasa');
        $lampiranenam->pemajuanpenggunaansemasa = $request->get('pemajuanpenggunaansemasa');
        $lampiranenam->pemajuanbakiakhir  = $request->get('pemajuanbakiakhir');
        $lampiranenam->pemajuanperatuspenggunaan = $request->get('pemajuanperatuspenggunaan');

        $lampiranenam->ppk_id              = Auth::user()->ppk_id;

        if($lampiranenam->save())
            Session::flash('success', 'Berjaya. Lampiran B(7 (iii) (d)) telah berjaya disimpan/kemaskini');
        else 
            Session::flash('error', 'Gagal. Lampiran B(7 (iii) (d)) gagal disimpan');

        // Next Data

        $existed = 0;

        $lampirantujuh = Lampirantujuh::where('tahun', $year)
            ->where('ppk_id', Auth::user()->ppk_id)
            ->first();

        if($lampirantujuh != null)
            $existed = 1;

        $markah = $this->getMarkah($year, Auth::user()->ppk_id);
        $para = $this->getPara($markah);

        $tahunBerakhir = Session::get('tahunBerakhir');

        $untungBersih = $this->getUntungBersih($year, Auth::user()->ppk_id);

        $maxDividen = $maxHonorarium = $maxBonus = $maxHadiah = $maxKumpulan = $maxSaham = $maxPesaraan = Array();

        $max = 10;           

        for($i=$max; $i>=1; $i--)
            $maxDividen[$i] = $i;

        $maxDividen[0] = 0;

        if($markah >= 46) {

            $maxHonorarium = $this->getMax(5);
            $maxBonus = $this->getMax(10);
            $maxHadiah = $this->getMax(20);
            $maxKumpulan = $this->getMax(10);
            $maxSaham = $this->getMax(10);
            $maxPesaraan = $this->getMax(10);
            
        } else if($markah <= 45 && $markah >= 27) {

            $maxHonorarium = $this->getMax(4);
            $maxBonus = $this->getMax(8);
            $maxHadiah = $this->getMax(10);
            $maxKumpulan = $this->getMax(5);
            $maxSaham = $this->getMax(10);
            $maxPesaraan = $this->getMax(5);
            
        } else {

            $maxHonorarium = $this->getMax(3);
            $maxBonus = $this->getMax(6);
            $maxHadiah = $this->getMax(5);
            $maxKumpulan = $this->getMax(2.5);
            $maxSaham = $this->getMax(5);
            $maxPesaraan = $this->getMax(2.5);            
        }

        $lampirantujuh = Lampirantujuh::where('tahun', $year)
            ->where('ppk_id', Auth::user()->ppk_id)
            ->first();

        if($lampirantujuh != null)
            $existed = 1;


        if($existed == 1)
            return View('ppk.rekod.forms._permohonan7', compact('existed', 'tahunBerakhir', 'markah', 'para', 'untungBersih',
                     'maxDividen', 'maxHonorarium', 'maxBonus', 'maxHadiah', 'maxKumpulan', 'maxSaham', 'maxPesaraan',
                     'lampirantujuh', 'totalMarkah'));
        else
            return View('ppk.rekod.permohonan7', 
                compact('totalMarkah', 'tahunBerakhir', 'markah', 'para', 'untungBersih', 'maxDividen',
                    'maxHonorarium', 'maxBonus', 'maxHadiah', 'maxKumpulan', 'maxSaham', 'maxPesaraan')

                );

    }

    public function pengesahanPermohonan(Request $request) {

        // return $request->all();

        $year = Carbon::parse(Session::get('tarikh'))->format('Y');

        $lampirantujuh = Lampirantujuh::where('tahun', $year)
            ->where('ppk_id', Auth::user()->ppk_id)
            ->first();

        if($lampirantujuh == null)
            $lampirantujuh = new lampirantujuh;

        $lampirantujuh->tahun               = $year;
        $lampirantujuh->untungBersih        = $request->get('untungBersih');
        $lampirantujuh->luarbiasa           = $request->get('luarbiasa');
        $lampirantujuh->rezabBerkanun       = $request->get('rezabBerkanun');
        $lampirantujuh->yayasanpelajaran    = $request->get('yayasan');
        $lampirantujuh->cukaiPendapatan     = $request->get('cukaiPendapatan');
        $lampirantujuh->pelarasan           = $request->get('pelarasan');

        $lampirantujuh->dividenSaham        = $request->get('dividenSaham');

        $lampirantujuh->dividenTunai        = $request->get('dividenTunai');
        $lampirantujuh->honorarium          = $request->get('honorarium');
        $lampirantujuh->bonus               = $request->get('bonus');
        $lampirantujuh->hadiah              = $request->get('hadiah');
        $lampirantujuh->ahli                = $request->get('ahli');
        $lampirantujuh->am                  = $request->get('am');
        $lampirantujuh->pendidikan          = $request->get('pendidikan');
        $lampirantujuh->pemajuan            = $request->get('pemajuan');
        $lampirantujuh->menebusSaham        = $request->get('menebusSaham');
        $lampirantujuh->pesaraan            = $request->get('pesaraan');
        $lampirantujuh->jumlah              = $request->get('jumlah');
        $lampirantujuh->bakiDepan              = $request->get('bakiDepan');


        $lampirantujuh->ppk_id              = Auth::user()->ppk_id;


        // dd($lampirantujuh);

        if($lampirantujuh->save())
            Session::flash('success', 'Berjaya. Kelulusan Permohonan telah berjaya disimpan/kemaskini');
        else 
            Session::flash('error', 'Gagal. Kelulusan Permohonan gagal disimpan');


        return View('ppk.rekod.disclaimer');

    }








    /*****************************************************************
    ******************************************************************
    *                                                                *
    *                       Helper Functions                         *
    *                                                                *
    ******************************************************************
    *****************************************************************/

    private function getMax($max) {

        $maxDetails = Array();

        for($i=$max; $i>=1; $i--)
            $maxDetails[$i] = $i;

        $maxDetails[0] = 0;

        return $maxDetails;
    }

    private function getUntungBersih($year, $ppk_id) {

        $lampiranbdua = Lampiranbdua::where('tahun', $year)
            ->where('ppk_id', $ppk_id)
            ->first()
            ->untungBersih;

        return $lampiranbdua;

    }

    private function getMarkah($year, $ppk_id) {

        // Markah 1
        $lampiranbsatu = Lampiranbsatu::where('tahun', $year)
            ->where('ppk_id', Auth::user()->ppk_id)
            ->first();
        $markah1 = $lampiranbsatu->markah;

        // Markah 2
        $lampiranbdua = Lampiranbdua::where('tahun', $year)
            ->where('ppk_id', Auth::user()->ppk_id)
            ->first();
        $markah2 = $lampiranbdua->markah;

        // Markah 3
        $lampiranbtiga = Lampiranbtiga::where('tahun', $year)
            ->where('ppk_id', Auth::user()->ppk_id)
            ->first();
        $markah3 = $lampiranbtiga->markah1 + $lampiranbtiga->markah2 + $lampiranbtiga->markah3;

        // Markah 5
        $lampiranlima = Lampiranlima::where('tahun', $year)
            ->where('ppk_id', Auth::user()->ppk_id)
            ->first();
        $markah5 = $lampiranlima->markah1 + $lampiranlima->markah2 + $lampiranlima->markah3 + $lampiranlima->markah4 + $lampiranlima->markah5 + $lampiranlima->markah6;

        $markah = $markah1 + $markah2 + $markah3 + $markah5;

        return $markah;

    }

    private function getPara($markah) {

        if($markah >= 46 && $markah <= 65)
            return "Para 6 a (i)";

        if($markah >= 27 && $markah <= 45)
            return "Para 6 a (ii)";

        if($markah <= 26)
            return "Para 6 a (iii)";

    }




}
