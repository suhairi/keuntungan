<?php

namespace App\Http\Controllers\Ppk;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PermohonanController extends Controller
{
    public function permohonan() {

        return View('ppk.rekod.permohonan');
    }
}
