<?php

namespace App\Http\Controllers\ppk;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class UsersController extends Controller
{

    public function users() {
        $ppk = Auth::user()->ppk->id;
        $level = Auth::user()->level->id;

        $users = User::where('ppk_id', $ppk)
            ->where('level_id', '>', $level)
            ->get();

        return View('ppk.rekod.users', compact('users'));
    }

    public function usersPost(Request $request) {

        $validation = Validator::make($request->all(), [
            'name'      => 'required|min:5',
            'email'     => 'required|email',
            'password'  => 'required|min:5'
        ]);

        if($validation->fails()) {
            Session::flash('error', 'Gagal. Pengguna gagal didaftarkan');
            return redirect()->back();
        }

        $user = new User();

        $level_id = Auth::user()->level_id + 1;

        $user->name = ucwords($request->get('name'));
        $user->email = strtolower($request->get('email'));
        $user->password = bcrypt($request->get('password'));
        $user->level_id = $level_id;
        $user->ppk_id = Auth::user()->ppk_id;

        if($user->save())
            Session::flash('success', 'Berjaya. Pengguna telah berjaya direkodkan.');
        else
            Session::flash('error', 'Gagal. Pengguna gagal didaftarkan');

        return redirect()->back();
    }

    public function kemaskini(Request $request) {

        $user = User::findOrFail($request->get('id'));

        $validation = Validator::make($request->all(), [
            'id'        => 'required|numeric',
            'name'      => 'required|min:5',
            'email'     => 'required|email|min:12'
        ]);

        if($validation->fails()) {
            Session::flash('error', 'Gagal. Pengemaskinian pengguna gagal.');
            return redirect()->back();
        }

        $user->name = ucwords($request->get('name'));
        $user->email = strtolower($request->get('email'));

        if($user->save())
            Session::flash('success', 'Berjaya. Pengemaskinian pengguna berjaya.');
        else
            Session::flash('error', 'Gagal. Pengemaskinian pengguna gagal.');

        return redirect()->back();
    }
}
