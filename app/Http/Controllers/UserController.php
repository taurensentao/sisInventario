<?php

namespace sisInventario\Http\Controllers;
use sisInventario\Order;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {	
    	$orden=Order::all();
    	return view("perfil/index",['ordenes'=>$orden]);
    }
}
