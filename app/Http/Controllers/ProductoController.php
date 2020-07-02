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

    /**
     * @param  $request: contiene los datos que son enviados desde el usuario para este caso son:
     * $fecha_inical: 
     * @return [type]
     */
    public function productDemand(Request $request){
    	
    	$fecha_f = $request->anio_final;
        $fecha_inicial = $request->anio_inicial;
        $fecha_final = $fecha_f + 1;
        $generar_pdf = $request->pdf;

    	$fecha_inicial = $fecha_inicial.'-01-01';
    	$fecha_final = $fecha_final.'-01-01';
        $fecha = date('d/M/Y G:i:s');

        $anios = DB::table('pedidos')->whereBetween('fecha_entrega', [$fecha_inicial, $fecha_final])->get();
        $products_demand = $this->getProducts($fecha_inicial, $fecha_final);

    	if($generar_pdf == 0){
            return view('producto.product_demand')->with(compact('anios', 'products_demand', 'fecha', 'fecha_inicial', 'fecha_f'));
        }else{

            $pdf = PDF::loadView('producto.pdf', compact('anios', 'products_demand', 'fecha', 'fecha_inicial', 'fecha_f'));
            return $pdf->setPaper('legal', 'landscape')->stream("comparacion_entre_años_$fecha.pdf");
        }
    }

    /**
     * Función que se encarga de recuperar los productos con sus respectivas demandas entre un rango de años
     * @author Enrique Menjívar
     * @param  $fecha_inicial: contiene el año inicial desde el que se quiere conocer la demanda de los productos
     * @param  $fecha_final: contiene el año final hasta el que se quiere conocer la demada de los productos
     * @return $products_demand: devuelve todos los productos asociados a cada año con sus respectivas demandas
     */
    public function getProducts($fecha_inicial, $fecha_final){

        //Se recuperan los años que se encuentra de todos los pedidos que se encuentran entre los años solicitados
        $anios = DB::table('pedidos')->whereBetween('fecha_entrega', [$fecha_inicial, $fecha_final])->get();
        $products_demand = DB::table('productos')->get();

        $products_demand->pluck('lineas_pedido');

        //Se recuperan las lineas de pedidod que se encuentren entre los años solicitaods, para cada uno de los productos
        foreach ($products_demand as $pd) {

            $lineas_pedido = DB::table('pedidos as ped')
                            ->whereBetween('fecha_entrega', [$fecha_inicial, $fecha_final])
                            ->join('lineas_pedido as lp', 'lp.id_pedido', '=', 'ped.id_pedido')
                            ->where('lp.id_producto', $pd->id_producto)
                            ->select('lp.cantidad_item_total')
                            ->get();

            $pd->lineas_pedido = $lineas_pedido;
        }

        return $products_demand;
    }
}
