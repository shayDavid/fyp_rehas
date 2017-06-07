<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class HISlogin extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    public $timestamps = false;

    //changing primary key
    protected $table = 'h_i_slogins';
    protected $primaryKey = 'loginID';
    public $incrementing = false;

    use Authenticatable;

}
