<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableHistorico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historico', function (Blueprint $table) {
            $table->id();
            $table->foreignId('criado_por')->references('id_usuario')->on('usuarios');
            $table->foreignId('ref_codigo_produto')->references('codigo_produto')->on('produtos');
            $table->string('modificação');
            $table->integer('quantidade');
            $table->timestamp('cadastrado_em');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historico');
    }
}
