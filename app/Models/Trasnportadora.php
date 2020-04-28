<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trasnportadora extends Model
{
    protected $fillable = [
       'IDTransportadora', 'nomeConpanhia', 'telefone'
    ];
}
