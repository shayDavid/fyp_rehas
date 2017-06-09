<?php

namespace App\Listeners;

use App\Events\SetAppointment;
use DB;

class ChangeReferralStatus
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  SetAppointment  $event
     * @return void
     */
    public function handle(SetAppointment $event)
    {
        $refId = $event->rid;
        DB::table('referrals')->where('rid', $refId)->update(['status' => 'Accepted']);
    }
}
