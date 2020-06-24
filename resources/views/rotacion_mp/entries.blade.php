@extends("../layouts.base")

@section('head')
    
@endsection

@section('main')
<div class="mt-4 row"></div>
<div class="mt-4 row"></div>
<div class="row mt-4 align-items-center">
    <div class="col-1"></div>
    <div class="col-10">
        <div class="card mt-4 ml-4 mr-4 border border-dark">
            <h5 class="h2 text-center card-header">Índice de rotación de insumos</h5>
            <div class="card-body">
              <form action="/rotacion-mp/resultados">
                @method('GET')
              <h5 class="ml-4 card-title mb-4 text-center">Parametros de consulta</h5>
              <div class="row">
                <div class="ml-4 col">
                  <label><strong>Insumos</strong></label>
                  <select class="form-control form-control-lg mt-2" name="insumoId">
                    <option value="-1">Todos</option>
                    @forelse ($insumos as $insumo)
                    <option value="{{$insumo->id_insumo}}">{{$insumo->nombre_insumo}}</option>
                    @empty
                    <option>No hay insumos</option>
                    @endforelse
                  </select>
                </div>
                <div class="col">
                  <label><strong>Meses</strong></label>
                  <select class="form-control form-control-lg mt-2" name="mesId">
                    <option value="-1">Todos</option>
                    @forelse ($meses as $mes)
                    <option value="{{$mes->id_mes}}">{{$mes->mes}}</option>
                    @empty
                    <option>No hay meses</option>
                    @endforelse

                  </select>
                </div>
                <div class="col">
                  <label><strong>Años</strong></label>
                  <select class="form-control form-control-lg mt-2" name="anioId">
                    @forelse ($años as $año)
                    <option value="{{$año->id_anio}}">{{$año->anio}}</option>
                    @empty
                    <option>No hay año</option>
                    @endforelse
                  </select>
                </div>
                <div class="ml-4 mt-4 col">
                  <input type="submit" href="{{route('rmp_resultados')}}" class="btn btn-primary w-100" value="Generar Consulta"/>
                    <a href="#" class="mt-4 btn btn-primary w-100">Generar Reporte</a>
                  <!--
                <a href="{{route('rmp_resultados')}}" class="btn btn-primary w-100">Generar Consulta</a>
                    <a href="#" class="mt-4 btn btn-primary w-100">Generar Reporte</a>-->
                </div>
              </div>
            </form>
            </div>
        </div>
    </div>
    <div class="col-1"></div>
</div>
@endsection

@section('js')
    
@endsection