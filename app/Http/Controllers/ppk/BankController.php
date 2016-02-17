<?php

namespace App\Http\Controllers\Ppk;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Bank;
use Session;
use Auth;
use Validator;


class BankController extends Controller
{
	public function bank() {

		$banks = Bank::where('ppk_id', Auth::user()->ppk_id)
			->get();

		if($banks->isEmpty())
			$banks = [];

		// dd($banks);


		return View('ppk.rekod.bank', compact('banks'));
	}   

	public function bankPost(Request $request) {


		$validation = Validator::make($request->all(), [
			'short_name'	=> 'required|min:3',
			'name'			=> 'required',
			'saving_type'	=> 'required'

		]);	

		// return $validation->errors();

		if($validation->fails()) {
			Session::flash('error', 'Gagal. Bank gagal direkodkan.');
			return redirect()->back();
		}

		$bank = new Bank;

		$bank->short_name = strtoupper($request->short_name);
		$bank->name = strtoupper($request->name);
		$bank->saving_type = strtoupper($request->saving_type);
		$bank->ppk_id = Auth::user()->ppk_id;

		if($bank->save())
			Session::flash('success', 'Berjaya. Bank berjaya direokdkan.');
		else
			Session::flash('error', 'Gagal. Bank gagal direkodkan...');

		return redirect()->back();
	} 

}
