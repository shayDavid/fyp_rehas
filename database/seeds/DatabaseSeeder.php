<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(HISPatientSeeder::class);
        $this->call(HISHospitalSeeder::class);
        $this->call(HISDoctorSeeder::class);
        $this->call(HISLoginSeeder::class);
    }
}
