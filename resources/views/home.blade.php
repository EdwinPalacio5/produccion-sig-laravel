@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <br><br>
                    
                    @if(auth()->user()->es_admin)
                    <div class="alert alert-success text-center ml-4 mr-4">Eres usuario administrador</div>
                    @endif

                    @if(auth()->user()->es_estrategico)
                    <div class="alert alert-success text-center ml-4 mr-4">Eres usuario estratégico</div>
                    @endif

                    @if(auth()->user()->es_tactico)
                    <div class="alert alert-success text-center ml-4 mr-4">Eres usuario táctico</div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
