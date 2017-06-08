<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HISPatientCtrl extends Controller
{
    public function getHome() {
        return view('non-referral.index');
    }

    public function patientSearch(Request $request) {
        $patientID = $request['search'];
        $patient = DB::table('h_i_s_patients')->where('pid', $patientID)->get();
        $referralHospitals = DB::table('h_i_s_hospitals')->where('type', 'Referral')->get();
        if(count($patient)==0) {
            return redirect()->back()->with(['msg' => 'No result found']);
        }
        return view('non-referral.createReferral', ['patient' => $patient, 'referralHospitals' => $referralHospitals]);
    }

}
