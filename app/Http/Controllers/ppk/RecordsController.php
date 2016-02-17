<?php

namespace App\Http\Controllers\Ppk;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Ppk;
use Auth;
use Validator;
use Session;

class RecordsController extends Controller
{
    public function ppk() {

    	$ppk = Ppk::where('id', Auth::user()->ppk_id)
    		->first();

        return View('ppk.rekod.ppk', compact('ppk'));
    }

    public function ppkPost(Request $request) {

    	$validation = Validator::make($request->all(), [
			'code'		=> 'required|min:2',
			'name'		=> 'required',
			'fullname'	=> 'required',
			'address'	=> 'required',
			'notel1'	=> 'required'
		]);

		if($validation->fails()) {
			Session::flash('error', 'Gagal. Kemaskini maklumat PPK gagal.');
			return redirect()->back();
		}

		$ppk = Ppk::findOrFail($request->id);

		$ppk->name = strtoupper($request->name);
		$ppk->fullname = strtoupper($request->fullname);
		$ppk->address = strtoupper($request->address);
		$ppk->notel1 = $request->notel1;
		$ppk->notel2 = $request->notel2;
		$ppk->fax = $request->fax;

		if($ppk->save())
			Session::flash('success', 'Berjaya. Kemaskini rekod telah berjaya.');
		else
			Session::flash('error', 'Gagal. Kemaskini rekod telah gagal.');

    	return redirect()->back();
    }


}
