<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Bicicut</title>
	    <meta charset="utf-8">
		<link rel="stylesheet" href="css/materialize.min.css">
		<link rel="stylesheet" href=" css/index.css">
		<link rel="icon" href="img/ico.png" sizes="16x16">
		<script src="{{asset('js/jquery.js')}}"> </script>
		<link rel="stylesheet" href="{{asset('css/map.css')}}">
	    <meta name="viewport" content="initial-scale=1.0">
	        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<script>
	      $(document).ready(function(){
	    $('.sidenav').sidenav();
	  });
        
</script>
	</head>
		<body>
			
		 <nav class="green-cut">
        <div class="nav-wrapper ">
<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <a href="{{route('welcome')}}" class="brand-logo center"><span class="grey-title">  Bici</span><span class="green-title">CUT </span></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            @if (Route::has('login'))
              @auth
               <li><a href="{{route('home')}}">Tiempo</a></li>
            @endauth
              <li><a href="{{route('mapa')}}">Mapa</a></li>
                <li><a href="{{route('como_funciona')}}">¿Como funciona?</a></li>
                <li><a href="{{route('ventajas')}}">Ventajas</a></li>
             
                        @auth
                              <li class="nav-item dropdown">
                               <a  href="{{route('profile',Auth::user()->slug)}}">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div>
                                  <li class="red">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Salir
                                    </a>
                                  </li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @else
                       <li><a href="{{ route('login') }}" >Iniciar sesion</a></li>
                            <li>/</li>
                            @if (Route::has('register'))
                             <li><a href="{{ route('register') }}">Registrarse</a></li>
                            @endif
                        @endauth
                   
                @endif
           

          </ul>
        </div>
      </nav>


<ul class="sidenav" id="mobile-demo">
    <li><a href="{{route('home')}}">Tiempo</a></li>
     <li><a href="{{route('mapa')}}">Mapa</a></li>
    <li><a href="{{route('como_funciona')}}">¿Como funciona?</a></li>
    <li><a href="{{route('ventajas')}}">Ventajas</a></li>
    @auth
    <li><a  href="{{route('profile',Auth::user()->slug)}}" >
                                    {{ Auth::user()->name }} 
                                </a></li>
    <li>
      <a class=" red colorwhite dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                          Salir 
     </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    </li>                      
    @else
   <li><a href="{{ route('login') }}" >Iniciar sesion</a></li>
        @if (Route::has('register'))
         <li><a href="{{ route('register') }}">Registrarse</a></li>
        @endif
    @endauth

  </ul>

	<div class="intro">
			<h1 class="center-align ">Ventajas</h1>
		</div>

		<div class="row">
			<div class="col m4 offset-m2 ">
				<h2 class="center-align">Ventaja de usar la app</h2>
				<ul class="collection with-header">
				       <li class="collection-header color-blue-1 colorwhite"><h4>General</h4></li>
				        <li class="collection-item">Ahorras tiempo</li>
				        <li class="collection-item">Sin costo</li>
				        <li class="collection-item">Facil Acceso</li>
				        <li class="collection-item">Intuitivo</li>
						<li class="collection-item">Accessible para todos</li>
						<li class="collection-item">Escalable</li>
				        
				      </ul>

			</div>
			<div class="col m4 ">
				 <h2 class="center-align">Ventaja de usar bici</h2>
				 <div class="	">
				 	<ul class="collection with-header">
				        <li class="collection-header color-blue-1 colorwhite"><h4>Salud</h4></li>
				        <li class="collection-item">disminuye el estres</li>
				        <li class="collection-item">Es una excelente forma de combatir la obesidad</li>
				        <li class="collection-item">mejora la cordinacion motriz</li>
				        <li class="collection-item">Tonifica los musclios</li>
				      </ul>
				      <ul class="collection with-header ">
				        <li class="collection-header color-green-1 colorwhite"><h4>medio Ambiente</h4></li>
				        <li class="collection-item">La bici no produce gases toxicos</li>
				        <li class="collection-item">Ocupa mucho espacio (16 bicis equivalen a un auto)</li>
				      </ul>
				 </div>
			</div>
		</div>
			

  @auth
  @else
  <div class="row">
    <div class="col s12 m7 offset-m3 ">
      <h2 class="center-align">¿por que aun no utlizas BiciCut?</h2>
      <a href="{{route('login')}}" class="btn block green-cut">Inicia sesion</a>
    </div>
  </div>
  
  
   @endauth
  <footer class="page-footer footer-bc ">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="footer-color">Centro Universitario de Tonala</h5>
                <p class="grey-text text-lighten-4">Av. Nuevo Periférico 555, Ejido San José Tatepozco, 45425 Tonalá, Jal.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="footer-color">Enlaces</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Contacta al encargado</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">twitter</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Pagina oficial</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2018 Copyright 
            <a class="footer-color text-lighten-4 right" href="#!">Luis Rojas</a>
            </div>
          </div>

	 <script src="js/materialize.min.js"></script>
		</body>
</html>													
