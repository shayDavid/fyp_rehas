<?php

namespace App\Http\Controllers;

use App\HISPatient;
use Illuminate\Http\Request;

use App\Http\Requests;

class HISPatientCtrl extends Controller
{
    public function getPatient() {
        $patients = HISPatient::all();
        return view('non-referral.index', ['patients' => $patients]);
    }
}
