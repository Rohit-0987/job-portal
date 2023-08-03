<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id('job_applications_id');
            
            $table->unsignedBigInteger('candidate_id');
            $table->foreign('candidate_id')->references('candidate_id')->on('candidate_user');

            $table->unsignedBigInteger('jobs_id');
            $table->foreign('jobs_id')->references('jobs_id')->on('jobs');

            $table->boolean('bookmark');
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
        Schema::dropIfExists('job_applications');
    }
}
