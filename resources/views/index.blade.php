@extends("../layouts.base")
@section("head")
@section("css")
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
/>
@endsection


@section('main')
    <div class="row">
        <div class="col-9"></div>
            <a href="{{ route('etl') }}" class="btn btn-primary">Administracion de ETL</a>
        <div class="col-3"></div>
    </div>
    <div class="row mt-5 pt-5">
        <div class="animate__animated animate__bounceInUp col-md-6 ml-3 mr-3" >
            <h1 class="display-4">Sistema de Información Gerencial </h1>
            <p class="lead">
            Sistema  de Información Gerencial  en apoyo a la unidad de producción de la empresa textil "La Guayabera" S.A. de C.V.
            </p>
            <hr class="my-4">
            <p>El proyecto es desarrollado por <a href="#">FIA UES</a></p>
        </div>
        <div class="animate__animated animate__bounceInRight col-md-5 ml-3 mr-3">
        <img alt="" src="{{asset('./img/gerencial.svg')}}" style="max-width: 100%;">
        </div>
    </div>
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

