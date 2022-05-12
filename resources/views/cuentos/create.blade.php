@extends('layouts.main', ['activePage' => 'posts', 'titlePage' => 'Nuevo Post'])

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
              <h4 class="card-title">Post</h4>
              <p class="card-category">Resgistra a tu mascota extraviada</p>
            </div>
            <!--End header-->
            <!--Body-->
            <!--Nombre-->
            <div class="card-body">
              <div class="row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="nombre" planombreceholder="Ingrese el nombre de la mascota"
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
                <label for="genero" class="col-sm-2 col-form-label">Genero</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="genero" placeholder="Ingrese el nombre de la mascota"
                    autocomplete="off" autofocus>
                    <!--Validaciones-->
                    @if($errors->has('genero'))
                      <span class="error text-danger" for="input-name">{{ $errors->first('genero') }}</span>
                    @endif
                </div>
              </div>
              <!--paginas-->
            <div class="card-body">
              <div class="row">
                <label for="paginas" class="col-sm-2 col-form-label">Paginas</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="paginas" placeholder="Ingrese el nombre de la mascota"
                    autocomplete="off" autofocus>
                    <!--Validaciones-->
                    @if($errors->has('paginas'))
                      <span class="error text-danger" for="input-name">{{ $errors->first('paginas') }}</span>
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