@extends("../layouts.base")
@section("head")
@section("css")
    <!--  CSS --> 
@endsection


@section('main')

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

