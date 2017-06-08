<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public $timestamps = false;

    //changing primary key
    protected $table = 'patients';
    protected $primaryKey = 'pid';
    public $incrementing = false;

    public function referral() {
        return $this->hasMany('App\Referral');
    }
}
