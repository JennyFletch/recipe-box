@extends('layouts.app')

@section('content')

        <h1>Recipes</h1>

        <div class="p-4">
                <a href="/recipes/new">Add New</a>
        </div>

        <ul>

                @foreach( $recipes as $recipe)

                <li>
                        <h3>{{ $recipe->title }}<h3>
                        <div class="recipe-listing">
                                {{ $recipe->instructions }}
                        </div>
                </li>

                @endforeach

        </ul>

@endsection