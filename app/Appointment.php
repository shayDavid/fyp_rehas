<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    public $timestamps = false;

    //changing primary key
    protected $table = 'appointments';
    protected $primaryKey = 'aid';
    public $incrementing = false;

    public function referral() {
        return $this->belongsTo('App\Referral');
    }
}
