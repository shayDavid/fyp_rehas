<?php

namespace App\Http\Controllers;

use App\Appointment;
use Illuminate\Http\Request;
use DB;

class SetAppointmentCtrl extends Controller {

    public function setAppointment(Request $request) {

        //generating aid
        $aidCount = DB::table('appointments')->count();
        $aidCount++;
        $aidVar = sprintf('%04d', $aidCount);
        $aidVar1 = date("my");
        $aid="RA-".$aidVar1."-".$aidVar;

        $referralIDExist = DB::table('appointments')->where('referralID', $request['rid']);

        if(count($referralIDExist) > 0) {
            $request->session()->flash('fail', 'Appointment for this referral has been set already!');
            return redirect()->route('referral_view');
        }
        //setting appointment
        $aidOb = new Appointment();
        $aidOb->aid = $aid;
        $aidOb->appointmentdate = $request['date'];
        $aidOb->referralID = $request['rid'];
        $aidOb->save();

        $request->session()->flash('success', 'Appointment has been set successfully!');
        return redirect()->route('referral_view');
    }

}
