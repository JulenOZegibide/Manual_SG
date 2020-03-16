{{--<nav class="navbar navbar-dark bg-dark " id="navbar">--}}

{{--    <div class="collapse navbar-collapse d-flex justify-content-around" id="navbarSupportedContent">--}}
{{--        <a href="https://www.sgevo.com/">--}}
{{--             <img id="logo" src="{{secure_asset('img/logo-sintra.jpg')}}"  alt="logo" id="logo">--}}
{{--        </a>--}}

{{--        <div class="d-flex" id="dropdowns">--}}
{{--            <a href="/" id="inicio">Inicio</a>--}}
{{--            <div class="dropdown">--}}
{{--                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">WontaW EVO--}}
{{--                    <span class="caret"></span></button>--}}
{{--                <ul class="dropdown-menu submenu">--}}
{{--                    @foreach($paginasWontaW as $paginaWontaW)--}}
{{--                    <li><a href="/tema/{{$paginaWontaW->id}}">{{$paginaWontaW->titulo}}</a></li>--}}
{{--                    @endforeach--}}

{{--                </ul>--}}
{{--            </div>--}}

{{--            <div class="dropdown">--}}
{{--                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">WontaGes EVO--}}
{{--                    <span class="caret"></span></button>--}}
{{--                <ul class="dropdown-menu submenu">--}}
{{--                    @foreach($paginasWontaGes as $paginaWontaGes)--}}
{{--                        <li><a href="/tema/{{$paginaWontaGes->id}}">{{$paginaWontaGes->titulo}}</a></li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <form class="form-inline my-2 my-lg-0"  action="{{route('index.buscar')}}">--}}
{{--            @csrf--}}
{{--            <input class="form-control mr-sm-2" type="search" name="buscar" placeholder="Search" aria-label="Search">--}}
{{--            <button class="btn btn-outline-info my-2 my-sm-0" type="submit" id="botonbuscar">Buscar</button>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--</nav>--}}

{{--@foreach($circuitos as $circuito)
    @php
        $primernivel = \App\Circuito::select('*')->where('nivel' , '=' , 1)->where('id','=',$circuito->id)->get();

    @endphp
    @foreach($primernivel as $circuitonvl1)
        @php
            $segundonivel = \App\Circuito::select('*')->where('nivel' , '=' , 2)->where('padre','=',$circuitonvl1->id)->get();
        @endphp
    <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">{{$circuitonvl1->titulo}}
            <span class="caret"></span></button>

        <ul class="dropdown-menu">
            @foreach($segundonivel as $circuitonvl2)
            <li class="dropdown-submenu">
                <a class="test" tabindex="-1" href="#">{{$circuitonvl2->titulo}} <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a tabindex="-1" href="#">2nd level dropdown</a></li>
                    <li><a tabindex="-1" href="#">2nd level dropdown</a></li>
                    <li class="dropdown-submenu">
                        <a class="test" href="#">Another dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">3rd level dropdown</a></li>
                            <li><a href="#">3rd level dropdown</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            @endforeach
        </ul>

    </div>
    @endforeach
@endforeach

</body>
</html>--}}

{{--

@foreach($circuitos as $circuito)
    @php
        $primernivel = \App\Circuito::select('*')->where('nivel' , '=' , 1)->where('id','=',$circuito->id)->get();

    @endphp
    @foreach($primernivel as $circuitonvl1)
        @php
            $segundonivel = \App\Circuito::select('*')->where('nivel' , '=' , 2)->where('padre','=',$circuitonvl1->id)->get();
        @endphp
<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{$circuitonvl1->titulo}}
    </button>
    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
        @foreach($segundonivel as $circuitonvl2)
            @php
                $tercernivel = \App\Circuito::select('*')->where('nivel' , '=' , 3)->where('padre','=',$circuitonvl2->id)->get();
            @endphp
        <li class="dropdown-submenu">
            <a  class="dropdown-item" tabindex="-1" href="#">{{$circuitonvl2->titulo}}</a>
            <ul class="dropdown-menu">
                @foreach($tercernivel as $circuitonvl3)
                    @php
                        $cuartonivel = \App\Circuito::select('*')->where('nivel' , '=' , 4)->where('padre','=',$circuitonvl3->id)->get();
                    @endphp
                <li class="dropdown-submenu">
                    <a class="dropdown-item" href="#">{{$circuitonvl3->titulo}}</a>
                    <ul class="dropdown-menu">
                        @foreach($cuartonivel as $circuitonvl4)
                        <li class="dropdown-submenu"><a class="dropdown-item" href="#">{{$circuitonvl4->titulo}}</a></li>
                        @endforeach
                    </ul>
                </li>
                @endforeach
            </ul>
        </li>
            @endforeach
    </ul>
</div>
    @endforeach
@endforeach
--}}



    <script type="text/javascript">


        var mymenu=new drilldownmenu({
            menuid: 'drillmenu1',
            breadcrumbid: 'drillcrumb',
            persist: {enable: true, overrideselectedul: true}
        })

    </script>


<body>


<div id="drillmenu1" class="drillmenu" style="min-height: 100%">
    <ul style="min-height: 100vh">
        @foreach($circuitos as $circuito)
            @php
                $primernivel = \App\Circuito::select('*')->where('nivel' , '=' , 1)->where('id','=',$circuito->id)->get();

            @endphp
            @foreach($primernivel as $circuitonvl1)
                @php
                    $segundonivel = \App\Circuito::select('*')->where('nivel' , '=' , 2)->where('padre','=',$circuitonvl1->id)->get();
                @endphp
        <li><a href="#">{{$circuitonvl1->titulo}}</a>
            <ul>
                @foreach($segundonivel as $circuitonvl2)
                    @php
                        $tercernivel = \App\Circuito::select('*')->where('nivel' , '=' , 3)->where('padre','=',$circuitonvl2->id)->get();
                    @endphp
                <li><a href="#">{{$circuitonvl2->titulo}}</a>
                    <ul>
                        @foreach($tercernivel as $circuitonvl3)
                            @php
                                $cuartonivel = \App\Circuito::select('*')->where('nivel' , '=' , 4)->where('padre','=',$circuitonvl3->id)->get();
                            @endphp
                        <li><a href="#">{{$circuitonvl3->titulo}}</a>
                            <ul>
                                @if(sizeof($cuartonivel) == 0)
                                    @php
                                    $paginas = \App\Pagina::select('*')->where('circuito_id' , '=' , $circuitonvl3->id)->get();
                                    @endphp
                                    @foreach($paginas as $pagina)
                                    <li><a href="/tema/{{$pagina->id}}">{{$pagina->titulo}}</a></li>
                                    @endforeach
                                @else
                                    @foreach($cuartonivel as $circuitonvl4)
                                        @php
                                            $quintonivel = \App\Circuito::select('*')->where('nivel' , '=' , 5)->where('padre','=',$circuitonvl4->id)->get();
                                        @endphp
                                        <li><a href="#">{{$circuitonvl4->titulo}}</a></li>
                                    @endforeach
                                @endif


                            </ul>
                        </li>
                        @endforeach
                    </ul>
                </li>
                @endforeach
            </ul>
        </li>
        @endforeach
        @endforeach
    </ul>

</div>


