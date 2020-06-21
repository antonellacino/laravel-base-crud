@extends('Layouts.main_layout')

@section('content')
    <div class="omino">
        <form  class="flexColumn" action="{{ route('updateOmino',$omino['id']) }}">
            @csrf
            @method('POST')

            <label for="firstname">Name: <input name="firstname" value="{{ $omino['firstname'] }}"></label>


            <label for="lastname">Lastname: <input type="text" name="lastname" value="{{ $omino['lastname'] }}"></label>


            <label for="code">Code: <input type="text" name="code" value="{{ $omino['code'] }}"></label>


            <label for="address">Address: <input type="text" name="address" value="{{ $omino['address'] }}"></label>


            <label for="state">State: <input type="text" name="state" value="{{ $omino['state'] }}"></label>


            <label for="phone">Phone: <input type="text" name="phone" value="{{ $omino['phone'] }}"></label>


            <label for="role">Role: <input type="text" name="role" value="{{ $omino['role'] }}"></label>

            <input type="submit" name="submit" value="Modifica">

        </form>
    </div>
@endsection
