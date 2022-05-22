@extends('layouts.main', ['activePage' => 'videos', 'titlePage' => 'Videos'])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10">
      <!-- Mostrar mensaje en post-->
        <div class="card m-0 ">
          <div class="card-header card-header-primary">
            <h4 class="card-title text-center">Videos</h4>
            <p class="card-category text-center">Lista de videos </p>
          </div>
          <div class="card-body">
          <div class="row">
                <div class="col-10 text-right">
                  <a href="{{ route('videos.create') }}" class="btn btn-sm btn-facebook">Añadir Video</a>
                </div>
              </div>
            <div class="table-responsive">
              <table class="table ">
                <thead class="text-primary">
                  <th> Vista previa </th>
                  <th> Nombre </th>
                  <th> Autor </th>
                  <th class="text-right"> Ver detalles </th>
                </thead>
                <tbody>
                  @forelse ($videos as $video)
                  <tr>
                    <td>
                      <img src="{{ asset($video->foto)}}" class="img-fluid img-thumbnail" width="120">
                    </td>
                    <td><b>{{ $video->nombre }}</b></td>
                    <td>{{ $video->autor }}</td>
                    <td class="td-actions text-center">
                      <a href="#" class="btn btn-warning"> <i
                          class="material-icons">receipt</i> </a>
                    </td>
                  </tr>
                  @empty
                  <tr>
                    <td colspan="2">Sin registros.</td>
                  </tr>
                  @endforelse
                </tbody>
              </table>
              <div class="card-footer mr-auto">
                  {{ $videos->links() }} 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection