@extends('layouts.app')

@section('content')

        <h1>Recipes</h1>

        <div class="p-4">
                <a href="/recipes/new">Add New</a>
        </div>

        <ul class="recipe-list">

                @foreach( $recipes->reverse() as $recipe )

                <li class="flex flex-row">
                        @if( !($recipe->image_url === 'none') ) 
                                <div class="feat-image">
                                        <img src="{{ asset('/images/'.$recipe->image_url) }}" alt="{{ $recipe->title }}" />
                                </div>
                        @endif
                        <div class="feat-info">
                                <h3>{{ $recipe->title }}<h3>
                                <div class="recipe-desc">{{ $recipe->short_description }}</div>
                        </div>
                </li>

                @endforeach

        </ul>

@endsection