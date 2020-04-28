<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transportadora extends Model
{
    protected $fillable = [
       'IDTransportadora', 'nomeConpanhia', 'telefone'
    ];
}
