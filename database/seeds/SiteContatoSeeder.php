<?php

use Illuminate\Database\Seeder;
use App\SiteContato;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   

        /*
        // Inserindo dados na tabela site_contatos
        // usando o Eloquent ORM
        // usando o método create
        $siteContato = new SiteContato();
        $siteContato->nome = 'Eliel Diniz';
        $siteContato->telefone = '(11) 99999-9999';
        $siteContato->email = 'elieldiniz1/@outlook.com';
        $siteContato->motivo_contato = '1';
        $siteContato->mensagem = 'Mensagem de teste';
        $siteContato->save();

        */

        factory(SiteContato::class, 100)->create();

        
    }
}
