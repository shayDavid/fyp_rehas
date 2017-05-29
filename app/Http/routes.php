<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']] , function(){

    Route::get('/', function () {
        return view('index');
    });

    Route::get('view', function (){
        return view('non-referral.viewReferral');
    });

    Route::get('referral', function (){
        return view('non-referral.referralForm');
    });


    Route::get('admin', function (){
        return view('admin.admin');
    });

    Route::get('register', function (){
        return view('admin.registration');
    });

    /*Route::get('hospital', function (){
        return view('admin.registeredHospital');
    });*/
});


Route::get('/api/referrals', 'ReferralCtrl@index');
Route::get('/api/referrals/{rid}', 'ReferralCtrl@show');
Route::post('/api/create_referral', 'ReferralCtrl@store');