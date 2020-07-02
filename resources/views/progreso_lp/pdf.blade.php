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
                <h6 class="mt-3 text-right">Fecha de consulta: <strong>{{$fecha}}</strong></h6>
                <div style="display:flex;margin-left: 30%;">
                    <div><img src="{{ public_path('/img/guayabera1.png') }}" width="70" class="d-inline-block align-top logo"></div>
                    <div> 
                       <h4 style="margin-left: 15%;">La Guayabera S.A. de C.V.</h4>
                       <h4 class="mt-3" style="margin-left: 15%;">Informe de progreso por linea de pedido</h4>
                    </div>
                
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
            </div>
        </div>

                        </tbody>
                    </table>
                </div>
                        
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content-wrapper -->
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>