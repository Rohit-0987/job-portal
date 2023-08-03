<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id('jobs_id');
            $table->string('job_title');
            $table->string('job_img');
            $table->text('job_description');
            $table->string('industry');
            $table->string('job_type');
            $table->string('carrer_level');
            $table->string('experience');
            $table->string('qualification');
            $table->enum('gender',['A', 'M', 'F', 'O']);
            $table->date('deadline');
            $table->string('working_type');
            $table->string('country');
            $table->string('city');
            $table->string('address');
            $table->boolean('status');
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
        Schema::dropIfExists('jobs');
    }
}
