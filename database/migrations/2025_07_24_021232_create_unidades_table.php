<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadesTable extends Migration
{
    public function up()
    {
        // Cria a tabela unidades
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->string('unidade', 5);
            $table->string('descricao', 30); // corrigido text → string
            $table->timestamps();
        });

        // Adiciona chave estrangeira à produtos_tables
        Schema::table('produtos_tables', function (Blueprint $table) {
            $table->unsignedBigInteger('unidade_id')->after('id');
            $table->foreign('unidade_id')->references('id')->on('unidades');
        });

        // Adiciona chave estrangeira à produto_detalhes
        Schema::table('produto_detalhes', function (Blueprint $table) {
            $table->unsignedBigInteger('unidade_id')->after('produto_id');
            $table->foreign('unidade_id')->references('id')->on('unidades');
        });
    }

    public function down()
    {
        // Remove chave estrangeira de produto_detalhes
        Schema::table('produto_detalhes', function (Blueprint $table) {
            $table->dropForeign(['unidade_id']);
            $table->dropColumn('unidade_id');
        });

        // Remove chave estrangeira de produtos_tables
        Schema::table('produtos_tables', function (Blueprint $table) {
            $table->dropForeign(['unidade_id']);
            $table->dropColumn('unidade_id');
        });

        Schema::dropIfExists('unidades');
    }
}
