<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Mamá Secret') }}</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' >

  <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" >

  <!-- CSS Files -->
    <link href="{{ asset('css/bootstrap.min.css') }}"  rel="stylesheet" >
    <link href="{{ asset('css/material-kit.css?v=1.3.0') }}" rel="stylesheet">
    @yield ('styles')

</head>
<body class="index-page" style="background-color:#FFAFF8;background-size: cover; background-position: top center;">

  <nav class="navbar navbar-primary  navbar-color-on-scroll" style="background-color:#6F2385" id="sectionsNav">
      <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header" >
            <button type="button" class="navbar-toggle" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class= "navbar-brand" href="/">
                  <h3 style=" font-weight: 700;color:#FFFFFF ;">MAMÁ SECRET</h3>
                          
                
              </a>
          </div>

          <div class="collapse navbar-collapse" >  
            <ul class="nav navbar-nav navbar-right" style=" background-color:#6F2385" >
                  <li>
                      <a href="/productos">
                          <h3 style=" font-weight: 700;color:#FFFFFF ;">Productos</h3>
                      </a>
                  </li>

                  <li>
                    <a href="quienessomos" >
                      <h3 style=" font-weight: 700; color:#FFFFFF;"> ¿Quienés Somos?</h3>
                                </a>
                    
                    
                  </li>
                   <li>
                      <a href="contacto">
                          </i><h3 style=" font-weight: 700;color:#FFFFFF;"> Contactos</h3>
                      </a>        
                   </li>
                

                  

                  @if (Auth::guest())
                  <li><a href="{{ route('register') }}"> <h3 style=" font-weight: 700;color:#FFFFFF;">Iniciar Sesión</h3></a></li>
             
                  @else

                  <li>
                    <a href="{{ url('/logout') }}" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();"><h3 style=" font-weight: 700;color:#FFFFFF;">Cerrar Sesión</h3> </a>
                   <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display:none;">
                    {{ csrf_field() }}
                   </form>
                  </li>
                     @if (Auth::user()->role=='member')
                  <li>
                     <a href="perfilu"><h3 style=" font-weight: 700;color:#FFFFFF;">Perfil</h3> </a>

                  </li>
                     @else
                  <li>
                    <a href="perfil"><h3 style=" font-weight: 700;color:#FFFFFF;">Perfil</h3> </a>
                 
                   </li>
                  
                  @endif

                    @endif 

                   <li class="button-container">
                            <a href="carro">
                              <p></p>
                              <img src="{{asset('whitecart.png')}} ">
                              <span class="badge" >{{Session::has('cart') ? Session::get('cart')->totalQty: ''}}</span> 
                            </a>
                   </li>

            

               </ul>
          </div>
      </div>
  </nav>

    
    <!-- Styles -->

      <!-- Authentication Links -->
      
   

 
@yield ('content')




 

                        
  

    <!-- Scripts -->
  
   <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/material.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/ripples.min.js"></script>
    <script>
        $.material.init();
    </script>

<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>

<script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/material.min.js') }}"></script>

  <!--  Plugin for Date Time Picker and Full Calendar Plugin-->
  <script src="{{ asset('js/moment.min.js') }}" ></script>

  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{ asset('js/nouislider.min.js') }}" type="text/javascript"></script>

  <!--  Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="{{ asset('js/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>

  <!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="{{ asset('js/bootstrap-selectpicker.js') }}" type="text/javascript"></script>

  <!--  Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/  -->
  <script src="{{ asset('js/bootstrap-tagsinput.js') }}"></script>

  <!--  Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="{{ asset('js/jasny-bootstrap.min.js') }}"></script>





  <!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
  <script src="{{ asset('js/material-kit.js?v=1.3.0') }}" type="text/javascript"></script>

  <!-- Fixed Sidebar Nav - JS For Demo Purpose, Don't Include it in your project -->
  <script src="{{ asset('assets-for-demo/modernizr.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets-for-demo/vertical-nav.js') }}" type="text/javascript"></script>

  
  @yield ('scripts')
</body>
</html>
