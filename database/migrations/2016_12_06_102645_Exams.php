<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Exams extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams',function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject');
            $table->string('chapter')->default("N/A");
            $table->string('question');
            $table->string('opt1');
            $table->string('opt2');
            $table->string('opt3');
            $table->string('opt4');
            $table->string('explanation')->default("N/A");
            $table->integer('ans');
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
          Schema::dropIfExists('exams');
    }
}
