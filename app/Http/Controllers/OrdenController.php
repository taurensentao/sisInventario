<?php

namespace sisInventario\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use sisInventario\Order;
class OrdenController extends Controller
{
    public function index(Request $request){
        	
    		$query=trim($request->get('searchText'));
    		$orden=DB::table('orders')

            ->where('nombre','LIKE','%'.$query.'%')
       		->orderBy('id','desc')
    		->paginate(7);
        return view('ventas.ordenes.index',["ordenes"=>$orden]);
    }
    public function edit(Request $requet,$id){
    	$order=Order::findOrFail($id);
                $order->estado='1';
       
        $order->update();

        return Redirect::to('ventas/ordenes');
    }
}
