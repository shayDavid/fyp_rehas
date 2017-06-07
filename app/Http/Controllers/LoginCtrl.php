<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class LoginCtrl extends Controller
{
    public function getHisNrpHome() {
        return view('HIS.nrp');
    }

    public function postLogin(Request $request) {
        if(!Auth::attempt(['loginID' => $request['username'], 'password' => $request['password']])) {
            return redirect()->back()->with(['fail' => 'Wrong Username or Password!']);
        }
        return redirect()->route('hisNrpHome');
    }

}
