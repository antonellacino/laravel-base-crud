@extends('Layouts.main_layout')

@section('content')

<div class="omino">
    <h2><a href="{{ route('createOmino')}}">Crea nuovo omino</a></h2>
    @foreach($omini as $omino)
    <ul>
        <li><a href="{{ route('showOmino',$omino['id']) }}">{{ $omino['firstname'] }} {{ $omino['lastname'] }}</a></li>
    </ul>
    @endforeach
</div>
@endsection
