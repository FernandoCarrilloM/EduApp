@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Compañeros'])
@section('content')
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title">Alumnos</h4>
                    <p class="card-category">Alumnos registrados</p>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table">
                        <thead class="text-primary">
                          <th>Posicion</th>
                          <th>Nombre</th>
                          <th>Correo</th>
                          <th>Puntos</th>
                          <th>Ver detalles</th>
                        </thead>
                        <tbody>
                          <?php 
                            $index = 1;
                          ?>
                          @foreach ($users as $user)
                            <tr>
                              <td>{{ $index }}</td>
                              <td>{{ $user->name }}</td>
                              <td>{{ $user->email }}</td>
                              <td>{{ $user->puntos }}</td>
                              <td>
                              <a href="{{ route('users.show', $user->id) }}" class="btn btn-info"><i class="material-icons">person</i></a>
                              </td>
                            </tr>
                            <?php 
                              $index++;
                            ?>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
