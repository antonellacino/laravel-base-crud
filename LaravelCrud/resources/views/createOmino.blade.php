@extends('Layouts.main_layout')

@section('content')
    <div class="omino">
        <form  class="flexColumn" action="{{ route('storeOmino') }}">
            <label for="firstname">Name: <input name="firstname"></label>

            <label for="lastname">Lastname: <input type="text" name="lastname"></label>

            <label for="code">Code: <input type="text" name="code"></label>

            <label for="address">Address: <input type="text" name="address"></label>

            <label for="state">State: <input type="text" name="state"></label>

            <label for="phone">Phone: <input type="text" name="phone"></label>

            <label for="role">Role: <input type="text" name="role"></label>

            <input type="submit" name="submit" value="Crea">

        </form>
    </div>
@endsection
