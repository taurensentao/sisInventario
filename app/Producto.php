<?php

namespace sisInventario;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table='producto';

    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable = [
    
    'nombre',
    'descripcion',
    'imagen',
    'tamano',
    'precio',
    'codigo',
    'visible',
    'categoria_id'
    ];

}
