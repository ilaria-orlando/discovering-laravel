@extends('layout')

@section('content')
    <div class="bg-light">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h1>Contact me</h1>
        <form method="post" action="/post">
            @csrf
            <label for="Name">Name:</label><br>
            <input type="text" name="Name"><br>
            <label for="Email">Email:</label><br>
            <input type="email" name="Email"><br>
            <label for="Message">Message:</label><br>
            <input type="text" name="Message"><br>
            <input type="submit" name="Submit">
        </form>
    </div>

@endsection
