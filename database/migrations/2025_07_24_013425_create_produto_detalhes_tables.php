<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutoDetalhesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_detalhes', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('produto_id');
            $table->float('comprimento', 8, 2);
            $table->float('largura', 8, 2);
            $table->float('altura', 8, 2);

            $table->timestamps();

            $table->foreign('produto_id')
                  ->references('id')->on('produto_detalhes')
                  ->onDelete('cascade');

            $table->unique('produto_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produto_detalhes');
    }
}
