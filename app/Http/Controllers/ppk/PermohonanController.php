<?php

namespace App\Http\Controllers\Ppk;

use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

use Auth;
use App\Bank;

class PermohonanController extends Controller
{
    public function permohonan() {

        return View('ppk.rekod.permohonan');
    }

    public function permohonan2(Request $request) {

        Session::put('tahunBerakhir', Carbon::parse($request->get('tarikh'))->format('d M Y'));

        $semasa = Bank::where('ppk_id', Auth::user()->ppk_id)
            ->where('saving_type', 'SEMASA')
            ->lists('name', 'id');

        $simpanan = Bank::where('ppk_id', Auth::user()->ppk_id)
            ->where('saving_type', 'BIASA')
            ->lists('name', 'id');

        $tetap = Bank::where('ppk_id', Auth::user()->ppk_id)
            ->where('saving_type', 'TETAP')
            ->lists('name', 'id');


        return View('ppk.rekod.permohonan2', compact('semasa', 'biasa', 'tetap'));
    }

    public function permohonan2Post(Request $request) {
        return $request->all();
    }
}
