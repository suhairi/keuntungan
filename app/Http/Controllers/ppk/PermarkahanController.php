<?php

namespace App\Http\Controllers\Ppk;

use App\Markah;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class PermarkahanController extends Controller
{
    public function index() {
        $marks = Markah::where('ppk_id', Auth::user()->ppk_id)
            ->get();

        return View('ppk.rekod.permarkahan', compact('marks'));
    }

    public function indexPost(Request $request) {

        $validation = Validator::make($request->all(), [
            'position'  => 'required|min:5',
            'mark'      => 'required|numeric'
        ]);

        if($validation->fails()) {
            Session::flash('error', 'Gagal. Permarkahan gagal direkodkan.');
            return redirect()->back();
        }

        // check redundunt position

        $markah = Markah::where('position', strtoupper($request->get('position')))
            ->get();

        if(!$markah->isEmpty()) {
            Session::flash('error', 'Gagal. Jawatan tersebut telah wujud.');
            return redirect()->back();
        }

        $markah = new Markah();

        $markah->position = strtoupper($request->get('position'));
        $markah->mark = $request->get('mark');
        $markah->ppk_id = Auth::user()->ppk_id;

        if($markah->save())
            Session::flash('success', 'Permarkahan berjaya direkod.');


        return redirect()->back();
    }

    public function edit(Request $request) {
        return $request->all();
    }

}
