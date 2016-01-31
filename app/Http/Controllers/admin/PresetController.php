<?php

namespace App\Http\Controllers\Admin;

use App\Markah;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class PresetController extends Controller
{
    public function markah() {

        $marks = Markah::all();

        return View('admin.preset.markah', compact('marks'));
    }

    public function markahPost(Request $request) {

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
}
