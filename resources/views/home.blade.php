@extends('layouts.app')

@section('metaTitle', 'Home Page DC Comics')

@section('content')
    <div class="bg-color-black">
        <div class="container">
            @forelse($comics as $comic)
            <div class="card">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                    <h3>{{ $comic['series'] }}</h3>
            </div>
            @empty
                <p>Non ci sono comics disponibili!</p>
            @endempty
        </div>
    </div>
    @endsection
    

