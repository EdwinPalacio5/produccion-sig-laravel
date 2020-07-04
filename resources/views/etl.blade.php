@extends("../layouts.base")

@section('head')
    
@endsection

@section('main')

    <div class="alert alert-success text-center" role="alert">
        <strong>ETL ROTACION DE INSUMOS Ejecutado Exitosamente!!</strong> Actualizado el dia 02/07/2020 10:50 am
    </div>
<div class="row">
    <div class="col-8 mt-4">
        <div class="row">

            <!--CARD-->
        <div class="card mr-4" style="width: 18rem;">
            <img alt="..." class="card-img-top" src="https://s3.amazonaws.com/s3.timetoast.com/public/uploads/photos/13296587/inventario.jpg">
                <div class="card-body mt-4">
                    <h5 class="card-title">
                        ETL DE INDICE DE ROTACION DE INSUMOS
                    </h5>
                    <p class="card-text">
                        El siguiente proceso de extraccion, tranformacion y carga de datos, afecta a las tablas de la base de datos gerencial relacionadas con la generacion del reporte INDICE DE ROTACION DE INSUMOS.

                    </p>
                    <a class="btn btn-primary mt-4" href="#">
                        EJECTURA ETL
                    </a>
                </div>
            </img>
        </div>
        <!--FIN CARD-->

        <!--CARD-->
        <div class="card mr-4 ml-4" style="width: 18rem;">
            <img alt="..." class="card-img-top" src="https://image.freepik.com/vector-gratis/concepto-diseno-plano-delgada-linea-trabajo-equipo_42186-200.jpg">
                <div class="card-body">
                    <h5 class="card-title">
                        ETL DE RESUMEN DE PROGRESO EN LINEA DE PRODUCTO
                    </h5>
                    <p class="card-text">
                        El siguiente proceso de extraccion, tranformacion y carga de datos, afecta a las tablas de la base de datos gerencial relacionadas con la generacion del reporte de RESUMEN DE PROGRESO DE LINEA DE PRODUCTO.
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
                            ETL Rotacion de Insumo
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
                            02-07-2020 10:50 am
                        </span>
                    </li>
                </ul>
            </li>
            <li class="list-group-item">
                <ul class="list-group">
                    <li class="list-group-item justify-content-between align-items-center">
                        <strong>
                            ETL Progreso de Linea de Producto
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
                            28-06-2020 03:50 pm
                        </span>
                    </li>
                </ul>
            </li>
            <li class="list-group-item">
                <ul class="list-group">
                    <li class="list-group-item justify-content-between align-items-center">
                        <strong>
                            ETL Rotacion de Insumo
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
                            20-06-2020 08:10 am
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
