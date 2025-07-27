<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;
class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        // inserinos dados na tabela fornecedores
        // usando o Eloquent ORM
        // usando o método create
        // usando o método save

        $fornecedor = new Fornecedor();

        $fornecedor->nome = 'Fornecedor 1';
        $fornecedor->site = 'www.fornecedor1.com';
        $fornecedor->uf = 'SP';
        $fornecedor->email = 'foenecedor@gmail.com';
        $fornecedor->save();

        // Usando o método create
        // array associativo

        Fornecedor::create([
            'nome' => 'Fornecedor 2',
            'site' => 'www.fornecedor2.com',
            'uf' => 'RJ',
            'email' => 'foenecedor@gmail.com'
        ]);

        // Usando o método insert
        // array associativo
        // Não usa o Eloquent ORM
        DB::table('fornecedores')->insert([
            'nome' => 'Fornecedor 3',
            'site' => 'www.fornecedor3.com',
            'uf' => 'MG',
            'email' => 'fonecedormg@gamil.com',
        ]);
        */

        factory(Fornecedor::class, 100)->create();
    }
}
