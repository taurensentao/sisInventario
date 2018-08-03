<?php

namespace sisInventario;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table='categoria';

    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable = [
	'nombre',
    'descripcion',
 	'id',

    ]; 
}
