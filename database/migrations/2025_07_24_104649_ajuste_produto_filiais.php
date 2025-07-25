<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AjusteProdutoFiliais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Corrigido "schema" para "Schema" e "timestamp()" para "timestamps()"
        Schema::create('filiais', function (Blueprint $table) {
            $table->id();
            $table->string('filial', 30);
            $table->timestamps(); // corrige "timestamp()" para "timestamps()"
        });

        // Corrigido "schema" para "Schema" e nome correto da tabela associativa
        Schema::create('produtos_tables_filiais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('filial_id');
            $table->unsignedBigInteger('produto_id');
            $table->decimal('preco_venda', 8, 2);
            $table->decimal('estoque_minimo', 8, 2);
            $table->decimal('estoque_maximo', 8, 2);
            $table->timestamps(); // corrigido "timestamp()" para "timestamps()"

            // Relacionamentos
            $table->foreign('filial_id')->references('id')->on('filiais');
            $table->foreign('produto_id')->references('id')->on('produtos_tables');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produtos_tables', function (Blueprint $table) {
            $table->decimal('preco_venda', 8, 2);
            $table->decimal('estoque_minimo', );
            $table->decimal('estoque_maximo',);
        });

        Schema::dropIfExists('produtos_tables_filiais');
        Schema::dropIfExists('filiais');
    }
}
