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
        <div class="form-row pt-4">
            <input type="file" name="image_upload" />
        </div>
        <div class="form-row pt-4">
            <label for="short_description">Short Description:</label>
            <textarea name="short_description" rows="3" class="block px-4 py-2 w-full"></textarea>
        </div>

        <div class="form-row py-4 flex flex-row items-start">
            <div class="category-row-item form-row pr-4">
                <label for="category">Category:</label>
                <select name="category" class="form-select">
                    <option>- select one -</option>
                    <option>entrees</option>
                    <option>sides</option>
                    <option>breakfasts</option>
                    <option>desserts</option>
                    <option>drinks</option>
                    <option>none of these</option>
                </select>
            </div>
            <div class="category-row-item form-row pr-4">
                <label for="diet">Diet:</label>
                <select name="diet" class="form-select">
                    <option>- select one -</option>
                    <option>low-carb</option>
                    <option>vegetarian</option>
                    <option>none of these</option>
                </select>
            </div>
            <div class="category-row-item form-row">
                <label for="tool">Tool:</label>
                <select name="tool" class="form-select">
                    <option>- select one -</option>
                    <option>pressure cooker</option>
                    <option>skillet</option>
                    <option>slow cooker</option>
                    <option>none of these</option>
                </select>
            </div>
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
            <textarea name="instructions" rows="5" class="block px-4 py-2 w-full"></textarea>
        </div>
        
        <div class="form-row py-4">
            <input type="submit" class="btn btn-primary" value="SUBMIT" />
        </div>

    </form>
</div>

@endsection