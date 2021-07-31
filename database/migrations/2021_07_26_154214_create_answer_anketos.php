<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswerAnketos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_anketos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('answer_id');
            $table->integer('anketo_id');
            $table->integer('point');
            $table->timestamps();

            $table->foreign('answer_id')->references('id')->on('answers')->onDelete('cascade');
//            $table->foreign('anketo_id')->references('id')->on('anketos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answer_anketos');
    }
}
