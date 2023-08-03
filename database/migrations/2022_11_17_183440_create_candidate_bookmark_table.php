<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidateBookmarkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_bookmark', function (Blueprint $table) {
            $table->id('candidate_bookmark_id');
            $table->unsignedBigInteger('job_applications_id');
            $table->foreign('job_applications_id')->references('job_applications_id')->on('job_applications');

            $table->unsignedBigInteger('candidate_id');
            $table->foreign('candidate_id')->references('candidate_id')->on('candidate_user');
            
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
        Schema::dropIfExists('candidate_bookmark');
    }
}
