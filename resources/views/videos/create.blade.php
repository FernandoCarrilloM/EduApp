@extends('layouts.main', ['activePage' => 'videos', 'titlePage' => 'Nuevo video'])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form method="POST" action="{{ route('cuentos.store') }}" class="form-horizontal" enctype="multipart/form-data">
          @csrf
          <div class="card ">
            <!--Header-->
            <div class="card-header card-header-primary">
              <h4 class="card-title">Video</h4>
              <p class="card-category">Resgistra un nuevo video</p>
            </div>
            <!--End header-->
            <!--Body-->
            <!--Nombre-->
            <div class="card-body">
              <div class="row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="nombre" planombreceholder="Ingrese el nombre del video"
                    autocomplete="off" autofocus>
                    <!--Validaciones-->
                    @if($errors->has('nombre'))
                      <span class="error text-danger" for="input-name">{{ $errors->first('nombre') }}</span>
                    @endif
                </div>
              </div>
              <!--genero-->
            <div class="card-body">
              <div class="row">
                <label for="duracion" class="col-sm-2 col-form-label">Duracion</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="duracion" placeholder="Ingrese la duracion del video"
                    autocomplete="off" autofocus>
                    <!--Validaciones-->
                    @if($errors->has('duracion'))
                      <span class="error text-danger" for="input-name">{{ $errors->first('duracion') }}</span>
                    @endif
                </div>
              </div>
              <!--paginas-->
            <div class="card-body">
              <div class="row">
                <label for="materia" class="col-sm-2 col-form-label">Materia</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="materia" placeholder="Ingrese a que materia pertenece"
                    autocomplete="off" autofocus>
                    <!--Validaciones-->
                    @if($errors->has('materia'))
                      <span class="error text-danger" for="input-name">{{ $errors->first('materia') }}</span>
                    @endif
                </div>
              </div>
              <!--autor-->
            <div class="card-body">
              <div class="row">
                <label for="autor" class="col-sm-2 col-form-label">Autor</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="autor" placeholder="Ingrese el nombre de la mascota"
                    autocomplete="off" autofocus>
                    <!--Validaciones-->
                    @if($errors->has('autor'))
                      <span class="error text-danger" for="input-name">{{ $errors->first('autor') }}</span>
                    @endif
                </div>
              </div>
              <!--foto-->
              <div class="row">
                <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                <div class="col-sm-7">
                  <input type="file" class="form-control" name="foto"
                    autocomplete="off" accept="image/*"> <!--Validamos que solo acepte archivos tipo imagen png,jpg,jpeg,etc-->
                    <!--Validaciones-->
                    @if($errors->has('foto'))
                      <span class="error text-danger" for="input-name">{{ $errors->first('foto') }}</span>
                    @endif
                </div>
              </div>
              
              
            </div>

            <!--End body-->

            <!--Footer-->
            <div class="card-footer ml-auto mr-auto">
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            <!--End footer-->
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection