@extends('layouts.app')

@section('content')

    <div class="singlerecipe-img">
        <img src="{{ asset('/images/'.$singlerecipe->image_url) }}" alt="{{ $singlerecipe->title }}" />
    </div>
    <h1>{{ $singlerecipe->title }}</h1>

    <p>
        @if( ($singlerecipe->category !== 'none of these') && ($singlerecipe->category !== '- select one -') )
            <a href="/recipes/filtered/{{ $singlerecipe->category }}" class="cat-button">{{ $singlerecipe->category }}</a>
        @endif
        @if( ($singlerecipe->diet !== 'none of these') && ($singlerecipe->diet !== '- select one -') )
            <a href="/recipes/filtered/{{ $singlerecipe->diet }}" class="cat-button">{{ $singlerecipe->diet }}</a>
        @endif
        @if( ($singlerecipe->tool !== 'none of these') && ($singlerecipe->tool !== '- select one -') )
            <a href="/recipes/filtered/{{ $singlerecipe->tool }}" class="cat-button">{{ $singlerecipe->tool }}</a>
        @endif
    </p>

    <h2>{{ $singlerecipe->short_description }}</h2>


    <div class="ingred-list">
        <h3>INGREDIENTS</h3>
        <p>~ Do a join to get ingredients! ~</p>
        <h3>INSTRUCTIONS</h3>
        <div class="single-instructions">
            {{ $singlerecipe->instructions }}
        </div>
    </div>
            

@endsection