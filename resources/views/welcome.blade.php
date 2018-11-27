@extends('layouts.app')

@section('content')

     <div class="parallax-container">
      <div class="parallax"><img src="img/modulo.jpg"></div>
    </div>
    <div class="section white">
      <div class="row container">
        <h2 class="header center-align">BiciCUT Access</h2>
        <p class="grey-text text-darken-3 lighten-3">
          <div class="row">
            <div class="col s12 m4 card box greens valign-wrapper center-align"  style="background-color: #55D6BE;">DIVERSION </div>
            <div class="col s12 m4 card box blues valign-wrapper center-align" style="background-color: #EF8354;">RECREACIÓN</div>
            <div class="col s12 m4 card box reds valign-wrapper center-align" style="background-color: #4F5D75;"> TIEMPO</div>
          </div>
          <h2 style="text-align: center;">Simples palabras que describen nuestro trabajo.</h2>
 <p style="text-align: justify;font-size: 1.5em;">
   Es interesante poder distraerte paseando en bicicleta por el campus, o simplemente usar ese medio de transporte  para llegar a tiempo a cualquier parte dentro del centro universitario, ¿no lo creen?
  Y si además de esto lo pudieras hacer de una manera fácil, intuitiva y amigable, mediante el uso de algo tan cotidiano como lo es nuestro celular, es aún más interesante.
  Con BiciCUT Access esto es posible.
  Para saber todo sobre nuestro sistema, te damos la bienvenida a nuestra web.
   
 </p>


        <div class="card z-depth-5">
        <h2 class="header center-align ">¿Que mas deseas saber?</h2>
            <div class="row">
                <div class="col s12 m4">


                   <div class="card">
                        <div class="card-image">
                          <img src="{{asset('img/news.png')}}">
                        </div>
                        <div class="card-action">
                          <a href="{{route('como_funciona')}}">¿Como Funciona?</a>
                        </div>
                      </div>


                </div>


                 <div class="col s12 m4">
                    
                   <div class="card">
                        <div class="card-image">
                          <img src="{{asset('img/world.png')}}">
                        </div>
                        <div class="card-action">
                          <a href="{{route('mapa')}}">Modulos Disponibles</a>
                        </div>
                      </div>
                </div>
                 <div class="col s12 m4">
                    
                   <div class="card">
                        <div class="card-image">
                          <img src="{{asset('img/office.png')}}">
                        </div>
                        <div class="card-action">
                          <a href="{{route('ventajas')}}" >Ventajas de usar BiciCut</a>
                        </div>
                      </div>
                </div>
               @auth
              @else
               <a href="{{route('login')}}" class="btn  block btn-success">Empezar a utilizarlo!</a>
  
              @endauth
            </div>      
        </div>
   
        <!--<img src="img/android.svg" alt="">-->
      </div>
    </div>
    <div class="parallax-container">
      <div class="parallax"><img src="img/cut.jpeg"></div>
    </div>




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
                  <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/centrouniversitariodetonala/">Facebook</a></li>
                  <li><a class="grey-text text-lighten-3" href="https://twitter.com/Cutonala_udg">twitter</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Pagina oficial</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2018 Copyright 
            <a class="footer-color text-lighten-4 right" href="https://www.facebook.com/profile.php?id=100009267220626">Luis Rojas</a>
            </div>
          </div>
        </footer>


       <script src="js/jquery.js"> </script>
       <script src="js/materialize.min.js"></script>
       <script> 
         $(document).ready(function(){
    $('.parallax').parallax();
  });
        
       </script>
@endsection
