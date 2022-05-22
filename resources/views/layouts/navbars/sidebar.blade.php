<style >
     .fondo {
        background-color: #5499C7;
       }
  </style>
<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="#" class="simple-text logo-normal" >
      <img src="imagenes/logo2.jpg" alt="">

    </a>
  </div>
  <div class="sidebar-wrapper fondo">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Tablero') }}</p>
        </a>
      </li>
      <!-- Menu desplegame-->
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#multimedia" aria-expanded="false">
          <i class="material-icons">perm_media</i>
          <p>{{ __('Multimedia') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="multimedia">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'videos' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('videos.index') }}">
                <i class="material-icons">movie</i>
                <span class="sidebar-normal">{{ __('Videos') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'cuentos' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('cuentos.index') }}">
                <i class="material-icons">auto_stories</i>
                <span class="sidebar-normal"> {{ __('Cuentos') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <!-- Finde menu desplegable-->
       <!-- Menu desplegame-->
       <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#comunidad" aria-expanded="false">
          <i class="material-icons">supervisor_account</i>
          <p>{{ __('Comunidad') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="comunidad">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'users' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('users.index') }}">
                <i class="material-icons">content_paste</i>
                <span class="sidebar-normal">{{ __('Compañeros') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <i class="material-icons">supervisor_account</i>
                <span class="sidebar-normal"> {{ __('Foros') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <!-- Finde menu desplegable-->
      <!-- Menu desplegame-->
      <li class="nav-item {{ ($activePage == 'juegos' || $activePage == 'juegos') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#juegos" aria-expanded="false">
          <i class="material-icons">library_books</i>
          <p>{{ __('Juegos') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="juegos">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'espanol' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <i class="material-icons">content_paste</i>
                <span class="sidebar-normal">{{ __('Español') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'matematicas' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('juegos.index') }}">
                <i class="material-icons">supervisor_account</i>
                <span class="sidebar-normal"> {{ __('Matematicas') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <!-- Finde menu desplegable-->
       <!-- Menu desplegame-->
       <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#examen" aria-expanded="false">
          <i class="material-icons">supervisor_account</i>
          <p>{{ __('Examenes') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="examen">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'espanol' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <i class="material-icons">content_paste</i>
                <span class="sidebar-normal">{{ __('Español') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <i class="material-icons">supervisor_account</i>
                <span class="sidebar-normal"> {{ __('Matematicas') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <!-- Finde menu desplegable-->
     
    </ul>
  </div>
</div>
