<?php

use Illuminate\Database\Seeder;
use App\HISHospital;

class HISHospitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hospital = new HISHospital();
        $hospital->hid = "UDH-0391-0020";
        $hospital->name = "University of Dar es Salaam Dispensary";
        $hospital->address = "Kinondoni, Dar es Salaam";
        $hospital->ownership = "Public";
        $hospital->type = "Non-referral";
        $hospital->save();

        $hospital = new HISHospital();
        $hospital->hid = "MWH-0391-0001";
        $hospital->name = "Mwananyamala Hospital";
        $hospital->address = "Kinondoni, Dar es Salaam";
        $hospital->ownership = "Public";
        $hospital->type = "Non-referral";
        $hospital->save();

        $hospital = new HISHospital();
        $hospital->hid = "MUH-0391-0020";
        $hospital->name = "Muhimbili Hospital";
        $hospital->address = "Ilala, Dar es Salaam";
        $hospital->ownership = "Public";
        $hospital->type = "Referral";
        $hospital->save();
    }
}
