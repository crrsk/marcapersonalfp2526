@extends('layouts.master')

@section('content')

<<<<<<< HEAD
    <div class="row m-4">

    <div class="col-sm-4">

        <img src="/images/mp-logo.png" style="height:200px"/>

    </div>
    <div class="col-sm-8">

        <p> Vista detalle proyecto {{$id}} </p>
        <p>{{$proyecto['nombre']}} es el nombre del proyecto</p>
        <p>{{$proyecto['docente_id']}} es el id del docente</p>
        <p>{{$proyecto['dominio']}} es el dominio del proyecto</p>
        <p><strong>Metadatos: </strong>
=======

    <div class="row m-4">

        <div class="col-sm-4">

            <img src="/images/mp-logo.png" style="height:200px"/>

        </div>
        <div class="col-sm-8">

            <h3><strong>Nombre: </strong>{{ $proyecto['nombre'] }}</h3>
            <h4><strong>Dominio: </strong>
                <a href="http://github.com/2DAW-CarlosIII/{{ $proyecto['dominio'] }}">
                    http://github.com/2DAW-CarlosIII/{{ $proyecto['dominio'] }}
                </a>
            </h4>
            <h4><strong>Docente: </strong>{{ $proyecto['docente_id'] }}</h4>
            <p><strong>Metadatos: </strong>
>>>>>>> c9e1976cd8207c87daae5a5f955e8e899160e80f
                <ul>
                    @foreach ($proyecto['metadatos'] as $indice => $metadato)
                        <li>{{ $indice }}: {{ $metadato }}</li>
                    @endforeach
                </ul>
            </p>
<<<<<<< HEAD
        <p>{{$calificacion}}</p>
        @if ($estadoBool)
            <button>Suspender Proyecto</button>
        @else
            <button style="background-color: blue">Aprobar Proyecto</button>
        @endif

        <div >
            <button style="background-color: black !important; margin-top:5px; margin-right:5px"><a href="http://marcapersonalfp.test/proyectos/">Volver al listado</a></button>
            <button style="background-color: black !important"><a href="http://marcapersonalfp.test/proyectos/edit/{{$id}}">Editar proyecto</a></button>
        </div>

    </div>
</div>
@stop
=======
            <p><strong>Estado: </strong>
                @if($proyecto['metadatos']['calificacion'] >= 5)
                    Proyecto aprobado
                @else
                    Proyecto suspenso
                @endif
            </p>
>>>>>>> c9e1976cd8207c87daae5a5f955e8e899160e80f

            @if($proyecto['metadatos']['calificacion'] >= 5)
                <a class="btn btn-danger" href="#">Suspender proyecto</a>
            @else
                <a class="btn btn-primary" href="#">Aprobar proyecto</a>
            @endif
            <a class="btn btn-warning" href="{{ action([App\Http\Controllers\ProyectosController::class, 'getEdit'], ['id' => $id]) }}">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                Editar proyecto
            </a>
            <a class="btn btn-outline-info" href="{{ action([App\Http\Controllers\ProyectosController::class, 'getIndex']) }}">
                Volver al listado
            </a>


        </div>
    </div>

@stop
