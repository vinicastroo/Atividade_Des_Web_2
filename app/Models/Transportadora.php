<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transportadora extends Model
{
    public $timestamps = false;

    protected $fillable = [
       'IDTransportadora', 'NomeConpanhia', 'Telefone'
    ];
}
