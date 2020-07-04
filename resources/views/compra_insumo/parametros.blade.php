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
                <div class="alert alert-danger text-center"  role="alert" style="display: none;" id="mensaje">
                    El año inicial seleccionado debe ser menor que el año final
                </div>
                <h5 class="h2 text-center card-header">Informe Anual de Compra de insumos</h5>
                <div class="card-body">
                <form action="{{route('resultado_compra_insumo')}}" id="form_params">
                    @method('GET')
                    <input type="text" name="PDF" id="PDF" hidden>
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
                    <label><strong>Año inicial</strong></label>
                    <select class="form-control form-control-lg mt-2" id="anioInicialId" name="anioInicialId">
                        @forelse ($anios_produccion as $anio)
                            <option value="{{$anio->id_anio}}">{{$anio->anio}}</option>
                        @empty
                            <option>No hay años en produccion</option>
                        @endforelse
                    </select>
                    </div>
                    <div class="col">
                    <label><strong>Año Final</strong></label>
                    <select class="form-control form-control-lg mt-2" id="anioFinalId" name="anioFinalId">
                        @forelse ($anios_produccion as $anio)
                            <option value="{{$anio->id_anio}}">{{$anio->anio}}</option>
                        @empty
                            <option>No hay años en produccion</option>
                        @endforelse
                    </select>
                    </div>
                    <div class="ml-4 mt-4 col">
                    <button type="button" id="query" class="btn btn-primary w-100">Generar Consulta</button>
                    <button type="button" id="pdf" class="mt-4 btn btn-primary w-100">Generar Reporte</button>
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
    <script>
      $(document).ready(function(){
        $("#pdf").on("click",function(){
          $("#PDF").val(1);
          $("#form_params").submit();
        });
        $("#query").on("click",function(){
          $("#PDF").val(0);
          $("#form_params").submit();
        });
      });

      $('#anioInicialId').change(function(){
        if($('#anioInicialId').val() > $('#anioFinalId').val()){
            $('#mensaje').show();
        }else{
            $('#mensaje').hide();
        }
      });

      $('#anioFinalId').change(function(){
        if($('#anioInicialId').val() > $('#anioFinalId').val()){
            $('#mensaje').show();
        }else{
            $('#mensaje').hide();
        }
      });

      $("#form_params").on('submit', function(evt){
        if($('#anioInicialId').val() > $('#anioFinalId').val()){
            $('#mensaje').show();
            $('#anioInicialId').focus();
            evt.preventDefault(); 
        }
      });

      
    </script>
@endsection