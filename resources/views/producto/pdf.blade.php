<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        .page-break {
            page-break-after: always;
        }
        </style>
</head>
<body>
    <div id="wrapper">
        <div id="content-wrapper">
            <div class="container-fluid">
                <h6 class="mb-4 mt-4 text-right">Fecha de consulta: <strong>{{$fecha}}</strong></h6>

                <div style="display:flex;margin-left: 25%;">
                    <div class="mt-3"><img src="{{ public_path('/img/guayabera1.png') }}" width="60" class="d-inline-block logo"></div>
                    <div> 
                       <h4 style="margin-left: 21%;">La Guayabera S.A. de C.V.</h4>
                       <h4 class="mt-3" style="margin-left: 8%;">Cantidad demandada de productos por cada año</h4>
                       <h4 class="mt-3" style="margin-left: 22%;">Desde: {{ date('Y', strtotime($fecha_inicial)) }} hasta: {{ $fecha_f }}</h4>
                    </div>
                </div>

                <!-- DataTables Example -->
                <div class="card">
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
</body>

<script>
    // Call the dataTables jQuery plugin
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>

</html>
    <!--  JS --> 

