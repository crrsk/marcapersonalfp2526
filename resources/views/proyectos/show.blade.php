@extends('layouts.master')

@section('content')


    <div class="row m-4">

        <div class="col-sm-4">

            <img src="/images/mp-logo.png" style="height:200px"/>

        </div>
        <div class="col-sm-8">

            <h3><strong>Nombre: </strong>{{ $proyecto->nombre }}</h3>
            <h4><strong>Dominio: </strong>
                <a href="http://github.com/2DAW-CarlosIII/{{ $proyecto->dominio }}">
                    http://github.com/2DAW-CarlosIII/{{ $proyecto->dominio }}
                </a>
            </h4>
            <h4><strong>Docente: </strong>{{ $proyecto->docente_id }}</h4>
            <p><strong>Metadatos: </strong>
                <ul>
                    @foreach ($proyecto->metadatos as $indice => $metadato)
                        <li>{{ $indice }}: {{ $metadato }}</li>
                    @endforeach
                </ul>
            </p>
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

          