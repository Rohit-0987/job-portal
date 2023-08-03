<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resume', function (Blueprint $table) {
            $table->id('resume_id');

            $table->unsignedBigInteger('candidate_id');
            $table->foreign('candidate_id')->references('candidate_id')->on('candidate_user');
            
            $table->string('name');
            $table->string('job_category');
            $table->string('professional_title');
            $table->string('email');
            $table->text('resume_content');
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
        Schema::dropIfExists('resume');
    }
}
