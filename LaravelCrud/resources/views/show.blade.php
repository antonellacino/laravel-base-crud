@extends('Layouts.main_layout')

@section('content')
<ul>
    <li>
        Nome: {{ $cagnolino['nome'] }}
    </li>
    <li>
        Tipo: {{ $cagnolino['tipo'] }}
    </li>
    <li>
        Altezza: {{ $cagnolino['altezza'] }}
    </li>
    <li class="margin_bottom">
        Peso: {{ $cagnolino['peso'] }}
    </li>
</ul>
@endsection
