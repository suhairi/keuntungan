<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use Illuminate\Support\Facades\Redirect as Redirect;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return redirect('/home');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', [
        'as'        => 'home',
        'uses'      => 'HomeController@index'
    ]);

    /*
     *                  ADMIN
     */
    Route::group(['prefix' => 'admin'], function() {

        Route::group(['prefix' => 'preset'], function() {

            /*
             * MARKAH
             */
            Route::get('markah', [
                'as'        => 'admin.preset.markah',
                'uses'      => 'Admin\PresetController@markah'
            ]);

            Route::post('markah', [
                'as'        => 'admin.preset.markah',
                'uses'      => 'Admin\PresetController@markahPost'
            ]);

            Route::post('markah', [
                'as'        => 'admin.preset.markah.kemaskini',
                'uses'      => 'Admin\PresetController@markahKemaskini'
            ]);


            Route::get('markah/{id}', function($id) {
                $mark = \App\Markah::findOrFail($id);

                return View('admin.preset.markah.edit', compact('mark'));
            });

            /*
             * Users
             */

            Route::get('users', [
                'as'        => 'admin.preset.users',
                'uses'      => 'Admin\PresetController@users'
            ]);

            Route::post('users', [
                'as'        => 'admin.preset.usersPost',
                'uses'      => 'Admin\PresetController@userPost'
            ]);

            Route::get('users/hapus/{id}', function($id) {

                \App\User::destroy($id);
                return Redirect::back();
            });

            Route::get('users/{id}', function($id) {

                $user = \App\User::findOrFail($id);
                $level = \App\Level::lists('name', 'id');
                $ppk = \App\Ppk::lists('name', 'id');

                return View('admin.preset.users.edit', compact('user', 'level', 'ppk'));
            });

            Route::post('users/kemaskini', [
                'as'        => 'admin.preset.users.kemaskini',
                'uses'      => 'Admin\PresetController@kemaskini'
            ]);

        });

    });

    /*
     *                  PPK
     */

    Route::group(['prefix' => 'ppk'], function() {

        Route::group(['prefix'  => 'rekod'], function() {

            /*
             * User
             */
            Route::get('users', [
                'as'        =>  'ppk.rekod.users',
                'uses'      => 'Ppk\UsersController@users'
            ]);

            Route::post('users', [
                'as'        =>  'ppk.rekod.users',
                'uses'      => 'Ppk\UsersController@usersPost'
            ]);

            Route::get('users/hapus/{id}', function($id) {

                $user = \App\User::findOrFail($id);
                $user->destroy($user->id);

                return redirect()->back();
            });

            Route::get('users/{id}', function($id) {
                $user = \App\User::findOrFail($id);

                return View('ppk.rekod.users.edit', compact('user'));
            });

            Route::post('users/kemaskini', [
                'as'        => 'ppk.rekod.users.kemaskini',
                'uses'      => 'Ppk\UsersController@kemaskini'
            ]);

            /*
             * Rekod Preset
             * PPK Details, Pengurus, Bank, Penerima Bonus dan Honororium
             */

            Route::get('ppk', [
                'as'        => 'ppk.rekod.ppk',
                'uses'      => 'Ppk\RecordsController@ppk'
            ]);

            Route::post('ppk', [
                'as'        => 'ppk.rekod.ppk',
                'uses'      => 'Ppk\RecordsController@ppkPost'
            ]); 


            Route::get('pengurus', [
                'as'        => 'ppk.rekod.pengurus',
                'uses'      => 'Ppk\PengurusController@pengurus'
            ]);

            Route::post('pengurus', [
                'as'        => 'ppk.rekod.pengurus',
                'uses'      => 'Ppk\PengurusController@pengurusPost'

            ]);

            Route::get('bank', [
                'as'        => 'ppk.rekod.bank',
                'uses'      => 'ppk\BankController@bank'
            ]);

            Route::post('bank', [
                'as'        => 'ppk.rekod.bank',
                'uses'      => 'Ppk\BankController@bankPost'
            ]);

            Route::get('bank/{id}', function($id) {
                if(\App\Bank::destroy($id))
                    Session::flash('success', 'Berjaya. Permarkahan berjaya dihapus.');
                else
                    Session::flash('error', 'Gagal. Permarkahan gagal dihapus.');

                return redirect()->back();
            });

            Route::get('penerima', [
                'as'        => 'ppk.rekod.penerima',
                'uses'      => 'Ppk\PenerimaController@penerima'
            ]);

            Route::post('penerima', [
                'as'        => 'ppk.rekod.penerima',
                'uses'      => 'Ppk\PenerimaController@penerimaPost'
            ]);

            /*
             * Permarkahan
             */

            Route::get('permarkahan', [
                'as'        => 'ppk.rekod.permarkahan',
                'uses'      => 'Ppk\PermarkahanController@index'
            ]);

            Route::post('permarkahan', [
                'as'        => 'ppk.rekod.permarkahanPost',
                'uses'      => 'Ppk\PermarkahanController@indexPost'
            ]);

            Route::get('permarkahan/hapus/{id}', function($id) {

                if(\App\Markah::destroy($id))
                    Session::flash('success', 'Berjaya. Permarkahan berjaya dihapus.');
                else
                    Session::flash('error', 'Gagal. Permarkahan gagal dihapus.');

                return redirect()->back();
            });

            Route::get('permarkahan/{id}', function($id) {

                $mark = \App\Markah::findOrFail($id);

                return View('ppk.rekod.permarkahan.edit', compact('mark'));
            });

            Route::post('permarkahan/edit', [
                'as'        => 'ppk.rekod.permarkahan.edit',
                'uses'      => 'Ppk\PermarkahanController@edit'
            ]);

            /*
             * Permohonan
             */

            Route::get('permohonan', [
                'as'        => 'ppk.rekod.permohonan',
                'uses'      => 'Ppk\PermohonanController@permohonan'
            ]);

            Route::post('permohonan', [
                'as'        => 'ppk.rekod.permohonan2',
                'uses'      => 'Ppk\PermohonanController@permohonan2'
            ]);

        });

    });

});
