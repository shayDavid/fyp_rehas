<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHISDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('h_i_s_doctors', function (Blueprint $table) {
            $table->string('docid');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->date('dob');
            $table->string('gender');
            $table->string('contact');
            $table->string('address');
            $table->string('specialization');
            $table->string('hospitalID');
            $table->foreign('hospitalID')->references('hid')->on('h_i_s_hospitals');
            $table->primary('docid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('h_i_s_doctors');
    }
}
