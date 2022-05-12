<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>EduApp
      </title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css1/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css1/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="imagenes/fevicon.png" type="imagenes/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css1/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="imagenes/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div  class="head_top">
            <div class="header">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                           <div class="center-desk">
                              <div class="logo">
                                 <a href="index.html"><img src="imagenes/logo6.jpg" alt="#" /></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                           </button>
                            <div class="collapse navbar-collapse" id="navbarsExample04">
                                @if (Route::has('login'))
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item">
                                        @auth
                                            <a class="nav-link" href="{{ url('/dashboard') }}">Tablero</a>
                                        </li>
                                        @else
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('login') }}">Iniciar sesion</a>
                                            </li>
                                            @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
                                            </li>
                                            @endif
                                        @endauth
                                    </ul>
                                    @endif
                                </div> 
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
            <!-- end header inner -->
            <!-- end header -->
            <!-- banner -->
            <section class="banner_main">
               <div class="container">
                  <div class="row d_flex">
                     <div class=" col-xl-8 col-lg-8 col-md-8 col-12-9">
                        <div class="text-bg">
                           <h1> <span class="azul1">EduApp</span> <br> <span class="white1">Aprende jugando</span></h1>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-4 col-md-4 col-12-3">
                     </div>
                  </div>
               </div>
            </section>
         </div>
      </header>
      <!-- end banner -->
      <!-- blog_main -->
      <div class="blog_main">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>NOSOTROS</h2>
                     <span>Esta pagina es parte de un proyecto escolar de la universidad</span>
                  </div>
               </div>
            </div>
            <!-- fist section -->
            <div class="row">
               <div class="col-md-12">
                  <div class="our_two_box">
                     <div class="row d_flex">
                       
                           <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                           <div class="our_img">
                              <figure><img src="imagenes/imagen1.jpg" alt="#"/></figure>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                           <div class="our_text_box">
                              <h3 class="awesome pa_wi">¿La mejor forma de aprende es jugando?</h3>
                              <p>Durante un largo tiempo, siempre he considerado que lo mas dificil de aprender es verle el lado divertido, aquel que nos emociona y motiva a seguir descubriendo. <br>"La educacion es el arma mas poderosa que puedes usar para cambiar el mundo" </p>
                              <div class="post_box padding_bottom1">
                                 <h4 class="flot_left1">Nelson Mandela ( 1918 - 2013) </h4>

                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
    <!-- end fist section -->


             <!-- three section -->
                     <div class="row">
                         <div class="col-md-6 padding_bottom2">
                           <div class="our_img">
                              <figure><img src="imagenes/imagen2.jpg" alt="#"/></figure>
                           </div>
                           <div class="our_text_box three_box">
                              
                              
                              <div class="post_box d_flex padding_top3">
                                 <h3 class="awesome padding_flot">Juegos de Matematicas</h3>
                              </div>
                              <p> Existen diferentes niveles de juegos en la materia de matematicas 
                                  donde el objetivo sera que el usuario aprende a resolver distintos ejercicios </p>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="our_img">
                              <figure><img src="imagenes/imagen3.png" alt="#"/></figure>
                           </div>
                           <div class="our_text_box three_box">
                             
                              
                              <div class="post_box d_flex padding_top3">
                                  <h3 class="awesome padding_flot">Juegos de otras materias</h3>
                              </div>
                              <p> Tambien habra juegos de otras materias para que el usuario  
                                  pueda explorar en otras ramas de la ciencia segun le guste algun tema 
                                  y dentro de este pueda aprender mas </p>
                           </div>
                        </div>
                     </div>
         </div>
      </div>
      <!-- end blog_main -->

        
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2022 Derechos reservados. Creado por NANO</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js1/jquery.min.js"></script>
      <script src="js1/popper.min.js"></script>
      <script src="js1/bootstrap.bundle.min.js"></script>
      <script src="js1/jquery-3.0.0.min.js"></script>
      
      <!-- sidebar -->
      <script src="js1/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js1/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>