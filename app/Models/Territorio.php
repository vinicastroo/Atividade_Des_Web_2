<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Territorio extends Model
{
    protected $fillable = [
        'IDTerritorio', 'DescricaoTerritorio', 'IDRegiao'
     ];
}
