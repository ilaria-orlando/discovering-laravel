@extends('layout')

@section('content')
    <div class="bg-light">

        <h1>Contact me</h1>
        <form method="post" action="/post">
            @csrf
            <label for="Name">Name:</label><br>
            <input type="text" name="Name"><br>
            @if ($errors->has('Name'))
                <div class="danger alert-danger">
                    {{$errors -> first('Name')}}
                </div>
            @endif
            <label for="Email">Email:</label><br>
            <input type="email" name="Email"><br>
            @if ($errors->has('Email'))
                <div class="danger alert-danger">
                    {{$errors -> first('Email')}}
                </div>
            @endif
            <label for="Message">Message:</label><br>
            <input type="text" name="Message"><br>
            @if ($errors->has('Message'))
                <div class="danger alert-danger">
                    {{$errors -> first('Message')}}
                </div>
            @endif
            <input type="submit" name="Submit">
        </form>

    </div>

@endsection
