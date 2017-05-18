<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->string('docid');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->date('dob');
            $table->string('gender');
            $table->string('contact');
            $table->string('address');
            $table->string('specialization');
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
        Schema::drop('doctors');
    }
}
