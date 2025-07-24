<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AjusteProdutosFiliais extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('filiais')) {
            Schema::create('filiais', function (Blueprint $table) {
                $table->id();
                $table->string('filial', 30);
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('produto_filiais')) {
            Schema::create('produto_filiais', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('filial_id');
                $table->unsignedBigInteger('produto_id');
                $table->decimal('preco_venda', 8, 2);
                $table->integer('estoque_minimo');
                $table->integer('estoque_maximo');
                $table->timestamps();

                $table->foreign('filial_id')->references('id')->on('filiais')->onDelete('cascade');
                $table->foreign('produto_id')->references('id')->on('produtos')->onDelete('cascade');
            });
        }

        Schema::table('produtos', function (Blueprint $table) {
            if (Schema::hasColumn('produtos', 'preco_venda')) {
                $table->dropColumn('preco_venda');
            }
            if (Schema::hasColumn('produtos', 'estoque_minimo')) {
                $table->dropColumn('estoque_minimo');
            }
            if (Schema::hasColumn('produtos', 'estoque_maximo')) {
                $table->dropColumn('estoque_maximo');
            }
        });
    }

    public function down()
    {
        Schema::table('produtos', function (Blueprint $table) {
            $table->decimal('preco_venda', 8, 2)->nullable();
            $table->integer('estoque_minimo')->nullable();
            $table->integer('estoque_maximo')->nullable();
        });

        Schema::dropIfExists('produto_filiais');
        Schema::dropIfExists('filiais');
    }
}