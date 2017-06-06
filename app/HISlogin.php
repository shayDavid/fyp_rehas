<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HISlogin extends Model
{
    public $timestamps = false;

    //changing primary key
    protected $table = 'h_i_slogins';
    protected $primaryKey = 'loginID';
    public $incrementing = false;

}
