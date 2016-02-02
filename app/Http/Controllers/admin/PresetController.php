<?php

namespace App\Http\Controllers\Admin;

use App\Level;
use App\Markah;
use App\Ppk;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class PresetController extends Controller
{

    /*
     * MARKAH
     */
    public function markah() {

        $marks = Markah::all();

        return View('admin.preset.markah', compact('marks'));
    }

    public function markahPost(Request $request) {


        $request->all();

        // Validation
        $validation = Validator::make($request->all(), [
            'position'  => 'required|min:5',
            'mark'      => 'required|numeric'
        ]);

        if($validation->fails()) {
            Session::flash('error', 'Ralat. Sila isikan input dengan format yang betul.');
            return redirect()->back();
        }

        $markah = new Markah;

        $markah->position = ucwords($request->get('position'));
        $markah->mark = $request->get('mark');

        if($markah->save()) {
            Session::flash('success', 'Berjaya. Markah berjaya direkod.');
        }

        return redirect()->back();
    }

    public function markahKemaskini(Request $request) {


        // Validation
        $validation = Validator::make($request->all(), [
            'id'        => 'required|numeric',
            'position'  => 'required|min:5',
            'mark'      => 'required|numeric'
        ]);

        if($validation->fails()) {
            Session::flash('error', 'Ralat. Sila isikan input dengan format yang betul.');
            return redirect()->back();
        }

        $markah = Markah::findOrFail($request->get('id'));

        $markah->position = ucwords($request->get('position'));
        $markah->mark = $request->get('mark');

        if($markah->save()) {
            Session::flash('success', 'Berjaya. Markah berjaya direkod.');
        }

        return redirect()->back();
    }

    /*
     * Users
     */

    public function users() {

        $users = User::orderBy('level_id', 'asc')->get();
        $level = Level::lists('name', 'id');
        $ppk = Ppk::lists('name', 'id');

        return View('admin.preset.users', compact('users', 'level', 'ppk'));
    }

    public function userPost(Request $request) {

        $validation = Validator::make($request->all(), [
            'name'      => 'required|min:5',
            'email'     => 'required|email',
            'password'  => 'required|min:5',
            'level_id'  => 'required|numeric',
            'ppk_id'    => 'required|numeric'
        ]);

        if($validation->fails()) {
            Session::flash('error', 'Gagal. Pengguna gagal direkodkan.');
            return redirect()->back();
        }

        $user = new User;

        $user->name = ucwords($request->get('name'));
        $user->email = strtolower($request->get('email'));
        $user->password = bcrypt($request->get('password'));
        $user->level_id = $request->get('level_id');
        $user->ppk_id = $request->get('ppk_id');

        if($user->save()) {
            Session::flash('success', 'Berjaya. Pengguna telah direkodkan.');
        } else {
            Session::flash('error', 'Gagal. Pengguna gagal direkodkan.');
        }

        return redirect()->back();
    }


}
