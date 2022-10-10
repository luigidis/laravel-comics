@extends('layouts.app')

@section('metaTitle', 'Home Page DC Comics')

@section('content')
    {{-- @dump($comic) --}}
    <div class="jumbotron-container">

    </div>
    <div>
        <div class="container">
            <div>
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
            </div>
            <div>
                <h2> {{ $comic['title'] }} </h2>
                <p> {{$comic['description'] }} </p>
            </div>


        </div>
    </div>
@endsection
