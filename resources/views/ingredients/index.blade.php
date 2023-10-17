@extends('layouts.app')

@section('content')

    <h1>Ingredients</h1>

    <h2>Full List from DB:</h2>

    <ul>

        @foreach( $ingredients->sortBy('name') as $ingredient)

            <li>{{ $ingredient->name }}</li>

        @endforeach

    </ul>

@endsection