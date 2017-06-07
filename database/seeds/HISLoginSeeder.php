<?php

use Illuminate\Database\Seeder;
use App\HISlogin;

class HISLoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hospital = new HISlogin();
        $hospital->loginID = "MUD-0510-0100";
        $password = bcrypt('Don');
        $hospital->password = $password;
        $hospital->title = "RP";
        $hospital->save();

        $hospital = new HISlogin();
        $hospital->loginID = "UDD-0510-0020";
        $password = bcrypt('Leon');
        $hospital->password = $password;
        $hospital->title = "NRP";
        $hospital->save();

        $hospital = new HISlogin();
        $hospital->loginID = "MWD-0510-0010";
        $password = bcrypt('Shay');
        $hospital->password = $password;
        $hospital->title = "NRP";
        $hospital->save();

    }
}
