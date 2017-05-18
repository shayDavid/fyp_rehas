<?php

namespace App\Http\Controllers;

use App\Referral;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ReferralCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Referral::all();

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
     */
    public function store() {
        $input = Input::json();
        $referral = new Referral();
        $referral->rid = $input->get('rid');
        $referral->diagnosis = $input->get('diagnosis');
        $referral->issuedate = $input->get('issuedate');
        $referral->referralreason = $input->get('referralreason');
        $referral->source = $input->get('source');
        $referral->destination = $input->get('destination');
        $referral->status = $input->get('status');
        $referral->save();
        return response('Created', 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($rid)
    {
        return Referral::findOrFail($rid);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
        //
    }
}
