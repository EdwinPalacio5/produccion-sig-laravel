@extends("../layouts.base")

@section('head')

@endsection

@section('main')

<div class="container mt-5">
            <div class="row ml-5">
                <div class="col-md-1"></div>
                <div class="col-md-9">
                    <div class="card">
                      <div class="card-header">
                        <h5 class="card-title text-center">Editar de usuario</h5>
                      </div>
                      
                    <form action="{{ route('update_user')}}" method="post" novalidate> 
                      {{ csrf_field() }}
                      <input type="hidden" value="{{ $user->id }}" name="id">
                        <div class="card-body">

                          @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                  <ul>
                                    @foreach ($errors->all() as $error)
                                      <li>{{$error}}</li>
                                    @endforeach
                                  </ul>
                                </div>
                              @endif

                            <div class="form-group row ml-5">
                              <div class="col-sm-8 mb-3 mb-sm-0">
                                <label for="">Nombre del usuario*</label>
                                <input type="text" class="form-control form-control-user" name="name" value="{{ old('name', $user->name) }}" required>
                              </div>
                            </div>

                            <div class="form-group row ml-5">
                              <div class="col-sm-8 mb-3 mb-sm-0">
                                <label for="">Email*</label>
                                <input type="text" class="form-control form-control-user" name="email" value="{{ old('email', $user->email) }}" required>
                              </div>
                            </div>

                            <div class="form-group row ml-5">
                              <div class="col-sm-8 mb-3 mb-sm-0">
                                <label for="">Contraseña*</label>
                                <input type="password" class="form-control form-control-user" name="password" required>
                                <small class="text-muted"><i>Al no ingresa contrseña se conservará la misma*</i></small>
                              </div>
                            </div>

                            <div class="form-group row ml-5">
                              <div class="col-sm-8 mb-3 mb-sm-0">
                                <label for="">Seleccionar Rol*</label>
                                 <select class="form-control" style="width: 100%;" name="rol">
                                    @forelse ($rols as $rol)
                                      @if($rol->rol_id == $user->rol_id)
                                        <option value="{{$rol->rol_id}}" selected>{{$rol->rol}}</option>
                                      @else
                                        <option value="{{$rol->rol_id}}">{{$rol->rol}}</option>
                                      @endif
                                    @empty
                                      <option>No hay Roles disponibles</option>
                                    @endforelse
                                </select>
                              </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <a href="{{ route('usuarios') }}" class="btn btn-secondary mr-3" style="color:white;">Cancelar</a>
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>

@endsection

@section('js')

<script>
  setTimeout(function() {
    $(".alert").fadeOut();           
  },3000);
</script>

@endsection 