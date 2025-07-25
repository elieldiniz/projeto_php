<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteContatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
{
    Schema::create('site_contatos', function (Blueprint $table) {
        $table->id(); // id autoincrement primária
        $table->string('nome', 50);
        $table->string('email', 80);
        $table->string('telefone', 20);
        $table->string('motivo_contato'); // apenas integer, sem tamanho
        $table->text('mensagem'); // text não recebe tamanho
        $table->timestamps(); // geralmente no fim
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_contatos');
    }
}
