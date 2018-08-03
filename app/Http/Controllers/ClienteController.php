<?php

namespace sisInventario\Http\Controllers;

use Illuminate\Http\Request;

use sisInventario\Persona;
use sisInventario\Http\Requests\PersonaFormRequest;
use Illuminate\Support\Facades\Redirect;
use DB;

class ClienteController extends Controller
{
    
    public function __construct()
    {

    }
    public function index(Request $request)
    {
    	if($request)
    	{
    		$query=trim($request->get('searchText'));
    		$persona=DB::table('persona')
            ->where('nombre','LIKE','%'.$query.'%')
            ->where('tipo_persona','=','Cliente')
    		->orderBy('id','desc')
    		->paginate(7);
    		return view('ventas.cliente.index',["personas"=>$persona,"searchText"=>$query]);
    	}

    }
    public function create()
    {
    		return view("ventas.cliente.create");
    }
    public function store(PersonaFormRequest $request)
    {
    	$persona=new Persona;
    	$persona->tipo_persona='Cliente';
    	$persona->nombre=$request->get('nombre');
    	$persona->apellido=$request->get('apellido');
    	$persona->celular=$request->get('celular');
    	$persona->correo=$request->get('correo');
    	$persona->direccion=$request->get('direccion');
        $persona->save();
    	return Redirect::to('ventas/cliente');
    }
    public function show($id)
    {
        return view("ventas.cliente.show",["persona"=>Persona::findOrFail($id)]);
    }
    public function edit($id)
    {
    	return view("ventas.cliente.edit",["persona"=>Persona::findOrFail($id)]);
    }
    public function update(PersonaFormRequest $request,$id)
    {   

    	$persona=Persona::findOrFail($id);
    	$persona->nombre=$request->get('nombre');
    	$persona->apellido=$request->get('apellido');
    	$persona->celular=$request->get('celular');
    	$persona->correo=$request->get('correo');
    	$persona->direccion=$request->get('direccion');
    	$persona->update();
    	return Redirect::to('ventas/cliente');

    }
    public function destroy($id){
        $persona=Persona::findOrFail($id);
        $persona->tipo_persona='Inactivo';
        $persona->update();
        return Redirect::to('ventas/cliente');
    }

}
