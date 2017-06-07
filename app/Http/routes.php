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


    Route::get('/nrp/home', function () {
        return view('non-referral.index');
    })->name('home');

    Route::get('/nrp/view_referral', [
        'uses' => 'ReferralCtrl@index',
        'as' => 'non_referral_view'
    ]);

    Route::get('/nrp/create', function (){
        return view('non-referral.createReferral');
    })->name('create');


    Route::get('/admin/home', function (){
        return view('admin.admin');
    })->name('admin');

    Route::get('/admin/register', function (){
        return view('admin.registration');
    })->name('register');
    
    Route::get('/admin/hospital', function (){
        return view('admin.viewRegisteredHospitals');
    })->name('hospital');

    Route::get('/admin/doctor', function (){
        return view('admin.doctor');
    })->name('doctor');

    Route::get('/admin/patient', function (){
        return view('admin.patient');
    })->name('patient');
    
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
});


Route::get('/api/referrals', 'ReferralCtrl@index');
Route::post('/api/create_referral', [
    'uses' => 'ReferralCtrl@store',
    'as' => 'create_referral'
]);
Route::delete('/api/delete_referral/{rid}', 'ReferralCtrl@destroy');