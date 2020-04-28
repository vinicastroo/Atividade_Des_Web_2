<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{

    protected $fillable = [
        'idCliente', 'nomeCompanhia', 'nomeContato', 'tituloContato', 'endereco','cidade','regiao','cep', 'pais', 'telefone', 'fax'
    ];
}
