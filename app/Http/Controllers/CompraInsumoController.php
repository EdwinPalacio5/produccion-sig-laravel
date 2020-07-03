<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CompraInsumo;
use App\Insumo;
use App\AnioProduccion;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection;     

class CompraInsumoController extends Controller
{

    /**
     * Funcion que controla el acceso a personas que teniendo la URL quieran
     * acceder a funcionalidad de usuario de negocio estratégico, pero no poseen
     * el rol de usuario correcto. 
     * @author Edwin Palacios
     * @param Request, peticion del usuario para acceder.
     * */
    public function securityAccessSecondLayer(){
        if(!Auth::user()->es_estrategico){
            abort(403);
        }
    }

    /**
    * Funcion para mostrar la vista de parametros de consulta,
    * 
    * @author Edwin Palacios
    */
   public function parametrosIndex(){
       //Funcion que controla el acceso 
       $this->securityAccessSecondLayer();
       $insumos = Insumo::all();
       $anios_produccion = AnioProduccion::all();
       return view('compra_insumo.parametros',compact('insumos', 'anios_produccion'));
   }

   /**
    * Funcion para mostrar los resultados,
    * 
    * @author Edwin Palacios
    */
    public function resultadosIndex(Request $request){
        //Funcion que controla el acceso 
        $this->securityAccessSecondLayer();
        
        $anio_inicial_id = $request->anioInicialId;
        $anio_final_id = $request->anioFinalId;
        $insumo_id = $request->insumoId;
        $fecha = date('d/M/Y G:i:s');

        // Variables de manejo de datos
        $insumos = array();
        $anio_inicial = AnioProduccion::where('id_anio',$anio_inicial_id)->first();
        $anio_final = AnioProduccion::where('id_anio',$anio_final_id)->first();
        $anios = AnioProduccion::where('anio','>=', $anio_inicial->anio)
                                ->where('anio','<=', $anio_final->anio)
                                ->get();

        //Si se escogen todos los insumos
        if($insumo_id == -1){
            $insumos = DB::table('insumos')->get(); 
        }else{
            $insumos = DB::table('insumos')->where('id_insumo', $insumo_id)->get();
        }

        $insumos->pluck('compras');
        foreach($insumos as $insumo){
            $compras_insumo = DB::table('compras_insumos')
                ->select(DB::raw('sum(cantidad_insumo) as cantidad, 
                                  sum(cantidad_insumo*precio_unitario_insumo) as total, 
                                  YEAR(fecha_compra_insumo) as anio,
                                  id_insumo'))
                ->where('id_insumo', $insumo->id_insumo)
                ->whereYear('fecha_compra_insumo', '>=', $anio_inicial->anio)
                ->whereYear('fecha_compra_insumo', '<=', $anio_final->anio)
                ->groupBy('id_insumo')
                ->groupBy('anio')
                ->get();
            $insumo->compras = $compras_insumo;
        }  

        return view('compra_insumo.resultados', compact('insumos', 'anio_inicial','anio_final','anios', 'fecha'));
    }
}
