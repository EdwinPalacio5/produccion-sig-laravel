<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Pedido;
use App\LineaPedido;
use App\Producto;
use \PDF;

class ProductoController extends Controller
{
    
    public function selectYears(){
		$pedidos = Pedido::all();

    	return view('producto.select_years')->with(compact('pedidos'));
    }

    public function productDemand(Request $request){
    	
    	$fecha_f = $request->anio_final;
        $fecha_inicial = $request->anio_inicial;
        $fecha_final = $fecha_f + 1;
        $generar_pdf = $request->pdf;

    	$fecha_inicial = $fecha_inicial.'-01-01';
    	$fecha_final = $fecha_final.'-01-01';
        $fecha = date('d/M/Y G:i:s');

    	$anios = DB::table('pedidos')->whereBetween('fecha_entrega', [$fecha_inicial, $fecha_final])->get();
    	$products_demand = DB::table('productos')->get();

    	$products_demand->pluck('lineas_pedido');

    		foreach ($products_demand as $pd) {

    			$lineas_pedido = DB::table('pedidos as ped')
			    				->whereBetween('fecha_entrega', [$fecha_inicial, $fecha_final])
			    				->join('lineas_pedido as lp', 'lp.id_pedido', '=', 'ped.id_pedido')
			    				->where('lp.id_producto', $pd->id_producto)
			    				->select('lp.cantidad_item_total')
			    				->get();

    			$pd->lineas_pedido = $lineas_pedido;
    		}
		
    	if($generar_pdf == 0){
            return view('producto.product_demand')->with(compact('anios', 'products_demand', 'fecha', 'fecha_inicial', 'fecha_f'));
        }else{

            $pdf = PDF::loadView('producto.pdf', compact('anios', 'products_demand', 'fecha', 'fecha_inicial', 'fecha_f'));
            return $pdf->setPaper('legal', 'landscape')->stream("comparacion_entre_años_$fecha.pdf");
        }
    }
}
