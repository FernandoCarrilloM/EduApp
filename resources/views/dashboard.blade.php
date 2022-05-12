@extends('layouts.main', ['activePage' => 'dashboard', 'titlePage' => __('Tablero')])

@section('content')
<style >
     body {
        background-image: url('../img/dash2.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
       }
  </style>
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">content_copy</i>
              </div>
              <p class="card-category">Tareas</p>
              <h3 class="card-title">15
              </h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons text-danger">more</i>
                <a href="#pablo">Mas detalles...</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">games</i>
              </div>
              <p class="card-category">Juegos</p>
              <h3 class="card-title">Sumas</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">update</i>Juego Pendiente 
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
              <div class="card-icon">
                <i class="material-icons">quiz</i>
              </div>
              <p class="card-category">Examen</p>
              <h3 class="card-title">Español</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">date_range</i> Proxima fecha
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
                <i class="material-icons">question_answer</i>
              </div>
              <p class="card-category">Foros</p>
              <h3 class="card-title">+2</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">question_answer</i>Unete
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card card-chart">
            <div class="card-header card-header-success">
              <div class="ct-chart" id="dailySalesChart"></div>
            </div>
            <div class="card-body">
              <h4 class="card-title">Seccion pendiente</h4>
              <p class="card-category">
                <span class="text-success">  </span> Estra una vista previa de la tarea</p>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">access_time</i> Pendiente
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-chart">
            <div class="card-header card-header-warning">
              <div class="ct-chart" id="websiteViewsChart"></div>
            </div>
            <div class="card-body">
              <h4 class="card-title">Otra seccion pendiente</h4>
              <p class="card-category">Aqui estarra lista de tareas pendientes</p>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">access_time</i> Pendiente
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-chart">
            <div class="card-header card-header-danger">
              <div class="ct-chart" id="completedTasksChart"></div>
            </div>
            <div class="card-body">
              <h4 class="card-title">Ya hare esta parte</h4>
              <p class="card-category">Lo prometo</p>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">access_time</i> Saldra calificacion de examen
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
