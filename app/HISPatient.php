<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HISPatient extends Model
{
    public $timestamps = false;

    //changing primary key
    protected $table = 'h_i_s_patients';
    protected $primaryKey = 'pid';
    public $incrementing = false;
}
