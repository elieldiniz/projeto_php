<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSiteToFornecedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

public function up()
{
    Schema::table('fornecedores', function (Blueprint $table) {
        $table->string('site', 150)->after('nome')->nullable();
    });
}

public function down()
{
    Schema::table('fornecedores', function (Blueprint $table) {
        $table->dropColumn('site');
    });
}

}
