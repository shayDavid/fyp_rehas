<?php

use Illuminate\Database\Seeder;
use App\HISDoctor;

class HISDoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $doctor = new HISDoctor();
        $doctor->docid = "MWD-0510-0001";
        $doctor->firstname = "Derick";
        $doctor->middlename = "Godson";
        $doctor->lastname = "Mjema";
        $doctor->dob = "1993-03-13";
        $doctor->gender = "Male";
        $doctor->contact = "0719234587";
        $doctor->address = "Ilala, Dar es Salaam";
        $doctor->specialization = "Medical Officer";
        $doctor->hospitalID = "MWH-0391-0001";
        $doctor->save();

        $doctor = new HISDoctor();
        $doctor->docid = "MWD-0510-0010";
        $doctor->firstname = "Shanyangi";
        $doctor->middlename = "David";
        $doctor->lastname = "Shay";
        $doctor->dob = "1992-03-13";
        $doctor->gender = "Male";
        $doctor->contact = "0719234565";
        $doctor->address = "Kinondoni, Dar es Salaam";
        $doctor->specialization = "Colon and rectal surgeon";
        $doctor->hospitalID = "MWH-0391-0001";
        $doctor->save();

        $doctor = new HISDoctor();
        $doctor->docid = "UDD-0510-0020";
        $doctor->firstname = "Cheryl";
        $doctor->middlename = "Damian";
        $doctor->lastname = "Leon";
        $doctor->dob = "1991-03-17";
        $doctor->gender = "Female";
        $doctor->contact = "0719254587";
        $doctor->address = "Kinondoni, Dar es Salaam";
        $doctor->specialization = "Cardiologist";
        $doctor->hospitalID = "UDH-0391-0020";
        $doctor->save();

        $doctor = new HISDoctor();
        $doctor->docid = "MUD-0510-0100";
        $doctor->firstname = "Aneth";
        $doctor->middlename = "Nemesy";
        $doctor->lastname = "Don";
        $doctor->dob = "1994-07-13";
        $doctor->gender = "Female";
        $doctor->contact = "0718234587";
        $doctor->address = "Kigamboni, Dar es Salaam";
        $doctor->specialization = "Cardiovascular Surgeon";
        $doctor->hospitalID = "MUH-0391-0020";
        $doctor->save();

        $doctor = new HISDoctor();
        $doctor->docid = "MUD-0510-0200";
        $doctor->firstname = "James";
        $doctor->middlename = "Nemesy";
        $doctor->lastname = "Daniel";
        $doctor->dob = "1994-07-13";
        $doctor->gender = "Male";
        $doctor->contact = "0718230587";
        $doctor->address = "Kigamboni, Dar es Salaam";
        $doctor->specialization = "Cardiovascular Surgeon";
        $doctor->hospitalID = "MUH-0391-0020";
        $doctor->save();

        $doctor = new HISDoctor();
        $doctor->docid = "KAD-0510-0200";
        $doctor->firstname = "John";
        $doctor->middlename = "Nemesy";
        $doctor->lastname = "Doe";
        $doctor->dob = "1994-07-19";
        $doctor->gender = "Male";
        $doctor->contact = "0715230587";
        $doctor->address = "Kigamboni, Dar es Salaam";
        $doctor->specialization = "Cardiovascular Surgeon";
        $doctor->hospitalID = "KAH-0391-0200";
        $doctor->save();
    }
}
