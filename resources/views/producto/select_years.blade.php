@extends("../layouts.base")

@section('head')
    
@endsection

@section('main')
<div class="mt-4 row"></div>
<div class="mt-2 row"></div>
<div class="row align-items-center">
    <div class="col-1"></div>
    <div class="col-10">
        <div class="card mt-4 ml-4 mr-4 border border-dark">
          <div class="alert alert-danger text-center collapse">
            <h6>El año inicial seleccionado debe ser menor que el año final</h6>
          </div>
            <h5 class="h2 text-center card-header">Comparación de la demanda de productos por años</h5>
            <form action="{{ route('producs_demand') }}" id="form_params">
              @method('GET')
              <input type="text" name="pdf" id="pdf" hidden value="">
              <div class="card-body">
                <h5 class="ml-4 card-title mb-4 text-center">Parametros de consulta</h5>
                <br>
                <div class="row">

                  <div class="col-md-5">
                    <label><strong>Año Inicial</strong></label>
                    <select class="form-control form-control-lg mt-2" name="anio_inicial" id="anioInicial">
                      <option value="0">Seleccionar año inicial</option>
                      @forelse ($pedidos as $pedido)
                        <option 
                          value="{{ date('Y', strtotime($pedido->fecha_entrega)) }}">{{ date('Y', strtotime($pedido->fecha_entrega)) }}
                        </option>
                      @empty
                        <option>No hay Años disponibles</option>
                      @endforelse
                    </select>
                  </div>

                  <div class="col-md-2">
                  </div>

                  <div class="col-md-5">
                    <label><strong>Año Final</strong></label>
                    <select class="form-control form-control-lg mt-2" name="anio_final" id="anioFinal">
                      <option value="1">Seleccionar año final</option>
                      @forelse ($pedidos as $pedido)
                        <option 
                          value="{{ date('Y', strtotime($pedido->fecha_entrega)) }}">{{ date('Y', strtotime($pedido->fecha_entrega)) }}
                        </option>
                      @empty
                        <option>No hay Años disponibles</option>
                      @endforelse
                    </select>
                  </div>

                </div>
                <br><br>
              </div>

              <div class="card-footer">
                <div class="row">
                  <div class="col-md-4 text-right">
                    <button type="button" class="btn btn-primary" id="btnConsulta" disabled>Generar Consulta</button>
                  </div>
                  <div class="col-md-4"></div>
                  <div class="col-md-4">
                    <button type="button" class="btn btn-primary" id="btnReporte" disabled>Generar Reporte</button>
                  </div>
                </div>
              </div>
            </form>

        </div>
    </div>
    <div class="col-1"></div>
</div>
@endsection

@section('js')
    <script>

      $('#anioInicial, #anioFinal').on('change', function(){
        var anio_inicial = $('#anioInicial').val();
        var anio_final = $('#anioFinal').val();

        if(anio_inicial >= anio_final){
          $('#btnConsulta').prop('disabled', true);
          $('#btnReporte').prop('disabled', true);
          $(".alert").fadeIn();   
        }else{
          $('#btnConsulta').prop('disabled', false);
          $('#btnReporte').prop('disabled', false);
          $(".alert").fadeOut();   
        }
      });

      $('#btnConsulta').on('click', function(){
          $("#pdf").val(0);
          $("#form_params").submit();
        });

      $('#btnReporte').on('click', function(){
          $("#pdf").val(1);
          $("#form_params").submit();
        });
      
    </script>
@endsection