@extends('Layouts.main_layout')
@section('content')
<H1>Cagnolini</H1>
    <ul>
        @foreach($cagnolini as $cagnolino)
        <li>Nome:
           <a href="{{route('show',$cagnolino['id'])}}">
             {{ $cagnolino['nome'] }}
            </a>
        </li>
        <li class="margin_bottom">
            Tipo: {{ $cagnolino['tipo'] }}
        </li>
        @endforeach
    </ul>
@endsection
