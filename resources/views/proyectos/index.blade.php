@extends('layouts.master')

@section('content')

<<<<<<< HEAD
   <div class="row">

        @foreach ($proyectos as $key => $proyecto)

        <div class="col-4 col-6-medium col-12-small">
            <section class="box">
                <a href="#" class="image featured"><img src="{{ asset('/images/mp-logo.png') }}" alt="" /></a>
                <header>
                    <h3>{{ $proyecto['nombre'] }}</h3>
                </header>
                <p>
                    <a href="http://github.com/2DAW-CarlosIII/{{ $proyecto['dominio'] }}">
                        http://github.com/2DAW-CarlosIII/{{ $proyecto['dominio'] }}
                    </a>
                </p>
                <footer>
                    <ul class="actions">
                        <li><a href="{{ action([App\Http\Controllers\ProyectosController::class, 'getShow'], ['id' => $key] ) }}" class="button alt">Más info</a></li>
                    </ul>
                </footer>
            </section>
        </div>

        @endforeach

    </div>
=======
    <div class="row">

    @foreach ($proyectos as $key => $proyecto)

    <div class="col-4 col-6-medium col-12-small">
        <section class="box">
            <a href="#" class="image featured"><img src="{{ asset('/images/mp-logo.png') }}" alt="" /></a>
            <header>
                <h3>{{ $proyecto['nombre'] }}</h3>
            </header>
            <p>
                <a href="http://github.com/2DAW-CarlosIII/{{ $proyecto['dominio'] }}">
                    http://github.com/2DAW-CarlosIII/{{ $proyecto['dominio'] }}
                </a>
            </p>
            <footer>
                <ul class="actions">
                    <li><a href="{{ action([App\Http\Controllers\ProyectosController::class, 'getShow'], ['id' => $key] ) }}" class="button alt">Más info</a></li>
                </ul>
            </footer>
        </section>
    </div>

    @endforeach

</div>
>>>>>>> c9e1976cd8207c87daae5a5f955e8e899160e80f

@stop
