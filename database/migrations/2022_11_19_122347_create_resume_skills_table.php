<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumeSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resume_skills', function (Blueprint $table) {
            $table->id('resume_skills_id');

            $table->unsignedBigInteger('resume_id');
            $table->foreign('resume_id')->references('resume_id')->on('resume');
            
            $table->string('skill');
            $table->string('percentage');
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
        Schema::dropIfExists('resume_skills');
    }
}
