<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;
use App\Producto;
use App\LineaPedido;
use App\Pedido;
use App\EstadoPedido;
use App\Insumo;

class ProgresoLPController extends Controller
{
    
    public function entradasIndex(){
        $productos = Producto::all();

        return view('progreso_lp.filter',compact('productos'));
    }

  
    public function resultsIndex(Request $request){
        // Recuperacion de parametros de consulta de datos
        $modalidaConsulta = 0;
        $fecha = date('d/M/Y G:i:s');
        $idProducto = $request->productoId; 
        
        $productos = null;
        $lineasPedidos = DB::table('productos')
        ->join('lineas_pedido', 'productos.id_producto', '=', 'lineas_pedido.id_producto')
        ->join('pedidos', 'lineas_pedido.id_pedido', '=', 'pedidos.id_pedido')
        ->select('lineas_pedido.*', 'productos.*')
        ->where('pedidos.id_estado_pedido', '=', 1)
        ->where('productos.id_producto', '=', $idProducto)
        ->get();
        $productos = Producto::where('id_producto',$idProducto)->get();
        #$idPedido = $pedidos->id_estado_pedido;       

        //Para todos los productos
        

            /*if($idProducto == -1){
                $lineasPedidos = DB::table('productos')
                ->join('lineas_pedido', 'productos.id_producto', '=', 'lineas_pedido.id_producto')
                ->join('pedidos', 'lineas_pedido.id_pedido', '=', 'pedidos.id_pedido')
                ->select('lineas_pedido.*', 'productos.*')
                ->where('pedidos.id_estado_pedido', '=', 1)
                ->where('productos.id_producto', '=', [1,2,3,4,5,6])->get();
                $productos = DB::table('productos')
                ->join('lineas_pedido', 'productos.id_producto', '=', 'lineas_pedido.id_producto')
                ->join('pedidos', 'lineas_pedido.id_pedido', '=', 'pedidos.id_pedido')
                ->select('lineas_pedido.*', 'productos.*')
                ->where('pedidos.id_estado_pedido', '=', 1)
                ->select('productos.*')->get();
            }else{
                $lineasPedidos = DB::table('productos')
                ->join('lineas_pedido', 'productos.id_producto', '=', 'lineas_pedido.id_producto')
                ->join('pedidos', 'lineas_pedido.id_pedido', '=', 'pedidos.id_pedido')
                ->select('lineas_pedido.*', 'productos.*')
                ->where('pedidos.id_estado_pedido', '=', 1)
                ->where('productos.id_producto', '=', $idProducto)
                ->get();
                $productos = Producto::where('id_producto',$idProducto)->get();

            }
*/



            /*Porcion de codigo que actua como switch para mostrar los resultado
              en la interfaz WEB o en formato PDF*/
            if($request->PDF==0){
                return view('progreso_lp.table',compact('lineasPedidos','fecha', 'productos'));
            }else{
                //Geracion de PDF
                $pdf = \PDF::loadView('progreso_lp.pdf', compact('lineasPedidos','productos', 'fecha'));
                return $pdf->setPaper('legal', 'landscape')->stream("LineaPedioProceso_$fecha.pdf");
            }
    }

}
