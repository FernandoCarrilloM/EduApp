@extends('layouts.main', ['activePage' => 'matematicas', 'titlePage' => 'Juegos'])

@section('content')
<style >
     body {
        background-image: url('../img/cuentos.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
       }
  </style>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10">
      <!-- Mostrar mensaje en post-->
        <div class="card m-0 ">
          <div class="card-header card-header-primary">
            <h4 class="card-title text-center">Juegos</h4>
            <p class="card-category text-center">Lista de juegos</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table ">
                <thead class="text-primary">
                  <th> Nivel </th>
                  <th> Nombre </th>
                  <th> Actividad </th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                       1
                    </td>
                    <td><b>Sumas simples</b></td>
                    <td class="td-actions ">
                      <a href="{{ route('juegos.show') }}" class="btn btn-warning"> <i
                          class="material-icons">JUGAR</i> </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection