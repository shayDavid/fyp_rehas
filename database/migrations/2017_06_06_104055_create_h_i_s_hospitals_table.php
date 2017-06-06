<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHISHospitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('h_i_s_hospitals', function (Blueprint $table) {
            $table->string('hid');
            $table->string('name');
            $table->string('address');
            $table->string('ownership');
            $table->string('type');
            $table->primary('hid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('h_i_s_hospitals');
    }
}
