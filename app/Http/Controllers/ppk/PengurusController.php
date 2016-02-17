<?php

namespace App\Http\Controllers\Ppk;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pengurus;
use Auth;
use Validator;
use Session;

class PengurusController extends Controller
{
    public function pengurus() {

    	$pengurus = Pengurus::where('ppk_id', Auth::user()->ppk_id)
    		->first();

		return View('ppk.rekod.pengurus', compact('pengurus'));
    }

    public function pengurusPost(Request $request) {

    	$validation = Validator::make($request->all(), [
			'name'		=> 'required',
			'nokp'		=> 'required|numeric',
			'nama_jawatan' => 'required',
			'kod_jawatan'  => 'required'
		]);

		if($validation->fails()) {
			Session::flash('error', 'Gagal. Sila isi ruangan yang disediakan dengan format yang betul.');
			return redirect()->back();
		}

		if($request->id != null) 
			$pengurus = Pengurus::findOrFail($request->id);
		else
			$pengurus = new Pengurus;

		$pengurus->name = strtoupper($request->name);
		$pengurus->nokp = $request->nokp;
		$pengurus->nama_jawatan = strtoupper($request->nama_jawatan);
		$pengurus->kod_jawatan = strtoupper($request->kod_jawatan);
		$pengurus->notel = $request->notel;
		$pengurus->ppk_id = Auth::user()->ppk_id;

		if($pengurus->save())
			Session::flash('success', 'Berjaya. Pengurus telah berjaya dikemaskini.');
		else
			Session::flash('error', 'Gagal. Pengurus gagal dikemaskini/direkodkan.');

    	return redirect()->back();
    }
}
