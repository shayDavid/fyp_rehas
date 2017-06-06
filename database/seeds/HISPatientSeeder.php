<?php

use Illuminate\Database\Seeder;
use App\HISPatient;

class HISPatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $patient = new HISPatient();
        $patient->pid = "MWP-0510-0001";
        $patient->firstname = "Daniela";
        $patient->middlename = "Godson";
        $patient->lastname = "Mjema";
        $patient->dob = "1993-03-13";
        $patient->gender = "Female";
        $patient->contact = "0719294587";
        $patient->address = "Ilala, Dar es Salaam";
        $patient->save();

        $patient = new HISPatient();
        $patient->pid = "MWP-0310-0010";
        $patient->firstname = "Dominick";
        $patient->middlename = "Edgar";
        $patient->lastname = "Libson";
        $patient->dob = "1999-03-13";
        $patient->gender = "Male";
        $patient->contact = "0719294507";
        $patient->address = "Kinondoni, Dar es Salaam";
        $patient->save();

        $patient = new HISPatient();
        $patient->pid = "UDP-0510-0100";
        $patient->firstname = "Daniel";
        $patient->middlename = "Godfrey";
        $patient->lastname = "Mason";
        $patient->dob = "1993-08-13";
        $patient->gender = "Male";
        $patient->contact = "0719293587";
        $patient->address = "Masaki, Dar es Salaam";
        $patient->save();

        $patient = new HISPatient();
        $patient->pid = "UDP-0510-0200";
        $patient->firstname = "Felister";
        $patient->middlename = "Libori";
        $patient->lastname = "Denis";
        $patient->dob = "1997-03-13";
        $patient->gender = "Female";
        $patient->contact = "0764294587";
        $patient->address = "Masaki, Dar es Salaam";
        $patient->save();
    }
}
