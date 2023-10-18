@extends('layouts.app')

@section('content')

<h1>Add a Recipe</h1>
<p>Use the form below to create a new recipe.</p>

<div class="form-outer">
    <form action="{{ route('save_recipe') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-row">
            <input type="text" name="title" class="form-input" placeholder="Recipe Title" />
        </div>
        <div class="form-row">
            <input type="file" name="image_upload" />
        </div>
        <div class="form-row">
            <label for="short_description">Short Description:</label>
            <textarea name="short_description" rows="2" class="block p-3 w-full"></textarea>
        </div>

        <h3>INGREDIENTS</h3>

        <div class="form-row recipe-bar flex flex-row justify-between">
            <input type="text" name="amount1" class="form-input" placeholder="amount" />
            <input type="text" name="measure1" class="form-input" placeholder="measurement" />
            <select name="ingredient1" class="form-select">
                @foreach( $ingredients as $ingredient)
                    <option>{{ $ingredient->name }}</option>
                @endforeach
            </select>
            <input type="button" class="btn btn-control" value="+" />
        </div>

        <div class="form-row">
            <h3>INSTRUCTIONS</h3>
            <textarea name="instructions" rows="4" class="block p-3 w-full"></textarea>
        </div>
        
        <div class="form-row">
            <input type="submit" class="btn btn-primary" value="SUBMIT" />
        </div>

    </form>
</div>

@endsection