<?php

namespace sisInventario;

use Illuminate\Database\Eloquent\Model;

class Panel extends Model
{
    protected $table='panel';

    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable = [
    'nombre',
    'descripcion',
    'imagen',
    'condicion'
 
   
  
    ];

}
