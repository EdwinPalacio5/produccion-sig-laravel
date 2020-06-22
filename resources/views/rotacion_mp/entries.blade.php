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
              <h5 class="ml-4 card-title mb-4 text-center">Parametros de consulta</h5>
              <div class="row">
                <div class="ml-4 col">
                  <label><strong>Insumos</strong></label>
                  <select class="form-control form-control-lg mt-2">
                    <option>Todos</option>
                    @forelse ($insumos as $insumo)
                    <option value="{{$insumo->id_insumo}}">{{$insumo->nombre_insumo}}</option>
                    @empty
                    <option>No hay insumos</option>
                    @endforelse
                  </select>
                </div>
                <div class="col">
                  <label><strong>Meses</strong></label>
                  <select class="form-control form-control-lg mt-2">
                    @forelse ($meses as $mes)
                    <option value="{{$mes->id_mes}}">{{$mes->mes}}</option>
                    @empty
                    <option>No hay meses</option>
                    @endforelse

                  </select>
                </div>
                <div class="col">
                  <label><strong>Años</strong></label>
                  <select class="form-control form-control-lg mt-2">
                    @forelse ($años as $año)
                    <option value="{{$año->id_anio}}">{{$año->anio}}</option>
                    @empty
                    <option>No hay año</option>
                    @endforelse
                  </select>
                </div>
                <div class="ml-4 mt-4 col">
                    <a href="#" class="btn btn-primary w-100">Generar Consulta</a>
                    <a href="#" class="mt-4 btn btn-primary w-100">Generar Reporte</a>
                </div>
              </div>
            </div>
        </div>
    </div>
    <div class="col-1"></div>
</div>
@endsection

@section('js')
    
@endsection