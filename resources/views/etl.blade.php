@extends("../layouts.base")

@section('head')
    
@endsection

@section('main')

    <div class="alert alert-success text-center" role="alert">
        <strong>ETL COMPRA DE INSUMOS Ejecutado Exitosamente!!</strong> Actualizado el dia 03/07/2020 9:50 pm
    </div>
<div class="row">
    <div class="col-8 mt-4">
        <div class="row">

            <!--CARD-->
        <div class="card mr-4" style="width: 18rem;">
            <img alt="..." class="card-img-top" src="https://www.itechc.net/hs-fs/hubfs/Blog/img/Proceso%20de%20Compras.jpg?width=637&name=Proceso%20de%20Compras.jpg">
                <div class="card-body">
                    <h5 class="card-title">
                        ETL DE INFORME DE DEMANDA DE PRODUCTOS
                    </h5>
                    <p class="card-text">
                        El siguiente proceso de extraccion, tranformacion y carga de datos, afecta a las tablas de la base de datos gerencial relacionadas con la generacion del reporte de DEMANDA DE PRODUCTOS.

                    </p>
                    <a class="btn btn-primary" href="#">
                        EJECTURA ETL
                    </a>
                </div>
            </img>
        </div>
        <!--FIN CARD-->

        <!--CARD-->
        <div class="card mr-4 ml-4" style="width: 18rem;">
            <img alt="..." class="card-img-top" src="https://www.foromarketing.com/wp-content/uploads/2017/11/Simplificar-el-proceso-de-compra-reto-para-el-ecommerce.png" style="height: 13rem;">
                <div class="card-body">
                    <h5 class="card-title">
                        ETL DE INFORME DE COMPRA DE INSUMOS
                    </h5>
                    <p class="card-text">
                        El siguiente proceso de extraccion, tranformacion y carga de datos, afecta a las tablas de la base de datos gerencial relacionadas con la generacion del reporte de COMPRA DE INSUMOS.
                    </p>
                    <a class="btn btn-primary" href="#">
                        EJECUTAR ETL
                    </a>
                </div>
            </img>
        </div>
        <!--FIN CARD-->
        </div>
    </div>
    <div class="col-4 mt-4">
        <h5 class="text-center">
            Historial de ejecucion de ETL.
        </h5>
        <ul class="list-group">
            <li class="list-group-item">
                <ul class="list-group">
                    <li class="list-group-item justify-content-between align-items-center">
                        <strong>
                            ETL Compra de insumos
                        </strong>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Status de ejecucion
                        <span class="badge badge-success badge-pill">
                            Exito
                        </span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Fecha
                        <span class="badge badge-primary badge-pill">
                            03-07-2020 9:50 pm
                        </span>
                    </li>
                </ul>
            </li>
            <li class="list-group-item">
                <ul class="list-group">
                    <li class="list-group-item justify-content-between align-items-center">
                        <strong>
                            ETL Demanda de productos
                        </strong>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Status de ejecucion
                        <span class="badge badge-success badge-pill">
                            Exito
                        </span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Fecha
                        <span class="badge badge-primary badge-pill">
                            01-07-2020 11:57 pm
                        </span>
                    </li>
                </ul>
            </li>
            
        </ul>
    </div>
</div>
@endsection

@section('js')
    
@endsection
