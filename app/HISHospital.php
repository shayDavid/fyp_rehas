<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HISHospital extends Model
{
    public $timestamps = false;

    //changing primary key
    protected $table = 'h_i_s_hospitals';
    protected $primaryKey = 'hid';
    public $incrementing = false;

    public function doctors() {
        return $this->hasMany('App\HISDoctor');
    }
}
