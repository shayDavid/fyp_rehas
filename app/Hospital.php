<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    public $timestamps = false;

    //changing primary key
    protected $table = 'hospitals';
    protected $primaryKey = 'hid';
    public $incrementing = false;

    public function doctors() {
        return $this->hasMany('App\Doctor');
    }

}
