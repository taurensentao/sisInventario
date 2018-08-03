<?php

namespace sisInventario;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table='persona';

    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable = [
	
	'nombre','apellido','celular','correo','tipo_persona','direccion'
    ];  
}
