<?php

namespace App\Http\Controllers;

use App\Referral;
use Illuminate\Http\Request;

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
        Referral::create($request->all());
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
