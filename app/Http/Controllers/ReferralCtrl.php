<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Referral;
use App\Doctor;
use App\Hospital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class ReferralCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $referrals = Referral::all();
            $patientName = array();
            if(count($referrals) > 0) {
                for ($i = 0; $i < count($referrals); $i++) {
                    $patientID = $referrals[$i]->patientID;
                    $patient = DB::table('patients')->where('pid', $patientID)->get();
                    $patientName[$i] = $patient[0]->firstname . " " . $patient[0]->lastname;
                }
            }

            return view('non-referral.viewReferral', ['referrals' => $referrals, 'patientName' => $patientName]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function store(Request $request) {
        //Doctor payload
        $doctorID = Auth::user()->loginID;
        $doctorPayLoad = DB::table('h_i_s_doctors')->where('docid', $doctorID)->get();

        $doctorOb = new Doctor();
        $doctorExist = DB::table('doctors')->where('docid', $doctorID)->get();


        //Hospital payload
        $hospitalID = $doctorPayLoad[0]->hospitalID;
        $hospitalPayLoad = DB::table('h_i_s_hospitals')->where('hid', $hospitalID)->get();

        $hospitalOb = new Hospital();
        $hospitalExist = DB::table('hospitals')->where('hid', $hospitalID)->get();

        if(count($hospitalExist) < 1) {
            $hospitalOb->hid = $hospitalPayLoad[0]->hid;
            $hospitalOb->name = $hospitalPayLoad[0]->name;
            $hospitalOb->address = $hospitalPayLoad[0]->address;
            $hospitalOb->ownership = $hospitalPayLoad[0]->ownership;
            $hospitalOb->type = $hospitalPayLoad[0]->type;
            $hospitalOb->save();
        }

        if(count($doctorExist) < 1) {
            $doctorOb->docid = $doctorPayLoad[0]->docid;
            $doctorOb->firstname = $doctorPayLoad[0]->firstname;
            $doctorOb->middlename = $doctorPayLoad[0]->middlename;
            $doctorOb->lastname = $doctorPayLoad[0]->lastname;
            $doctorOb->dob = $doctorPayLoad[0]->dob;
            $doctorOb->gender = $doctorPayLoad[0]->gender;
            $doctorOb->address = $doctorPayLoad[0]->address;
            $doctorOb->contact = $doctorPayLoad[0]->contact;
            $doctorOb->specialization = $doctorPayLoad[0]->specialization;
            $doctorOb->hospitalID = $doctorPayLoad[0]->hospitalID;
            $doctorOb->save();
        }

        //Saving patient's demographic info
        $patient = new Patient();
        $pidExist = DB::table('patients')->where('pid', $request['pid'])->get();
        if(count($pidExist) < 1) {
            $patient->pid = $request['pid'];
            $patient->firstname = $request['firstname'];
            $patient->middlename = $request['middlename'];
            $patient->lastname = $request['lastname'];
            $patient->gender = $request['gender'];
            $patient->dob = $request['dob'];
            $patient->contact = $request['contact'];
            $patient->address = $request['address'];
            $patient->save();
        }

        //generating rid
        $ridCount = DB::table('referrals')->count();
        $ridCount++;
        $ridVar = sprintf('%04d', $ridCount);
        $ridVar1 = date("my");
        $rid="RP-".$ridVar1."-".$ridVar;

        $source = $hospitalPayLoad[0]->name;
        $status = "Not Accepted";

        //saving referral information in the database
        $ridOb = new Referral();
        $ridOb->rid = $rid;
        $ridOb->diagnosis = $request['diagnosis'];
        $ridOb->issuedate = $request['date'];
        $ridOb->treatmentGiven = $request['treatment_given'];
        $ridOb->treatmentRecommended = $request['treatment_recommended'];
        $ridOb->referralreason = $request['reason'];
        $ridOb->investigation = $request['investigation'];
        $ridOb->source = $source;
        $ridOb->destination = $request['destination'];
        $ridOb->status = $status;
        $ridOb->patientID = $request['pid'];
        $ridOb->docID = $doctorID;
        $ridOb->save();

        $request->session()->flash('success', 'Referral has been created successfully!');
        return view('non-referral.createReferralNull');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $rid
     * @return \Illuminate\Http\Response
     */
    public function edit($rid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $rid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $rid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
