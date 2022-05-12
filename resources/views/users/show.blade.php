@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Detalles del alumno'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-header-primary">
            <div class="card-title">Alumnos</div>
            <p class="card-category">Vista detallada del Alumno {{ $user->name }}</p>
            </div>
            <!--body-->
              <div class="col-md-10">
                <div class="card card-user">
                  <div class="card-body">
                    <p class="card-text">
                      <div class="author">
                        <a href="#" class="d-flex">
                          <img src="{{ asset('/img/default-avatar.png') }}" alt="image" class="avatar">
                          <h5 class="title mx-3">Nombre: {{ $user->name }}</h5>
                        </a>
                        <p class="description">
                          Telefono: {{ $user->telefono }} <br>
                          Puntos {{ $user->puntos }} <br>
                          Correo: {{ $user->email }} <br>
                          Creado: {{ $user->created_at }}
                        </p>
                      </div>
                    </p>
                    <div class="card-description">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam officia corporis molestiae aliquid provident
                      placeat.
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="button-container">
                      <a href="{{ route('users.index') }}" class="btn btn-sm btn-success mr-3"> Volver </a>
                    </div>
                  </div>
                </div>
              </div><!--end card user 2-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection