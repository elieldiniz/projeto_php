<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterFornecedorNovasColunas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::table('fornecedores', function (Blueprint $table) {
            $table->string('uf',2);
            $table->string('email', 100)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
     Schema::table('fornecedores', function (Blueprint $table) {
            $table->dropColumn(['uf', 'email']);
        });
    }
}