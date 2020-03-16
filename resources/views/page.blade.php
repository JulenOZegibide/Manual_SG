<!--Hereda el layout que contiene los imports de css y js para hacerlo reutilizable -->
@extends('layout')
<!--Coje el codigo y lo introduce en el layout.blade donde pone 'yield('content')'-->
@section('content')


<h1>{{$pagina->titulo}}</h1>

<!--Se busca si existen bloques-->
@if($bloques)
    <!--Si existen bloques recorro el array de bloques que contiene la pagina-->
    @foreach($bloques as $bloque)

        <h4>{{$bloque->titulo}}</h4>

        <!--Recojo en la variable $columnas todas las columnas de un bloque el numero de columnas de un bloque en $numelementos-->
        @php
            $columnas = $bloque->columna;
                $numelementos = DB::table('columnas')
                ->select(DB::raw('count(*) as numcolumnas'))
                ->where('bloque_id' , '=' , $bloque->id)
                ->where('ancho','=',null)
                ->first();

                /*Recojo si hay alguna columna a la cual se le haya asignado un ancho y calculoel ancho restante para el resto de columnas*/
                $columnagrande = \App\Columna::select('*')->where('ancho','!=',null)->get();
                $ancho_columna = 100;
                foreach ($columnagrande as $bigcolumn){
                    $ancho_columna = $ancho_columna - $bigcolumn->ancho;
                }
                $ancho_columna = $ancho_columna/$numelementos->numcolumnas . '%';



        @endphp
        <div>
            <!--Recorro las columnas que contiene cada bloque-->
            @foreach($columnas as $columna)
            @php
                $elementos = $columna->elemento;
                /*foreach($elementos as $elementosuelto){
                    if($elementosuelto->ancho != null){
                        $elementoancho = $elementosuelto;
                    }
                    else{
                        $elementoancho = null;

                    }
                }*/
            @endphp
{{--            <div id="column_container" style="width: @if($elementoancho != null)'100%'@elseif($columna->ancho==null){{$ancho_columna}}@else {{$columna->ancho . '%'}} @endif;float: left">--}}
                <div id="column_container" style="width: @if($columna->ancho==null){{$ancho_columna}}@else {{$columna->ancho . '%'}} @endif;float: left">
                <strong>{{$columna->titulo}}</strong>

                <!--Recorro los elementos que contiene cada columna y los muestro-->
                @foreach($elementos as $elemento)
                    <!--Recibe el atributo tipo desde base de datos y dependiendo de lo que reciba crea una imagen,parrafo o video-->
                    @switch($elemento->tipo)
                        @case('img')
{{--                        <img src="{{$elemento->contenido}}" style="width: {{$elemento->ancho  ?? '80%'}};height: auto;align-self: center">--}}
                            <img src="{{$elemento->contenido}}" style="width: 80% ;height: auto;align-self: center">
                        @break
                        @case('p')
                        <p>{{$elemento->contenido}}</p>
                        @break
                        @case('video')
                        <iframe src="{{$elemento->contenido}}" frameborder="0" allowfullscreen></iframe>
                        @break
                    @endswitch
                @endforeach
            </div>
            @endforeach
        </div>


    @endforeach
@endif

@endsection
