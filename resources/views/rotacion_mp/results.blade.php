@extends("../layouts.base")

@section('head')
    
@endsection

@section('main')
<div id="wrapper">
    <div id="content-wrapper">
        <div class="container-fluid">
            <h6 class="mb-4 mt-3 text-right">Fecha de consulta: <strong>{{$fecha}}</strong></h6>
            <div class="my-2 my-lg-2 text-center row">
                <div class="col-2
                "></div>
               <div class="col-2"> <img src="{{asset('./img/guayabera1.png')}}" width="70" class="d-inline-block align-top logo"></div>
               <div class="col-4"> 
                   <h4 class="mb-4 mt-3 text-center">La Guayabera S.A. de C.V.</h4>
                   <h4 class="mb-4 mt-3 text-center">Informe de indice de rotacion</h4>
            </div>
            </div>
            <div class="row">
                <div class="col-3"></div>
                <div class="col-2">
                    @if (count($insumos)>1)
                        <h5 class="mb-4 mt-2 text-center">Insumo: <strong>Todos</strong></h5>
                    @elseif(count($insumos)==1) 
                    <h5 class="mb-4 mt-2 text-center">Insumo: <strong>{{$insumos[0]->nombre_insumo}}</strong></h5>
                    @endif


                </div>
                <div class="col-2">
                    @if (count($rotacionesInsumos[$insumos[0]->id_insumo])>1)
                        <h5 class="mb-4 mt-2 text-center">Mes: <strong>Todos</strong></h5>
                    @else
                        <h5 class="mb-4 mt-2 text-center">Mes: <strong>{{key($rotacionesInsumos[$insumos[0]->id_insumo])}}</strong></h5>
                    @endif
                </div>
                <div class="col-2">
                    <h5 class="mb-4 mt-2 text-center">Año: <strong>{{$año->anio}}</strong></h5>
                </div>
            </div>
            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    Tabla de resultados
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="text-align: center;">
                            <thead>
                                <tr>
                                    
                                    @if (count($rotacionesInsumos[$insumos[0]->id_insumo])>1)
                                    <th rowspan="2">Insumo</th>
                                        @foreach ($rotacionesInsumos[$insumos[0]->id_insumo] as $key => $rotacion)
                                            <th >{{$key}}</th>                                        
                                        @endforeach
                                    @else
                                        
                                    @endif 
                                </tr>
                                <tr> 
                                    @if (count($rotacionesInsumos[$insumos[0]->id_insumo])>1)
                                        @foreach ($rotacionesInsumos[$insumos[0]->id_insumo] as $key => $rotacion)
                                            <th>Indice</th>                                            
                                        @endforeach
                                    @else
                                        <th>Insumo</th>
                                        <th>Cantidad Disponible</th>
                                        <th>Cantidad Consumida</th>
                                        <th>Indice de Rotacion %</th>
                                    @endif 
                                    
                                </tr>
                                
                            </thead>
                            
                            <tbody>
                                @if (count($rotacionesInsumos[$insumos[0]->id_insumo])>1)
                                    @foreach ($insumos as $insumo)
                                        <tr>
                                        <th class="text-left">{{$insumo->nombre_insumo}}</th>
                                        @foreach ($rotacionesInsumos[$insumo->id_insumo] as $key => $item)               
                                            @foreach ($item as $rotacion)
                                                @if (!isset($rotacion)) 
                                                    <td class="text-center">0.00</td>
                                                @else
                                                    <td class="text-center">{{number_format(($rotacion->cantidad_consumida / $rotacion->cantidad_disponible)*100,2)}}%</td>
                                                @endif
                                            @endforeach                                           
                                        @endforeach
                                        </tr>
                                    @endforeach
                                @else
                                @foreach ($insumos as $insumo)
                                        <tr>
                                        <th class="text-left">{{$insumo->nombre_insumo}}</th>
                                        @foreach ($rotacionesInsumos[$insumo->id_insumo] as $key => $item)               
                                            @foreach ($item as $rotacion)
                                                @if (!isset($rotacion)) 
                                                    <td class="text-center">0.00</td>
                                                @else
                                                    <td class="text-center">{{$rotacion->cantidad_disponible}} {{$insumo->unidad_insumo}}</td>
                                                    <td class="text-center">{{$rotacion->cantidad_consumida}} {{$insumo->unidad_insumo}}</td>
                                                    <td class="text-center">{{number_format(($rotacion->cantidad_consumida / $rotacion->cantidad_disponible)*100,2)}}%</td>
                                                @endif
                                            @endforeach                                           
                                        @endforeach
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer small text-muted">  

                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-wrapper -->
</div>
@endsection

@section('js')
    <script>
        // Call the dataTables jQuery plugin
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
@endsection