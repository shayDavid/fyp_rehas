<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HISDoctor extends Model
{
    public $timestamps = false;

    //changing primary key
    protected $table = 'h_i_s_doctors';
    protected $primaryKey = 'docid';
    public $incrementing = false;

    public function hospital() {
        return $this->belongsTo('App\HISHospital');
    }

}
