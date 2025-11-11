@extends("dopetrope.master")

@section('menu')
    @parent
    <p>¡¡ Hola {{ $nombre ?? '' }} !! </p>
@endsection
@section('content')
  <ul>
        @if (count($users) === 1)
            <li>Solo hay un usuario!</li>
        @elseif (count($users) > 1)
        <li> Hay muchos usuarios! </li>
            <ul>@include("users.usersList",["users"=>$users])</ul>
        @else
        <li>No hay ningún usuario :(</li>
        @endif

   </ul>
@endsection



