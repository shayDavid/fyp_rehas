<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    public $timestamps = false;

    //changing primary key
    protected $table = 'doctors';
    protected $primaryKey = 'docid';
    public $incrementing = false;

    public function referrals() {
        return $this->hasMany('App\Referral');
    }

}
