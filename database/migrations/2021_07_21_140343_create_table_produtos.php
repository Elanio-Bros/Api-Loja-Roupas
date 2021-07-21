<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProdutos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id('codigo_produto')->unique();
            $table->string('categoria');
            $table->string('nome');
            $table->decimal('preço');
            $table->string('confecção');
            $table->timestamp('cadastrado_em');
            $table->string('tamanho', 3);
            $table->integer('quantidade_Produtos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
