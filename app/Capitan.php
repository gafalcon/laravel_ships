<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Capitan extends Model
{
    //
    protected $table = "Capitan";
    protected $fillable = ["cedula", "fecha_nacimiento", "name"];
}
