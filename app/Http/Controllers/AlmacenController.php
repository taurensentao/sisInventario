<?php

namespace sisInventario\Http\Controllers;

use Illuminate\Http\Request;
use sisInventario\Http\Requests\ProductoFormRequest;
use sisInventario\Producto;
use sisInventario\Carro;
use sisInventario\Order;
use sisInventario\User;
use sisInventario\Categoria;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Auth;
use Excel;
use DB;
use Session;


class AlmacenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        if($request)
        {
            $query=trim($request->get('searchText'));
            $producto=DB::table('producto as p')
            ->join('categoria as c','p.categoria_id','=','c.id')
            ->select('p.id','p.nombre','p.codigo','p.tamano','c.nombre as categoria','p.descripcion','p.imagen','p.precio','p.visible')
            ->where('p.nombre','LIKE','%'.$query.'%')
            ->orwhere('p.codigo','LIKE','%'.$query.'%')
            ->where('p.visible','=','1')
            ->orderBy('p.id','desc')
            ->paginate(7);
            return view('almacen.producto.index',["productos"=>$producto,"searchText"=>$query]);
        }

    }
    public function getAddToCart(Request $request, $id){
            $producto = Producto::find($id);
            $oldCart= Session::has('cart') ? Session::get('cart') :null;
            $cart = new Carro($oldCart);
            $cart->add($producto,$producto->id); 
            $request-> session()->put('cart',$cart);
            return Redirect::to('productos');
    }
    public function getCart(){
        if(!Session::has('cart')){
            return view('/home/carro');
        } 

        $oldCart= Session::get('cart');
        $cart=new Carro($oldCart);
        return view('/home/carro',['products'=>$cart,'totalPrice'=>$cart->totalPrice]);
    }
    public function getCheckout(){

        if(!Session::has('cart')){
            return view('/home/carro');
        }
        $oldCart=Session::get('cart');
        $cart =new Carro($oldCart);
        $total= $cart->totalPrice;
        return view('home.checkout', ['total'=>$total,'products'=>$cart]);
    }
    public function postCheckout(Request $request){
         if(!Session::has('cart')){
            return Redirect::to('productos');
        }
        $users=  new User();
        $oldCart =Session::get('cart');
        $cart = new Carro($oldCart);
       
            $order = new Order();   
            $order->cart = serialize($cart);
            $order->user_id=$users->id;
            $order->nombre=$request->input('nombre');
            $order->apellido=$request->input('apellido');
            $order->rut=$request->input('rut');
            $order->telefono=$request->input('telefono');
            $order->email=$request->input('email');
            $order->address=$request->input('address');
            $order->addresopt=$request->input('addresopt');
            $order->region=$request->input('region');
            $order->comuna=$request->input('comuna');
            $order->total= $cart->totalPrice;
            Auth::user()->orders()->save($order);
          
            Session::forget('cart');

        
        
        return  Redirect::to('productos')->with('success', 'Se han reservado con éxito sus productos, se le enviara un correo cuando se apruebe su pago');
    }
      public function mostrarp(Request $request,$id){
           $producto=Producto::where('categoria_id','=',$id)->get();
           $categorias=Categoria::all();        
                      
           return view('Home/productos',["categoria"=>$categorias,"productos"=>$producto]);
    }
    public function mostrar(Request $request){
           $producto=Producto::all();
           $categorias=Categoria::all();
         
                       
                      
           return view('Home/productos',["categoria"=>$categorias,"productos"=>$producto]);
    }
    public function create()
    {
        $categorias=DB::table('categoria')->where('condicion','=','1')->get();
        return view("almacen.producto.create",["categorias"=>$categorias]);
    }
    public function store(ProductoFormRequest $request)
    {
        $producto=new Producto;
        $producto->categoria_id=$request->get('categoria_id');
        $producto->tamano=$request->get('tamano');
        $producto->nombre=$request->get('nombre');
        $producto->codigo=$request->get('codigo');
        $producto->descripcion=$request->get('descripcion');
        $producto->visible='1';
        $producto->precio=$request->get('precio');
        if (Input::hasFile('imagen'))
        {
            $file=Input::file('imagen');
            $file->move(public_path().'/imagenes/productos/',$file->getClientOriginalName());
            $producto->imagen=$file->getClientOriginalName();
        }

        
        $producto->save();
        return Redirect::to('almacen/producto');
    }
    public function ex(){
            
            $producto=Producto::all();
            

           Excel::create('productos', function($excel) use($producto){

            $excel->sheet('Tienda', function($sheet) use($producto){
                 $sheet->fromArray($producto);});

            })->export('xls');
          return Redirect::to('almacen/producto');
    }
    public function show($id)
    {
        return view("almacen.producto.show",["producto"=>Producto::findOrFail($id)]);
    }
    public function edit($id)
    {
        $producto=Producto::findOrFail($id);
        $categorias=DB::table('categoria')->where('condicion','=','1')->get();
        return view("almacen.producto.edit",["producto"=>$producto,"categorias"=>$categorias]);
    }
    public function update(ProductoFormRequest $request,$id)
    {
        
        $producto=Producto::findOrFail($id);
        $producto->categoria_id=$request->get('categoria_id');
        $producto->tamano=$request->get('tamano');
        $producto->nombre=$request->get('nombre');
        $producto->codigo=$request->get('codigo');
        $producto->precio=$request->get('precio');
        $producto->descripcion=$request->get('descripcion');
        
         if (Input::hasFile('imagen'))
        {
            $file=Input::file('imagen');
            $file->move(public_path().'/imagenes/productos/',$file->getClientOriginalName());
            $articulo->imagen=$file->getClientOriginalName();
        }
        $producto->update();
        return Redirect::to('almacen/producto');

    }
    public function destroy($id){
        $producto=Producto::findOrFail($id);
        $producto->visible='0';
        $producto->update();
        return Redirect::to('almacen/producto');
    }

}