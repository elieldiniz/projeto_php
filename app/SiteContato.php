<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteContato extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'site_contatos';
    protected $fillable = [
        'nome',
        'telefone',
        'email',
        'motivo_contatos_id',
        'mensagem',
    ];
}
