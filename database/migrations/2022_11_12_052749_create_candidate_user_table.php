<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_user', function (Blueprint $table) {
            $table->id('candidate_id');
            $table->string('fname');
            $table->string('lname');
            $table->string('username');
            $table->string('email');
            $table->string('phone');
            $table->string('password');
            
            $table->string('experience');
            $table->string('exp_salary');
            $table->string('education');
            $table->string('age');
            $table->string('language');
            $table->text('about_info');

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
        Schema::dropIfExists('candidate_user');
    }
}
