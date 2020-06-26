@extends("../layouts.base")

@section('head')

@endsection

@section('main')

<div id="wrapper">
    <div id="content-wrapper">
        <div class="container-fluid">
            @if (Session::has('mensaje'))
            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                <strong>{{Session::get('mensaje')}}</strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif
            <h5 class="mb-4 mt-3">Listado de Usuarios Registrados en el Sistema</h5>
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
                                    
                                    <th>Nombre de Usuario</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Acciones</th>
                                </tr>
                                
                            </thead>
                            
                            <tbody>
                                @forelse ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    @if ($user->is_user_block)
                                    <td><span class="badge badge-danger">BLoqueado</span></td>
                                    @else
                                    <td><span class="badge badge-success">Habilitado</span></td>
                                    @endif
                                    @if ($user->is_user_block)
                                    <td><a class="btn btn-primary" href="{{route('block_user', ['id'=>$user->id])}}">Desbloquear</a></td>
                                    @else
                                    <td><a class="btn btn-danger" href="{{route('block_user', ['id'=>$user->id])}}">Bloquear</a></td>
                                    @endif
                                </tr>
                                    
                                @empty
                                    <p>No users</p>
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

@endsection

@section('js')

@endsection 