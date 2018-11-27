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
        <div class="col offset-m3 m6 s12">
            <div class="center">
                <h2>Registrarse</h2>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Correo electronico</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="code" class="col-sm-4 col-form-label text-md-right">Codigo UDG</label>

                            <div class="col-md-6">
                                <input id="code" type="number" class="form-control{{ $errors->has('code') ? ' is-invalid' : '' }}" name="code" value="{{ old('code') }}" required autofocus>

                                @if ($errors->has('code'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="slug" class="col-sm-4 col-form-label text-md-right">URL Amigable</label>

                            <div class="col-md-6">
                                <input id="slug" type="text" class="form-control{{ $errors->has('slug') ? ' is-invalid' : '' }}" name="slug" value="{{ old('slug') }}" required autofocus>

                                @if ($errors->has('slug'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('slug') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmar Contraseña</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

  
</html>                                                 
