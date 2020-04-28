<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Territorio extends Model
{

    public $timestamps = false;

    protected $fillable = [
        'IDTerritorio', 'DescricaoTerritorio', 'IDRegiao'
     ];
}
