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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('subject');
            $table->integer('year');
            $table->char('season');

            $table->string('question_text');
            $table->string('question_img')->nullable();

            $table->string('optA');
            $table->string('optA_img')->nullable();

            $table->string('optB');
            $table->string('optB_img')->nullable();

            $table->string('optC');
            $table->string('optC_img')->nullable();

            $table->string('optD');
            $table->string('optD_img')->nullable();

            $table->char('correct_answer');
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
        Schema::dropIfExists('questions');
    }
};
