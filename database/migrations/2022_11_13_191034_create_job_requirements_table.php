<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobRequirementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_requirements', function (Blueprint $table) {
            $table->id('job_requirements_id');
            
            $table->unsignedBigInteger('jobs_id');
            $table->foreign('jobs_id')->references('jobs_id')->on('jobs');

            $table->string('requirement');
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
        Schema::dropIfExists('job_requirements');
    }
}
