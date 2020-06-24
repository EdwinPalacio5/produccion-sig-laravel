<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MesProduccion;
use App\AnioProduccion;
use App\RotacionInsumo;
use App\MesAnio;
use App\Insumo;

class RotacionMPController extends Controller
{
    /**
     * Display data entries interface to generate query.
     * @autor Ricardo Estupinian
     */
    public function entriesIndex(){
        $insumos = Insumo::all();
        $meses = MesProduccion::all();
        $años = AnioProduccion::all();
        return view('rotacion_mp.entries',compact('meses','años','insumos'));
    }

    /**
     * Display query results.
     * @autor Ricardo Estupinian 
     */
    public function resultsIndex(Request $request){
        // Recuperacion de parametros de consulta de datos
        $modalidaConsulta = 0;
        $mesId = $request->mesId;
        $anioId = $request->anioId;
        $insumoId = $request->insumoId;
        $fecha = date('d/M/Y g:i a');

        // Variables de manejo de datos
        $rotacionesInsumos = array();
        $año = AnioProduccion::where('id_anio',$anioId)->first();
        $meses = MesProduccion::all();
        $insumos = null;

        // Escenarios de consulta
        // Consulta por meses de un año de todos los insumos
        if( $mesId == -1 && $insumoId == -1){
            $mesesAnios = MesAnio::where('id_anio',$anioId)->get();
            // Recuperacion de datos
            $rotacionesInsumos = $this->getData($mesesAnios,0,false);
            $insumos = Insumo::all();
        }

        // Consulta de por mes por año y por insumo
        if( $mesId !=-1 && $insumoId !=-1){
            $mesesAnios = MesAnio::where('id_anio',$anioId)->where('id_mes',$mesId)->get();
            // Recuperacion de datos
            $rotacionesInsumos = $this->getData($mesesAnios,$insumoId,false);
            $insumos = Insumo::where('id_insumo',$insumoId)->get();
        }

        // Consulta de un insumo por todos los meses de un año
        if( $insumoId !=-1 && $mesId == -1){
            $mesesAnios = MesAnio::where('id_anio',$anioId)->get();
            // Recuperacion de datos
            $rotacionesInsumos = $this->getData($mesesAnios,$insumoId,false);
            $insumos = Insumo::where('id_insumo',$insumoId)->get();
        }

        // Consulta de todos los insumos por un mes de un año
        if( $mesId != -1 && $insumoId == -1){
            $mesesAnios = MesAnio::where('id_anio',$anioId)->where('id_mes',$mesId)->first();
            // Recuperacion de datos
            $rotacionesInsumos = $this->getData($mesesAnios,0,true);
            $insumos = Insumo::all();
        }
        
        //dd($rotacionesInsumos);
        return view('rotacion_mp.results',compact('rotacionesInsumos','año','insumos','meses','fecha'));
    }

    private function getData($mesesAnios,$insumoId,$boolean){
        $rotacionesInsumos = array();
        $insumos;

        if($boolean){
            /*foreach($mesesAnios as $mes){
                foreach(Insumo::all() as $insumo){
                    // Array asociativo [mes][insumo] => rotaciones[]
                    $rotacionesInsumos[$mes->mes->mes][$insumo->nombre_insumo] = RotacionInsumo::where('id_mes_anio',$mes->id_mes_anio)->where('id_insumo',$insumo->id_insumo)->get();
                }
            }*/
            // Recuperacion de todos las rotaciones de un mes y año especifico
            $insumos = Insumo::all();
            foreach($insumos as $insumo){
                $rotacionesInsumos[$insumo->id_insumo][$mesesAnios->mes->mes] = RotacionInsumo::where('id_mes_anio',$mesesAnios->id_mes_anio)->where('id_insumo',$insumo->id_insumo)->get();
            }
        }else{
            if($insumoId == 0){
                /*foreach($mesesAnios as $mes){
                    // Array asociativo mes => rotaciones[]
                    $rotacionesInsumos[$mes->mes->mes] = RotacionInsumo::where('id_mes_anio',$mes->id_mes_anio)->get();
                    
                }*/
                $insumos = Insumo::all();
                foreach($insumos as $insumo){
                    foreach($mesesAnios as $mes){
                        // Array asociativo mes => rotaciones[]
                        $rotacionesInsumos[$insumo->id_insumo][$mes->mes->mes] = RotacionInsumo::where('id_mes_anio',$mes->id_mes_anio)->where('id_insumo',$insumo->id_insumo)->get();
                        
                    }
                }
            }else{
                /*foreach($mesesAnios as $mes){
                    // Array asociativo mes => rotaciones[]
                    $rotacionesInsumos[$mes->mes->mes] = RotacionInsumo::where('id_insumo',$insumoId)->where('id_mes_anio',$mes->id_mes_anio)->get();
                    
                }*/
                $insumos = Insumo::where('id_insumo',$insumoId)->first();
                foreach($mesesAnios as $mes){
                    // Array asociativo mes => rotaciones[]
                    //dd(RotacionInsumo::where('id_insumo',$insumos->id_insumo)->where('id_mes_anio',$mes->id_mes_anio)->get());
                    $rotacionesInsumos[$insumos->id_insumo][$mes->mes->mes] = RotacionInsumo::where('id_insumo',$insumos->id_insumo)->where('id_mes_anio',$mes->id_mes_anio)->get();
                }
                    
            }
        }
        
        return $rotacionesInsumos;
    }
}
