<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobKeySkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_key_skills', function (Blueprint $table) {
            $table->id('job_key_skills_id');
            
            $table->unsignedBigInteger('jobs_id');
            $table->foreign('jobs_id')->references('jobs_id')->on('jobs');
            
            $table->string('skill');
            
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
        Schema::dropIfExists('job_key_skills');
    }
}
