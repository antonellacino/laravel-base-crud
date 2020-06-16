@extends('main_layout')
@section('content')
    <ul>
        @foreach($cagnolini as $cagnolino)
        <li>
            Nome: {{ $cagnolino['nome'] }}
        </li>
        <li class="margin_bottom">
            Tipo: {{ $cagnolino['tipo'] }}
        </li>
        @endforeach
    </ul>
@endsection
