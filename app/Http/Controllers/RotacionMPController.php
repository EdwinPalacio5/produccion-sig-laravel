<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\MesProduccion;
use App\AnioProduccion;
use App\RotacionInsumo;
use App\MesAnio;
use App\Insumo;

class RotacionMPController extends Controller
{
    /**
     * Funcion que controla el acceso a personas que teniendo la URL quieran
     * acceder a funcionalidad de usuario de negocio tactico, pero no poseen
     * el rol de usuario correcto. 
     * @author Ricardo Estupinian
     * @param Request, peticion del usuario para acceder.
     * */
    public function securityAccessSecondLayer(){
        if(!Auth::user()->es_tactico){
            abort(403);
        }
    }

    /**
     * Funcion para mostrar la vista de parametros de consulta,
     * se recuperan todos los insumos, meses y años que se 
     * almacenan en la base de datos gerenciales.
     * @author Ricardo Estupinian
     */
    public function entriesIndex(){
        //Funcion que controla el acceso 
        $this->securityAccessSecondLayer();

        //Recuperacion de datos para consulta si posee el rol especificado
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
        $fecha = date('d/M/Y G:i:s');

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

        /*Porcion de codigo que actua como switch para mostrar los resultado
          en la interfaz WEB o en formato PDF*/
        if($request->PDF==0){
            return view('rotacion_mp.results',compact('rotacionesInsumos','año','insumos','meses','fecha'));
        }else{
            //Geracion de PDF
            $pdf = \PDF::loadView('rotacion_mp.pdf', compact('rotacionesInsumos','año','insumos','meses','fecha'));
            return $pdf->setPaper('legal', 'landscape')->stream("IndiceRotacionMP_$fecha.pdf");
        }
    }

    /**
     * Funcion que se encarga de realizar la recuperacion de 
     * datos de la base de datos gerencial en base a los parametros
     * de consulta.
     * @author Ricardo Estupinian
     * @param $mesesAnios Listado de meses y anios segun parametros
     * @param $insumoId Id del insumo, si su valor es 0 no se recupera ninguno.
     * @param $boolean Variable booleana que sirve como bandera.
     * @return $rotacionesInsumos Devuelve todas las rotaciones insumos segun parametros.
     */
    private function getData($mesesAnios,$insumoId,$boolean){
        $rotacionesInsumos = array();
        $insumos;

        if($boolean){
            // Recuperacion de todos las rotaciones de un mes y año especifico
            $insumos = Insumo::all();
            foreach($insumos as $insumo){
                $rotacionesInsumos[$insumo->id_insumo][$mesesAnios->mes->mes] = RotacionInsumo::where('id_mes_anio',$mesesAnios->id_mes_anio)->where('id_insumo',$insumo->id_insumo)->get();
            }
        }else{
            if($insumoId == 0){
                $insumos = Insumo::all();
                foreach($insumos as $insumo){
                    foreach($mesesAnios as $mes){
                        // Array asociativo mes => rotaciones[]
                        $rotacionesInsumos[$insumo->id_insumo][$mes->mes->mes] = RotacionInsumo::where('id_mes_anio',$mes->id_mes_anio)->where('id_insumo',$insumo->id_insumo)->get();
                    }
                }
            }else{
                $insumos = Insumo::where('id_insumo',$insumoId)->first();
                foreach($mesesAnios as $mes){
                    $rotacionesInsumos[$insumos->id_insumo][$mes->mes->mes] = RotacionInsumo::where('id_insumo',$insumos->id_insumo)->where('id_mes_anio',$mes->id_mes_anio)->get();
                }
                    
            }
        }
        
        return $rotacionesInsumos;
    }
}
