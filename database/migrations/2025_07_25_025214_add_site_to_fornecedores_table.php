<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSiteToFornecedoresTable extends Migration
{
    public function up()
    {
        Schema::table('fornecedores', function (Blueprint $table) {
            $table->string('site', 150); // Apenas adiciona 'site'
        });
    }

    public function down()
    {
        Schema::table('fornecedores', function (Blueprint $table) {
            $table->dropColumn('site'); // Remove só 'site'
        });
    }
}
