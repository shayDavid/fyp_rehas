<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
    public $timestamps = false;

    //change of primary key
    protected $table = 'referrals';
    protected $primaryKey = 'rid';
    protected $fillable = ['rid', 'diagnosis', 'issuedate', 'referralreason', 'source', 'destination', 'status'];
    public $incrementing = false;

    public function doctor() {
        return $this->belongsTo('App\Doctor');
    }

    public function hospital() {
        return $this->belongsTo('App\Hospital');
    }

    public function patient() {
        return $this->belongsTo('App\Patient');
    }

    public function appointment() {
        return $this->hasOne('App\Appointment');
    }
}
