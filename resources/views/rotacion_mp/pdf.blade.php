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
                       <h4 class="mt-3" style="margin-left: 15%;">Informe de indice de rotacion</h4>
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
                        @if (count($rotacionesInsumos[$insumos[0]->id_insumo])>1)
                            <h5 class="mb-4 mt-2 text-center">Mes: <strong>Todos</strong></h5>
                        @else
                            <h5 class="mb-4 mt-2 text-center">Mes: <strong>{{key($rotacionesInsumos[$insumos[0]->id_insumo])}}</strong></h5>
                        @endif
                    </div>
                    <div style="display: inline-block;margin-right: 20%;">
                        <h5 class="mb-4 mt-2 mr-4 text-right">Año: <strong>{{$año->anio}}</strong></h5>
                    </div>
                </div>
                <!-- DataTables Example -->
                <div class="container-fluid">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="text-align: center;">
                        <thead>
                            
                               
                                @if (count($rotacionesInsumos[$insumos[0]->id_insumo])>1)
                                <tr>
                                <th rowspan="2">Insumo</th>
                                    @foreach ($rotacionesInsumos[$insumos[0]->id_insumo] as $key => $rotacion)
                                        <th >{{$key}}</th>                                        
                                    @endforeach
                                
                                </tr>
                                @endif 
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
                                    <th>{{$insumo->nombre_insumo}}</th>
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
            <!-- /.container-fluid -->
        </div>
        <!-- /.content-wrapper -->
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>