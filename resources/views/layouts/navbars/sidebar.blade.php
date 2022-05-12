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
      <!--
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="false">
          <i><img style="width:25px" src="{{ asset('img/laravel.svg')}}"></i>
          <p>{{ __('Laravel Examples') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
-->
      <li class="nav-item{{ $activePage == 'users' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('users.index') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Compañeros') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'cuentos' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('cuentos.index') }}">
          <i class="material-icons">auto_stories</i>
            <p>{{ __('Cuentos') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'videos' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">switch_video</i>
          <p>{{ __('Videos') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'foros' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">supervisor_account</i>
            <p>{{ __('Foros') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'examenes' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">quiz</i>
          <p>{{ __('Examenes') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'tareas' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">library_books</i>
          <p>{{ __('Tareas') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>
