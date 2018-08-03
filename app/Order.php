<?php

namespace sisInventario;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user(){

    	return $this->belongTo('sisInventario\User');
    }
}
