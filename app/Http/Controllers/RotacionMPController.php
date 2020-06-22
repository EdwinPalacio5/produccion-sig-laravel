<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MesProduccion;
use App\AnioProduccion;
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
    public function resultsIndex(){
        return view('rotacion_mp.results');
    }
}
