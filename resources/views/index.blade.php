@extends("../layouts.base")
@section("head")
@section("css")
    <!--  CSS --> 
@endsection


@section('main')
    <div id="wrapper">
        <div id="content-wrapper">
            <div class="container-fluid">
                <h5 class="mb-4 mt-3">Ejemplo de Datatable</h5>
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
                                        <th colspan="3"> 2018 </th>
                                        <th colspan="3">2019</th>
                                        <th colspan="3">2020</th>
                                    </tr>
                                    <tr>
                                        
                                        <th>Unidades</th>
                                        <th>Precio promedio</th>
                                        <th>Compra total</th>
                                        <th>Unidades</th>
                                        <th>Precio promedio</th>
                                        <th>Compra total</th>
                                        <th>Unidades</th>
                                        <th>Precio promedio</th>
                                        <th>Compra total</th>
                                    </tr>
                                    
                                </thead>
                                
                                <tbody>
                                    <tr>
                                        <td>Algodon</td>
                                        <td>5000</td>
                                        <td>$0.10</td>
                                        <td>$500.00</td>
                                        <td>6000</td>
                                        <td>$0.10</td>
                                        <td>$600.00</td>
                                        <td>7000</td>
                                        <td>$0.10</td>
                                        <td>$700.00</td>
                                    </tr>
                                    <tr>
                                        <td>Hilo</td>
                                        <td>1000</td>
                                        <td>$0.10</td>
                                        <td>$100.00</td>
                                        <td>6000</td>
                                        <td>$0.10</td>
                                        <td>600.00</td>
                                        <td>7000</td>
                                        <td>$0.10</td>
                                        <td>$700.00</td>
                                    
                                    </tr>
                                    <tr>
                                        <td>Hilo</td>
                                        <td>1000</td>
                                        <td>$0.10</td>
                                        <td>$100.00</td>
                                        <td>6000</td>
                                        <td>$0.10</td>
                                        <td>600.00</td>
                                        <td>7000</td>
                                        <td>$0.10</td>
                                        <td>$700.00</td>
                                    
                                    </tr>
                                    <tr>
                                        <td>Hilo</td>
                                        <td>1000</td>
                                        <td>$0.10</td>
                                        <td>$100.00</td>
                                        <td>6000</td>
                                        <td>$0.10</td>
                                        <td>600.00</td>
                                        <td>7000</td>
                                        <td>$0.10</td>
                                        <td>$700.00</td>
                                    
                                    </tr>
                                    <tr>
                                        <td>Hilo</td>
                                        <td>1000</td>
                                        <td>$0.10</td>
                                        <td>$100.00</td>
                                        <td>6000</td>
                                        <td>$0.10</td>
                                        <td>600.00</td>
                                        <td>7000</td>
                                        <td>$0.10</td>
                                        <td>$700.00</td>
                                    
                                    </tr>
                                    <tr>
                                        <td>Hilo</td>
                                        <td>1000</td>
                                        <td>$0.10</td>
                                        <td>$100.00</td>
                                        <td>6000</td>
                                        <td>$0.10</td>
                                        <td>600.00</td>
                                        <td>7000</td>
                                        <td>$0.10</td>
                                        <td>$700.00</td>
                                    
                                    </tr>
                                    <tr>
                                        <td>Hilo</td>
                                        <td>1000</td>
                                        <td>$0.10</td>
                                        <td>$100.00</td>
                                        <td>6000</td>
                                        <td>$0.10</td>
                                        <td>600.00</td>
                                        <td>7000</td>
                                        <td>$0.10</td>
                                        <td>$700.00</td>
                                    
                                    </tr>
                                    <tr>
                                        <td>Hilo</td>
                                        <td>1000</td>
                                        <td>$0.10</td>
                                        <td>$100.00</td>
                                        <td>6000</td>
                                        <td>$0.10</td>
                                        <td>600.00</td>
                                        <td>7000</td>
                                        <td>$0.10</td>
                                        <td>$700.00</td>
                                    
                                    </tr>
                                    <tr>
                                        <td>Hilo</td>
                                        <td>1000</td>
                                        <td>$0.10</td>
                                        <td>$100.00</td>
                                        <td>6000</td>
                                        <td>$0.10</td>
                                        <td>600.00</td>
                                        <td>7000</td>
                                        <td>$0.10</td>
                                        <td>$700.00</td>
                                    
                                    </tr>
                                    <tr>
                                        <td>Hilo</td>
                                        <td>1000</td>
                                        <td>$0.10</td>
                                        <td>$100.00</td>
                                        <td>6000</td>
                                        <td>$0.10</td>
                                        <td>600.00</td>
                                        <td>7000</td>
                                        <td>$0.10</td>
                                        <td>$700.00</td>
                                    
                                    </tr>
                                    <tr>
                                        <td>Hilo</td>
                                        <td>1000</td>
                                        <td>$0.10</td>
                                        <td>$100.00</td>
                                        <td>6000</td>
                                        <td>$0.10</td>
                                        <td>600.00</td>
                                        <td>7000</td>
                                        <td>$0.10</td>
                                        <td>$700.00</td>
                                    
                                    </tr>
                                    <tr>
                                        <td>Hilo</td>
                                        <td>1000</td>
                                        <td>$0.10</td>
                                        <td>$100.00</td>
                                        <td>6000</td>
                                        <td>$0.10</td>
                                        <td>600.00</td>
                                        <td>7000</td>
                                        <td>$0.10</td>
                                        <td>$700.00</td>
                                    
                                    </tr>
                                    <tr>
                                        <td>Hilo</td>
                                        <td>1000</td>
                                        <td>$0.10</td>
                                        <td>$100.00</td>
                                        <td>6000</td>
                                        <td>$0.10</td>
                                        <td>600.00</td>
                                        <td>7000</td>
                                        <td>$0.10</td>
                                        <td>$700.00</td>
                                    
                                    </tr>
                                    <tr>
                                        <td>Hilo</td>
                                        <td>1000</td>
                                        <td>$0.10</td>
                                        <td>$100.00</td>
                                        <td>6000</td>
                                        <td>$0.10</td>
                                        <td>600.00</td>
                                        <td>7000</td>
                                        <td>$0.10</td>
                                        <td>$700.00</td>
                                    
                                    </tr>
                                    <tr>
                                        <td>Hilo</td>
                                        <td>1000</td>
                                        <td>$0.10</td>
                                        <td>$100.00</td>
                                        <td>6000</td>
                                        <td>$0.10</td>
                                        <td>600.00</td>
                                        <td>7000</td>
                                        <td>$0.10</td>
                                        <td>$700.00</td>
                                    
                                    </tr>
                                    <tr>
                                        <td>Hilo</td>
                                        <td>1000</td>
                                        <td>$0.10</td>
                                        <td>$100.00</td>
                                        <td>6000</td>
                                        <td>$0.10</td>
                                        <td>600.00</td>
                                        <td>7000</td>
                                        <td>$0.10</td>
                                        <td>$700.00</td>
                                    
                                    </tr>
                                    <tr>
                                        <td>Hilo</td>
                                        <td>1000</td>
                                        <td>$0.10</td>
                                        <td>$100.00</td>
                                        <td>6000</td>
                                        <td>$0.10</td>
                                        <td>600.00</td>
                                        <td>7000</td>
                                        <td>$0.10</td>
                                        <td>$700.00</td>
                                    
                                    </tr>
                                    <tr>
                                        <td>Hilo</td>
                                        <td>1000</td>
                                        <td>$0.10</td>
                                        <td>$100.00</td>
                                        <td>6000</td>
                                        <td>$0.10</td>
                                        <td>600.00</td>
                                        <td>7000</td>
                                        <td>$0.10</td>
                                        <td>$700.00</td>
                                    
                                    </tr>
                                    <tr>
                                        <td>Hilo</td>
                                        <td>1000</td>
                                        <td>$0.10</td>
                                        <td>$100.00</td>
                                        <td>6000</td>
                                        <td>$0.10</td>
                                        <td>600.00</td>
                                        <td>7000</td>
                                        <td>$0.10</td>
                                        <td>$700.00</td>
                                    
                                    </tr>
                                    <tr>
                                        <td>Hilo</td>
                                        <td>1000</td>
                                        <td>$0.10</td>
                                        <td>$100.00</td>
                                        <td>6000</td>
                                        <td>$0.10</td>
                                        <td>600.00</td>
                                        <td>7000</td>
                                        <td>$0.10</td>
                                        <td>$700.00</td>
                                    
                                    </tr>
                                    <tr>
                                        <td>Hilo</td>
                                        <td>1000</td>
                                        <td>$0.10</td>
                                        <td>$100.00</td>
                                        <td>6000</td>
                                        <td>$0.10</td>
                                        <td>600.00</td>
                                        <td>7000</td>
                                        <td>$0.10</td>
                                        <td>$700.00</td>
                                    
                                    </tr>
                                    <tr>
                                        <td>Hilo</td>
                                        <td>1000</td>
                                        <td>$0.10</td>
                                        <td>$100.00</td>
                                        <td>6000</td>
                                        <td>$0.10</td>
                                        <td>600.00</td>
                                        <td>7000</td>
                                        <td>$0.10</td>
                                        <td>$700.00</td>
                                    
                                    </tr>
                                    <tr>
                                        <td>Hilo</td>
                                        <td>1000</td>
                                        <td>$0.10</td>
                                        <td>$100.00</td>
                                        <td>6000</td>
                                        <td>$0.10</td>
                                        <td>600.00</td>
                                        <td>7000</td>
                                        <td>$0.10</td>
                                        <td>$700.00</td>
                                    
                                    </tr>
                                    <tr>
                                        <td>Hilo</td>
                                        <td>1000</td>
                                        <td>$0.10</td>
                                        <td>$100.00</td>
                                        <td>6000</td>
                                        <td>$0.10</td>
                                        <td>600.00</td>
                                        <td>7000</td>
                                        <td>$0.10</td>
                                        <td>$700.00</td>
                                    
                                    </tr>
                                    <tr>
                                        <td>Hilo</td>
                                        <td>1000</td>
                                        <td>$0.10</td>
                                        <td>$100.00</td>
                                        <td>6000</td>
                                        <td>$0.10</td>
                                        <td>600.00</td>
                                        <td>7000</td>
                                        <td>$0.10</td>
                                        <td>$700.00</td>
                                    
                                    </tr>
                                    <tr>
                                        <td>Hilo</td>
                                        <td>1000</td>
                                        <td>$0.10</td>
                                        <td>$100.00</td>
                                        <td>6000</td>
                                        <td>$0.10</td>
                                        <td>600.00</td>
                                        <td>7000</td>
                                        <td>$0.10</td>
                                        <td>$700.00</td>
                                    
                                    </tr>
                                    <tr>
                                        <td>Hilo</td>
                                        <td>1000</td>
                                        <td>$0.10</td>
                                        <td>$100.00</td>
                                        <td>6000</td>
                                        <td>$0.10</td>
                                        <td>600.00</td>
                                        <td>7000</td>
                                        <td>$0.10</td>
                                        <td>$700.00</td>
                                    
                                    </tr>
                                    <tr>
                                        <td>Hilo</td>
                                        <td>1000</td>
                                        <td>$0.10</td>
                                        <td>$100.00</td>
                                        <td>6000</td>
                                        <td>$0.10</td>
                                        <td>600.00</td>
                                        <td>7000</td>
                                        <td>$0.10</td>
                                        <td>$700.00</td>
                                    
                                    </tr>
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

