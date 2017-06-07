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

Route::get('/', function (){
    return view('index');
})->name('index');

Route::post('/his/login', [
    'uses' => 'LoginCtrl@postLogin',
    'as' => 'hisLogin'
]);

Route::group(['middleware' => ['auth']] , function(){

    //HIS routes
    Route::get('/his/nrp/home', [
        'uses' => 'LoginCtrl@getHisNrpHome',
        'as' => 'hisNrpHome'
    ]);

    Route::get('/his/rp/home', [
        'uses' => 'LoginCtrl@getHisRpHome',
        'as' => 'hisRpHome'
    ]);

    Route::get('/his/logout', [
       'uses' => 'LoginCtrl@hisLogout',
        'as' => 'hisLogout'
    ]);

    //ReHAS routes
    Route::get('/nrp/home', [
        'uses' => 'HISPatientCtrl@getHome',
        'as' => 'home'
    ]);

    Route::post('/nrp/patient/create', [
       'uses' => 'HISPatientCtrl@patientSearch',
        'as' => 'patientSearch'
    ]);

    Route::get('/nrp/view_referral', [
        'uses' => 'ReferralCtrl@index',
        'as' => 'non_referral_view'
    ]);

    Route::get('/nrp/create', function (){
        return view('non-referral.createReferralNull');
    })->name('create');

    Route::get('/referral/dashboard', function (){
        return view('referral.dashboard');
    })->name('dashboard');

    Route::get('/referral/received', function (){
        return view('referral.receivedReferrals');
    })->name('received');

    Route::get('/referral/open', function (){
        return view('referral.openReferral');
    })->name('view');

    Route::get('/HIS/nrp', function (){
        return view('HIS.nrp');
    })->name('nrp');

    Route::get('/HIS/rp', function (){
        return view('HIS.rp');
    })->name('rp');

    Route::get('/api/referrals', 'ReferralCtrl@index');
    Route::post('/api/create_referral', [
        'uses' => 'ReferralCtrl@store',
        'as' => 'create_referral'
    ]);
});
