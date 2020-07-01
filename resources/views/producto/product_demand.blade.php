@extends("../layouts.base")
@section("head")
@section("css")
    <!--  CSS --> 
@endsection


@section('main')
    <div id="wrapper">
        <div id="content-wrapper">
            <div class="container-fluid">
                <h5 class="mb-4 mt-3">Cantidad de productos demandados por cada Año</h5>
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
                                        <th>Producto\Año</th>
                                        @forelse ($anios as $anio)
                                            <th>{{ date('Y', strtotime($anio->fecha_entrega)) }}</th>
                                        @empty
                                            <option>No hay Años disponibles</option>
                                        @endforelse
                                    </tr>
                                    
                                </thead>
                                
                                <tbody>
                                    @forelse ($products_demand as $producto)
                                        <tr>
                                        <td> {{ $producto->nombre_producto }} </td>
                                        @forelse ($producto->lineas_pedido as $ln)
                                            <td> {{ $ln->cantidad_item_total }} </td>
                                        @empty
                                            <td>No hay lineas de pedido disponibles</td>
                                        @endforelse
                                        </tr>
                                    @empty
                                        <td>No hay Productos disponibles</td>
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

