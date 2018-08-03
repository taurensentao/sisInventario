<?php

namespace sisInventario\Http\Controllers;

use Illuminate\Http\Request;
use sisInventario\Producto;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $producto = Producto::latest()
         ->take(6)
         ->get();
        return view('home',['productos'=>$producto]);
    }
}
