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
        return view('actions.viewReferral');
    });

    Route::get('referral', function (){
        return view('actions.referralForm');
    });


    Route::get('admin', function (){
        return view('actions.admin');
    });

    Route::get('register', function (){
        return view('actions.registration');
    });

    Route::get('hospital', function (){
        return view('actions.registeredHospital');
    });
});


Route::get('/api/referrals/{rid?}', 'ReferralCtrl@index');
Route::post('/api/create_referral', 'ReferralCtrl@store');
Route::delete('/api/delete_referral/{rid}', 'ReferralCtrl@destroy');