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
        $hisuser = new HISlogin();
        $hisuser->loginID = "MUD-0510-0100";
        $hisuser->password = bcrypt('Don');;
        $hisuser->title = "RP";
        $hisuser->save();

        $hisuser = new HISlogin();
        $hisuser->loginID = "UDD-0510-0020";
        $hisuser->password = bcrypt('Leon');
        $hisuser->title = "NRP";
        $hisuser->save();

        $hisuser = new HISlogin();
        $hisuser->loginID = "MWD-0510-0010";
        $hisuser->password = bcrypt('Shay');
        $hisuser->title = "NRP";
        $hisuser->save();

    }
}
