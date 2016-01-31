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

    Route::get('/home', 'HomeController@index');

    /*
     *                  ADMIN
     */
    Route::group(['prefix' => 'admin'], function() {

        Route::group(['prefix' => 'preset'], function() {

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

        });

    });



});
