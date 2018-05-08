<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paseo extends Model
{
    public $timestamps = false;
    protected $table = 'paseos';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'name', 'fecha', 'localizacion', 'latitud', 'longitud', 'telefono', 'website', 'descripcion', 'imagen', 'costo', 'categoria_id',
    ];
}