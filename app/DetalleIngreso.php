<?php

namespace sisInventario;

use Illuminate\Database\Eloquent\Model;

class DetalleIngreso extends Model
{
    protected $table='orders';

    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable = [ 'rut','nombre','apellido','address','email','comuna','region','total','metodo','estado'
  
    ];
}
