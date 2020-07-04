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
            <h6 class="mb-4 mt-3 text-right">Fecha de consulta: <strong>{{$fecha}}</strong></h6>
            <div style="display:flex;margin-left: 30%;">
                <div><img src="{{ public_path('/img/guayabera1.png') }}" width="70" class="d-inline-block align-top logo"></div>
                <div> 
                   <h4 style="margin-left: 15%;">La Guayabera S.A. de C.V.</h4>
                   <h4 class="mt-3" style="margin-left: 15%;">Informe de Compras de Insumo</h4>
                </div>
            </div>

            <div class="row" style="text-align:center;">
                <div style="display: inline-block;margin-left: 20%;">
                    <div class="col-10"></div>
                    @if (count($insumos)>1)
                        <h5 class="mb-4 mt-2 ml-4 text-left">Insumo: <strong>Todos</strong></h5>
                    @elseif(count($insumos)==1) 
                        <h5 class="mb-4 mt-2 ml-4 text-left">Insumo: <strong>{{$insumos[0]->nombre_insumo}}</strong></h5>
                    @endif
                </div>
                <div style="display: inline-block;">
                    <h5 class="mb-4 mt-2 text-center">Año Inicial: <strong>{{$anio_inicial->anio}}</strong></h5>
                </div>
                <div style="display: inline-block;margin-right: 20%;">
                    <h5 class="mb-4 mt-2 text-right">Año Final: <strong>{{$anio_final->anio}}</strong></h5>
                </div>
            </div>
            
            <!-- DataTables Example -->
            <div class="container-fluid">
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
    </div>
</div>
<!-- /#wrapper -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>