<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDobrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dobras', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('aluno_id');
            $table->string('subescapular');
            $table->string('tricipital');
            $table->string('peitoral');
            $table->string('axilar_media');
            $table->string('abdominal');
            $table->string('coxa');
            $table->string('supra_iliaca');
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
        Schema::dropIfExists('dobras');
    }
}
