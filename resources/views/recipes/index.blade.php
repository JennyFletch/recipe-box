@extends('layouts.app')

@section('content')

        <h1>Recipes</h1>

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