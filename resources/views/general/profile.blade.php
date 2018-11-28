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
<style>
	
</style>
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
            @endauth              <li><a href="{{route('mapa')}}">Mapa</a></li>
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
			<h1 class="center-align ">{{$user->name}}</h1>
		</div>
		
		<div class="row">
			<div class="col offset-m3 m6 s12">
				<div class="card center">
					<h2>Informacion</h2>
					<p>Nombre :</p>	
					<p>{{$user->name}}</p>
					<p>URL Amigable:</p>	
					<p>{{$user->slug}}</p>
					<p>Codigo UDG</p>
					<p>{{$user->code}}</p>
					<p>Correo electronico</p>
					<p>{{$user->email}}</p>

				</div>
			</div>
		</div>
		
   
	 <script src="js/materialize.min.js"></script>
		</body>
</html>													
