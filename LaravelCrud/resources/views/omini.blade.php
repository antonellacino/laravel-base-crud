@extends('Layouts.main_layout')

@section('content')

<div class="omino">
    <h1>Omini</h1>
    <span class="button"><a href="{{ route('createOmino')}}">Crea nuovo omino</a></span>
    @foreach($omini as $omino)
    <ul>
        <li><a href="{{ route('showOmino',$omino['id']) }}">{{ $omino['firstname'] }} {{ $omino['lastname'] }}</a></li>
    </ul>
    @endforeach
</div>
@endsection
