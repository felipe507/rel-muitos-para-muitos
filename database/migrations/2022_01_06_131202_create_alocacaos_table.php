<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlocacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alocacoes', function (Blueprint $table) {
            $table->integer('desenvolvedor_id')->unsigned();
            $table->foreign('desenvolvedor_id')->references('id')->on('desenvolvedores');
            $table->integer('projeto_id')->unsigned();
            $table->foreign('projeto_id')->references('id')->on('projetos');
            $table->primary(['projeto_id', 'desenvolvedor_id']);
            $table->integer('horas_semanais');
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
        Schema::dropIfExists('alocacoes');
    }
}
