@extends('layouts.app')

@section('content')

    <h1>Recipe Box <span class="d-block font-size-xs">All the convenience of a countertop recipe box, minus the crumbs and splats.</span></h1>

    <ul class="header-nav">

        <!-- @if (Route::has('login'))
                @auth
                    <li><a href="{{ url('/dashboard') }}">dashboard</a></li>
                @else
                    <li><a href="{{ route('login') }}">login</a></li>
                    @if (Route::has('register'))
                        <li><a href="{{ route('register') }}">register</a></li>
                    @endif
                @endauth
        @endif -->

    </ul>

@endsection