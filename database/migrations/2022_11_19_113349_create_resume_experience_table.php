<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumeExperienceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resume_experience', function (Blueprint $table) {
            $table->id('resume_experience_id');

            $table->unsignedBigInteger('resume_id');
            $table->foreign('resume_id')->references('resume_id')->on('resume');

            $table->string('job_title');
            $table->string('designation');
            $table->date('start_date');
            $table->date('end_date');
            $table->text('note');
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
        Schema::dropIfExists('resume_experience');
    }
}
