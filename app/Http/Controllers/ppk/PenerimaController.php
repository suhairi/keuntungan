<?php

namespace App\Http\Controllers\Ppk;

use App\Markah;
use App\Penerima;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Session;

class PenerimaController extends Controller
{
    public function penerima() {

        $ppk_id = Auth::user()->ppk_id;


        $penerimas = Penerima::where('ppk_id', $ppk_id)
            ->orderBy('created_at', 'asc')
            ->get();

        $markah = Markah::lists('position', 'id');
        $marks = Markah::all();

        return View('ppk.rekod.penerima', compact('penerimas', 'markah', 'marks'));
    }

    public function penerimaPost(Request $request) {

        $validation = Validator::make($request->all(), [
            'name'      => 'required',
            'markah_id' => 'required|numeric',
            'status'    => 'required'
        ]);

        if($validation->fails()) {
            Session::flash('error', 'Gagal. Penerima Honororium dan Bonus gagal direkodkan.');
            return redirect()->back();
        }

        $penerima = new Penerima;

        $penerima->name = ucwords($request->get('name'));
        $penerima->ppk_id = Auth::user()->ppk_id;
        $penerima->markah_id = $request->markah_id;
        $penerima->service_duration = $request->service_duration;
        $penerima->status = $request->status;

        if($penerima->save())
            Session::flash('success', 'Berjaya. Penerima telah direkodkan.');
        else
            Session::flash('error', 'Gagal. Penerima gagal direkodkan.');


        return redirect()->back();
    }
}
