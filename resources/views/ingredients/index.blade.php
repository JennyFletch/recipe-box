<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Recipe Box - All the convenience of a countertop recipe box, minus the crumbs and splats.</title>

    </head>
    <body>

        <h1>Ingredients</h1>

        <ul class="navbar">
            <li><a href="./">HOME</a></li>
        </ul>

    <h2>Full List from DB:</h2>

        <ul>

        @foreach( $ingredients as $ingredient)

            <li>{{ $ingredient->name }}</li>

        @endforeach

        </ul>

    </body>
</html>