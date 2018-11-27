@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col m4 offset-m4 s12">
                <div class="card animated zoomIn center ">
                  <h3 id="titletime"style='color:blue;display: none;'>Tu tiempo</h3>
                    <h1 id="demo"></h1>
                        <div id="withoutBici" style="display: none;" class="center">
                            <img width="250" src="img/bici.png" alt="">
                            <h3>¿Aun no tienes bici?</h3>
                        <a href="{{route('mapa')}}" class="btn block green-cut">Descubrir el modulo mas cercano</a>
                        </div>
                </div>
            </div>
        </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>

        var fecha = `{{$now}}`;
        
        var limiteTiempo = new Date(fecha).getTime();
        var x = setInterval(function() {
        var TiempoActual = new Date().getTime();
        var diferenciaTiempo = limiteTiempo - TiempoActual;
        var minutos = Math.floor((diferenciaTiempo % (1000 * 60 * 60)) / (1000 * 60));
        var segundos = Math.floor((diferenciaTiempo % (1000 * 60)) / 1000);

        if(fecha && diferenciaTiempo > 0){
            $("#titletime").css('display','block');
            document.getElementById("demo").innerHTML = minutos + ":" + segundos;
        }else{
                $("#titletime").css('display','none');
                $("#demo").css('display','none');
                $("#withoutBici").css('display','block');
        }
    }, 1000);
    </script>

@endsection