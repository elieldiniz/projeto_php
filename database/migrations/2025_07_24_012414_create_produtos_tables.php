<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
  public function up()
{
    Schema::create('produtos_tables', function (Blueprint $table) {
        $table->id();
        $table->string('nome', 100);
        $table->text('descricao')->nullable(); // Corrigido "nullble" para "nullable"
        $table->integer('peso')->nullable(); // Corrigido "interger" para "integer" e removido valor 100 que é inválido
        $table->float('preco_venda', 8, 2)->default(0.1);
        $table->integer('estoque_minimo')->default(0); // Corrigido linha incorreta e valor default ajustado
        $table->integer('estoque_maximo');
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
        Schema::dropIfExists('produtos_tables');
    }
}
