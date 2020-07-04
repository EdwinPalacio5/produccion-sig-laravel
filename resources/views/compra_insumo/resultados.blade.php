@extends("../layouts.base")

@section('head')
    
@endsection

@section('main')
<div id="wrapper">
    <div id="content-wrapper">
        <div class="container-fluid">
            <h6 class="mb-4 mt-3 text-right">Fecha de consulta: <strong>{{$fecha}}</strong></h6>
            <div class="my-2 my-lg-2 text-center row">
                <div class="col-2"></div>
                <div class="col-2">
                    <img src="{{asset('./img/guayabera1.png')}}" width="70" class="d-inline-block align-top logo">
                </div>
                <div class="col-4"> 
                   <h4 class="mb-4 mt-3 text-center">La Guayabera S.A. de C.V.</h4>
                   <h4 class="mb-4 mt-3 text-center">Informe de Compras de Insumo</h4>
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
                    <h5 class="mb-4 mt-2 text-center">Año Inicial: <strong>{{$anio_inicial->anio}}</strong></h5>                    
                </div>
                <div class="col-2">
                    <h5 class="mb-4 mt-2 text-center">Año Final: <strong>{{$anio_final->anio}}</strong></h5>
                </div>
            </div>
            
            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    Informe
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="text-align: center;">
                            <thead>
                                <tr>
                                    <th rowspan="2">Insumo</th>
                                    @forelse ($anios as $anio)
                                        <th colspan="3"> {{$anio->anio}} </th>
                                    @empty
                                        <th colspan="3"> No se encuentra años de produccion </th>
                                    @endforelse  
                                </tr>
                                <tr>
                                    @forelse ($anios as $anio)
                                        <th>Unidades</th>
                                        <th>Precio promedio</th>
                                        <th>Compra total</th>
                                    @empty
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    @endforelse
                                </tr>   
                            </thead>
                            
                            <tbody>
                            @forelse ($insumos as $insumo)
                                <tr>    
                                    <td>{{$insumo->nombre_insumo}}</td>
                                    @forelse ($insumo->compras as $compra)
                                        <td>{{$compra->cantidad}}</td>
                                        <td>${{number_format($compra->total/$compra->cantidad,2)}}</td>
                                        <td>${{number_format($compra->total,2)}}</td>
                                    @empty
                                        <td>{{number_format(0,0)}}</td>
                                        <td>${{number_format(0.00,2)}}</td>
                                        <td>${{number_format(0.00,2)}}</td>
                                    @endforelse   
                                </tr>
                            @empty
                                 <tr>No se encuentran Insumos</tr>   
                            @endforelse
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
<!-- /#wrapper -->
@endsection

@section('js')
     <!--  JS --> 
    <script>
        // Call the dataTables jQuery plugin
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
@endsection