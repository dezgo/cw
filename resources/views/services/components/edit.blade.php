@extends('layouts.app')

@section('content')
<h1>Edit Component</h1>

<form method="POST" action="/component/{{ $component->id }}">
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="PUT">

    <div class="form-group">
        <label for="category_id">Category</label>
        <select class="form-control" id="category_id" name="category_id">
            @foreach ($component_categories as $component_category)
                <option value="{{ $component_category->id }}"{{ $component_category->id == $component->category_id ? " selected" : "" }}>{{ $component_category->long_name}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" class="form-control" id="description" name="description" value="{{ $component->description }}">
    </div>

    <div class="form-group">
        <label for="price">Price</label>
        <input type="text" class="form-control" id="price" name="price" value="{{ $component->price }}">
    </div>

    <div class="form-group">
        <label for="speed">Speed</label>
        <input type="text" class="form-control" id="speed" name="speed" value="{{ $component->speed }}">
    </div>

    <div class="form-group">
        <label for="speed">Created At</label>
        <input disabled type="text" class="form-control" id="created_at" name="created_at" value="{{ $component->created_at }}">
    </div>

    <div class="form-group">
        <label for="speed">Updated At</label>
        <input disabled type="text" class="form-control" id="updated_at" name="updated_at" value="{{ $component->updated_at }}">
    </div>

    <input type="submit" class="btn btn-primary" value="Update">
</form>

@stop
