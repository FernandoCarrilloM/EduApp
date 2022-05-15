@extends('layouts.main', ['activePage' => 'juegos', 'titlePage' => 'Juego de sumas'])

@section('content')
<head>
	<link rel="stylesheet" href="../css/estilo.css">
</head>
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
            <p class="card-category text-center">Juego nivel </p>
          </div>
          <div class="card-body">
            <h1>JUEGO DE SUMA</h1>
                <div class="container">
                    <div class="izquierdo">
                        <div class="container-operacion">
                            <span id="suma">9 + 9 =</span>
                            <span class="resultado" id="resultado"> </span>
                        </div>
                        
                    </div>
                    <div class="derecha">
                        <span id="op1" class="opcion" onclick="controlarRespuesta(this)">18</span>
                        <span id="op2" class="opcion" onclick="controlarRespuesta(this)">17</span>
                        <span id="op3" class="opcion" onclick="controlarRespuesta(this)">8</span>
                    </div>
                    
                </div>
                <br>
                <span class="msj" id="msj"></span>
                <br>
                <a href="{{ route('juegos.index') }}" class="btn btn-warning"> <i
                class="material-icons"></i>SALIR </a>
            <script src="../js1/script.js"></script>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection