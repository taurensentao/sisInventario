<?php

namespace sisInventario\Http\Controllers;

use Illuminate\Http\Request;

use sisInventario\Producto;
use sisInventario\Panel;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Input;
use sisInventario\Http\Requests\PanelFormRequest;
use DB;


class PanelController extends Controller
{
    	public function __construct()
    {

    }
    public function index(Request $request)
    {
    	if($request)
    	{
    		$query=trim($request->get('searchText'));
    		$panel=DB::table('panel')
    		
    		
    		->where('nombre','LIKE','%'.$query.'%')
            ->where('condicion','=','1')
            
            ->orderBy('id','desc')
    		->paginate(7);
    		return view('almacen.panel.index',["panels"=>$panel,"searchText"=>$query]);

    	}

 	}
     public function ver(){
           $panel=Panel::all();
           $producto = Producto::latest()
            ->take(6)
         ->get();
       
            

          
        return view('/Home/index',["paneles"=>$panel,'productos'=>$producto]);
    }
    public function create()
    {
    	return view("almacen.panel.create");

    }
    public function store(PanelFormRequest $request)
    {
    	$panel=new Panel;
    	
    	
    	$panel->nombre=$request->get('nombre');
    
    	
    
        $panel->descripcion=$request->get('descripcion');
    	if (Input::hasFile('imagen'))
        {
    		$file=Input::file('imagen');
    		$file->move(public_path().'/imagenes/panel/',$file->getClientOriginalName());
    		$panel->imagen=$file->getClientOriginalName();
    	}

    	$panel->condicion='1';
       	$panel->save();
    	return Redirect::to('almacen/panel');
    }
    
    public function show($id)
    {
    	return view("almacen.panel.show",["panel"=>Panel::findOrFail($id)]);
    }
    public function edit($id)
    {
    	$panel=Panel::findOrFail($id);
    
    	return  view("almacen.panel.edit",["panel"=>Panel::findOrFail($id)]);
    }
    public function update(PanelFormRequest $request,$id)
    {
    	
    	$panel=Panel::findOrFail($id);
    	    	
    	$panel->nombre=$request->get('nombre');
       	$panel->descripcion=$request->get('descripcion');
    	    	
    	 if (Input::hasFile('imagen'))
    	{
    		$file=Input::file('imagen');
    		$file->move(public_path().'/imagenes/panel/',$file->getClientOriginalName());
    		$articulo->imagen=$file->getClientOriginalName();
    	}
    	$panel->update();
    	return Redirect::to('almacen/panel');

    }
    public function destroy($id){
        $panel=Panel::destroy($id);
    
        return Redirect::to('almacen/panel');
    }
}
