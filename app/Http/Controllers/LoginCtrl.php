<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class LoginCtrl extends Controller
{
    public function getHisNrpHome() {
        return view('HIS.nrp');
    }

    public function getHisRpHome() {
        return view('HIS.rp');
    }

    public function postLogin(Request $request) {
        if(!Auth::attempt(['loginID' => $request['username'], 'password' => $request['password']])) {
            return redirect()->back()->with(['fail' => 'Wrong Username or Password!']);
        } else {
            $title = DB::table('h_i_slogins')->where('loginID', $request['username'])->value('title');
            if($title == "NRP") {
                return redirect()->route('hisNrpHome');
            }
            return redirect()->route('hisRpHome');
        }
    }

    public function hisLogout() {
        Auth::logout();
        return redirect()->route('index');
    }

}
