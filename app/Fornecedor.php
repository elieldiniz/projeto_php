<?php
//ORM ELOQUENT
namespace App;

use Illuminate\Database\Eloquent\Model;

//ja fornecedor fica errado essa tabela nao exitiria ficaria fornecedors 
//prem paraajusra podemos criar protected $table = 'fornecedores';
class Fornecedor extends Model
{
    
    //definindo o nome da tabela
    //isso e importante porque o laravel por padrao procura a tabela no plural
    //e no singular seria fornecedor
    //mas no caso de fornecedor o plural e igual ao singular
    //entao precisamos definir o nome da tabela
    protected $table = 'fornecedores';




    //colunas que podem ser preenchidas
    //se nao colocar isso o laravel nao deixa inserir dados
    //isso previne que sejam inseridos dados que nao sao para serem inseridos
    //exemplo: id, created_at, updated_at
    protected $fillable = [
        'nome', 'site', 'uf', 'email',
    ];

    
}
