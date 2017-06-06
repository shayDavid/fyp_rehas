<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
    public $timestamps = false;

    //change of primary key
    protected $table = 'referrals';
    protected $primaryKey = 'rid';
    public $incrementing = false;

    public function doctor() {
        return $this->belongsTo('App\Doctor');
    }

    public function patient() {
        return $this->belongsTo('App\Patient');
    }

    public function appointment() {
        return $this->belongsTo('App\Appointment');
    }
}
