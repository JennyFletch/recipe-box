<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Recipe Box - All the convenience of a countertop recipe box, minus the crumbs and splats.</title>

    </head>
    <body>

        <ul class="header-nav">

            @if (Route::has('login'))
                
                    @auth
                        <li><a href="{{ url('/dashboard') }}">dashboard</a></li>
                    @else
                        <li><a href="{{ route('login') }}">login</a></li>
                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}">register</a></li>
                        @endif
                    @endauth
                
            @endif

        </ul>

        <h1>Recipe Box <span>All the convenience of a countertop recipe box, minus the crumbs and splats.</span></h1>

        <ul class="navbar">
            <li><a href="./">HOME</li>
            <li><a href="./ingredients">INGREDIENTS</a></li>
            <li><a href="./recipes">RECIPES</a></li>
        </ul>


    </body>
</html>