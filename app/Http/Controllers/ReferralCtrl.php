<?php

namespace App\Http\Controllers;

use App\Referral;
use Illuminate\Http\Request;
use DB;

class ReferralCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param null $rid
     * @return \Illuminate\Http\Response
     */
    public function index($rid = null)
    {
        if($rid == null) {
            $referrals = Referral::all();
            return response()->json($referrals);
        } else {
            $referral = Referral::findOrFail($rid);
            return response()->json($referral);
        }

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
        //generating rid
        $ridCount = DB::table('referrals')->count();
        $ridCount++;
        $ridVar = sprintf('%04d', $ridCount);
        $ridVar1 = date("my");
        $rid="RP-".$ridVar1."-".$ridVar;

        //getting input from the form
        $diagnosis = $request['diagnosis'];
        $issuedate = $request['date'];
        $treatmentGiven = $request['treatment_given'];
        $treatmentRecommended = $request['treatment_recommended'];
        $referralreason = $request['reason'];
        $investigation = $request['investigation'];
        $source = "Mwananyamala";
        $destination = $request['destination'];
        $status = "Not Accepted";

        //saving referral information in the database
        $ridOb = new Referral();
        $ridOb->rid = $rid;
        $ridOb->diagnosis = $diagnosis;
        $ridOb->issuedate = $issuedate;
        $ridOb->treatmentGiven = $treatmentGiven;
        $ridOb->treatmentRecommended = $treatmentRecommended;
        $ridOb->referralreason = $referralreason;
        $ridOb->investigation = $investigation;
        $ridOb->source = $source;
        $ridOb->destination = $destination;
        $ridOb->status = $status;
        $ridOb->save();
        return response('Created', 201);
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
     * @param  int  $rid
     * @return \Illuminate\Http\Response
     */
    public function destroy($rid)
    {
        Referral::destroy($rid);
        return response('Deleted', 200);
    }
}
