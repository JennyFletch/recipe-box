@extends('layouts.app')

@section('content')

        <h1>Recipes</h1>

        <div class="p-4">
                <a href="/recipes/new">Add New</a>
        </div>

        <div class="recipe-list">

                @foreach( $recipes->reverse() as $recipe )

                <div class="recipe-card">
                        @if( !($recipe->image_url === 'none') ) 
                                <div class="feat-image">
                                        <img src="{{ asset('/images/'.$recipe->image_url) }}" alt="{{ $recipe->title }}" />
                                </div>
                        @endif
                        <div class="feat-info">
                                <h3><a href="/recipes/{{ $recipe->id }}">{{ $recipe->title }}</a><h3>
                                <div class="recipe-desc">{{ $recipe->short_description }}</div>
                                <div class="pt-4">
                                        <p class="smalltxt">Filed under: 
                                                @if( ($recipe->category !== 'none of these') && ($recipe->category !== '- select one -') )
                                                        {{ $recipe->category }} 
                                                @endif
                                                @if( ($recipe->diet !== 'none of these') && ($recipe->diet !== '- select one -') )
                                                        {{ $recipe->diet }} 
                                                @endif
                                                @if( ($recipe->tool !== 'none of these') && ($recipe->tool !== '- select one -') )
                                                        {{ $recipe->tool }} 
                                                @endif
                                        </p>
                                </div>
                        </div>
                </div>

                @endforeach

        </ul>

@endsection