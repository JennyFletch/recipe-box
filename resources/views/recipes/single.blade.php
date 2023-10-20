@extends('layouts.app')

@section('content')

    <div class="singlerecipe-img">
        <img src="{{ asset('/images/'.$singlerecipe->image_url) }}" alt="{{ $singlerecipe->title }}" />
    </div>
    <h1>{{ $singlerecipe->title }}</h1>
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