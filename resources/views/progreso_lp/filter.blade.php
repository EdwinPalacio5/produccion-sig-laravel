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
            <h5 class="h2 text-center card-header">Progreso por linea de producto</h5>
            <div class="card-body">
              <form action="{{route('plp_resultados')}}" id="form_params">
                @method('GET')
                <input type="text" name="PDF" id="PDF" hidden>
              <h5 class="ml-4 card-title mb-4 text-center">Parametros de consulta</h5>
              <div class="row">
                <div class="ml-4 col">
                  <label><strong>Producto</strong></label>
                  <select class="form-control form-control-lg mt-2" name="productoId">
                    <!--<option value="-1">Todos</option>-->
                    @forelse ($productos as $producto)
                    <option value="{{$producto->id_producto}}">{{$producto->nombre_producto}}</option>
                    @empty
                    <option>No hay insumos</option>
                    @endforelse
                  </select>
                </div>
                
                <div class="ml-4 mt-4 col">
                  <button type="button" id="query" class="btn btn-primary w-100">Generar Consulta</button>
                  <button type="button" id="pdf" class="mt-4 btn btn-primary w-100">Generar Reporte</button>
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
    </script>
@endsection