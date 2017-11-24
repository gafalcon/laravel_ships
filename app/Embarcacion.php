<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Embarcacion extends Model
{
    protected $table = "Embarcacion";
    protected $fillable = ["nombre", "tipo", "capacidad", "dimensiones", "codigo_barco"];
    //
}
