<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiz_responses', function (Blueprint $table) {
            $table->id();
            $table->string('ip');
            $table->integer('question_one')->nullable();
            $table->integer('question_two')->nullable();
            $table->integer('question_three')->nullable();
            $table->integer('question_four')->nullable();
            $table->integer('question_fivea')->nullable();
            $table->integer('question_fiveb')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
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
        Schema::dropIfExists('quiz_responses');
    }
};
