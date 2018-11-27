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
        <script src="{{ asset('js/materialize.min.js') }}"></script>

        <link rel="stylesheet" href="{{asset('css/map.css')}}">
        <meta name="viewport" content="initial-scale=1.0">
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script>
          $(document).ready(function(){
        $('.sidenav').sidenav();
      });
        
</script>
   

<style>
    body{
     background-size: cover;
     background-repeat: no-repeat;
    background-position: left;
     background-image: url({{ asset('img/cut.jpeg')   }});
    }
    #email{
        color:white;
    }
    #password{
        color:white;
    }
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
    <li><a href="/">Inicio</a></li>
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

  

<div class="container">
    <div class="row ">
        <div class="col offset-m3 m7 s12">
            <div class="card " style="background-color: rgba(0, 0, 0, 0.7);border: 7px solid white;" >
            <div class="center">
                
               <h2 class="center" style="color:white;">Entrar</h2>

                
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">Correo</label>

                            <div class="col s12">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>

                            <div class="col s12 ">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        Recordarme
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   Ingresar
                                </button>

                            </div>
                                <a class=" btn-link" href="{{ route('password.request') }}">
                                   ¿Olvidaste tu contraseña?
                                </a>
                        </div>
                    </form>
                </div>
            </div>
           
        </div>
    </div>
</div>

        </body>
</html>                                                 

