<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medidas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('aluno_id')->nullable();
            $table->integer('braco_esquerdo_relaxado')->nullable();
            $table->string('braco_direito_relaxado')->nullable();
            $table->string('braco_esquerdo_contraido')->nullable();
            $table->string('braco_direito_contraido')->nullable();
            $table->string('coxa_medial_esquerda')->nullable();
            $table->string('coxa_medial_direita')->nullable();
            $table->string('panturrilha_esquerda')->nullable();
            $table->string('panturrilha_direita')->nullable();
            $table->string('abdomen')->nullable();
            $table->string('cintura')->nullable();
            $table->string('ombro')->nullable();
            $table->string('torax')->nullable();
            $table->string('quadril')->nullable();
            $table->string('peso')->nullable();
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
        Schema::dropIfExists('medidas');
    }
}
