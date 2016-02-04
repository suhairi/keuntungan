<?php

namespace App\Http\Controllers\Ppk;

use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class PermohonanController extends Controller
{
    public function permohonan() {

        return View('ppk.rekod.permohonan');
    }

    public function permohonan2(Request $request) {

        Session::put('tahunBerakhir', Carbon::parse($request->get('tarikh'))->format('d M Y'));

        return View('ppk.rekod.permohonan2');
    }

    public function permohonan2Post(Request $request) {
        return $request->all();
    }
}
