<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobberAlertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobber_alerts', function (Blueprint $table) {
            $table->id('jobber_alerts_id');

            $table->unsignedBigInteger('candidate_id');
            $table->foreign('candidate_id')->references('candidate_id')->on('candidate_user');
            
            $table->string('alert_category');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobber_alerts');
    }
}
