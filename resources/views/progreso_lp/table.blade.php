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
                   <h4 class="mb-4 mt-3 text-center">Informe de Progreso de Linea de Pedido</h4>
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
                                        <th>Producto</th>
                                        <th>Horas programadas</th>
                                        <th>Horas trabajadas</th>
                                        <th>Porcentaje de avance %</th>
                                        <th>Eficiencia alcanzada%</th>
                                        <th>Unidades del producto </th>

                                    
                                </tr>
                                
                            </thead>
                            
                            <tbody>
                               
                           
                                 @foreach ($productos as $producto)
                                   
                                    @foreach ($lineasPedidos as $lineaPedido)
                                            <tr>
                                            <th lass="text-center">{{$producto->nombre_producto}}</th>    
                                            <th lass="text-center">{{$lineaPedido->horas_programadas_total}}</th>
                                            <th lass="text-center">{{$lineaPedido->horas_trabajadas_total}}</th>
                                            <th lass="text-center">{{$lineaPedido->porcentaje_avance_total}}</th>
                                            <th lass="text-center">{{$lineaPedido->eficiencia_alcanzada}}</th>
                                            <th lass="text-center">{{$lineaPedido->cantidad_item_total}}</th>
                                     
                                    @endforeach
                                    </tr>
                                @endforeach
                                

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