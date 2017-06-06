<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referrals', function (Blueprint $table) {
            $table->string('rid');
            $table->text('diagnosis');
            $table->date('issuedate');
            $table->text('treatmentGiven');
            $table->text('treatmentRecommended');
            $table->string('referralreason');
            $table->text('investigation');
            $table->string('source');
            $table->string('destination');
            $table->string('status');
            $table->string('patientID');
            $table->foreign('patientID')->references('pid')->on('patients');
            $table->string('docID');
            $table->foreign('docID')->references('docid')->on('doctors');
            $table->primary('rid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('referrals');
    }
}
