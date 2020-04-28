<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{

    public $timestamps = false;
    protected $fillable = [
        'IDCliente', 'NomeCompanhia', 'NomeContato', 'TituloContato', 'Endereco','Cidade','Regiao','CEP', 'Pais', 'Telefone', 'Fax'
    ];
}
