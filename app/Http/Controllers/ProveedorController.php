<?php

namespace sisInventario\Http\Controllers;

use Illuminate\Http\Request;
use sisInventario\Proveedor;
use sisInventario\Http\Requests\ProveedorFormRequest;
use Illuminate\Support\Facades\Redirect;
use DB;
class ProveedorController extends Controller
{
   public function __construct()
    {

    }
    public function index(Request $request)
    {
    	if($request)
    	{
    		$query=trim($request->get('searchText'));
    		$proveedor=DB::table('proveedor')
            ->where('nombre','LIKE','%'.$query.'%')
       		->orderBy('id','desc')
    		->paginate(7);
    		return view('compras.proveedor.index',["proveedores"=>$proveedor,"searchText"=>$query]);
    	}

    }
    public function create()
    {
    		return view("compras.proveedor.create");
    }
    public function store(ProveedorFormRequest $request)
    {
    	$proveedor=new Proveedor;
    	$proveedor->nombre=$request->get('nombre');
    	$proveedor->celular=$request->get('celular');
    	$proveedor->correo=$request->get('correo');
    	$proveedor->direccion=$request->get('direccion');
        $proveedor->save();
    	return Redirect::to('compras.proveedor');
    }
    public function show($id)
    {
        return view("compras.proveedor.show",["proveedor"=>Proveedor::findOrFail($id)]);
    }
    public function edit($id)
    {
    	return view("compras.proveedor.edit",["proveedor"=>Proveedor::findOrFail($id)]);
    }
    public function update(ProveedorFormRequest $request,$id)
    {   

    	$proveedor=Proveedor::findOrFail($id);
    	$proveedor->nombre=$request->get('nombre');
    	$proveedor->celular=$request->get('celular');
    	$proveedor->correo=$request->get('correo');
    	$proveedor->direccion=$request->get('direccion');
    	$proveedor->update();
    	return Redirect::to('compras/proveedor');

    }
    public function destroy($id){
        $proveedor=Proveedor::findOrFail($id);
        $proveedor>update();
        return Redirect::to('compras/proveedor');
    }
}