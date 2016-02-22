<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Bank;
use Validator;
use Auth;
use Session;

class BankController extends Controller
{
    public function bank() {

		$banks = Bank::all();

		if($banks->isEmpty())
			$banks = [];

		// dd($banks);


		return View('admin.preset.bank', compact('banks'));
	}   

	public function bankPost(Request $request) {


		$validation = Validator::make($request->all(), [
			'short_name'	=> 'required|min:3',
			'name'			=> 'required'

		]);	

		// return $validation->errors();

		if($validation->fails()) {
			Session::flash('error', 'Gagal. Bank gagal direkodkan.');
			return redirect()->back();
		}

		$bank = new Bank;

		$bank->short_name = strtoupper($request->short_name);
		$bank->name = strtoupper($request->name);

		if($bank->save())
			Session::flash('success', 'Berjaya. Bank berjaya direokdkan.');
		else
			Session::flash('error', 'Gagal. Bank gagal direkodkan...');

		return redirect()->back();
	} 
}
