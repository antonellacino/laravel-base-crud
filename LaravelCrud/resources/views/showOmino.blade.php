@extends('Layouts.main_layout')

@section('content')
<div class="omino">

    <ul>
        <li>Soggetto: {{ $omino['firstname'] }} {{ $omino['lastname'] }}</li>
        <li>Indirizzo: {{ $omino['code'] }} {{ $omino['address'] }}</li>
        <li>State: {{ $omino['state'] }}</li>
        <li>Telefono: {{ $omino['phone'] }}</li>
        <li>Ruolo:  {{ $omino['role'] }}</li>
        <span class="button"><a href="{{ route('editOmino',$omino['id']) }}" >Modifica Omino</a></span>
        <span class="button2"><a href="{{ route('destroyOmino',$omino['id']) }}">Elimina Omino</a></span>
    </ul>

</div>
@endsection
