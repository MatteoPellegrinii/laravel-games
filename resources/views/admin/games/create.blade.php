@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add new Game</h1>
    <form action="{{ route('admin.games.store')}} " method="post">
        @csrf

        <div class="mb-3">
            <label class="form-label" for="id">Id</label>
            <input class="form-control @error('id') is-invalid @enderror" type="text" name="id" id="id" value="{{ old('id') }}">
        </div>

        <div class="mb-3">
            <label class="form-label" for="title">Title</label>
            <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" id="title" value="{{ old('title') }}">
        </div>

        <div class="mb-3">
            <label class="form-label" for="description">Description</label>
            <input class="form-control @error('description') is-invalid @enderror" type="text" name="description" id="description" value="{{ old('description') }}">
        </div>

        <div class="mb-3">
            <label class="form-label" for="price">Price</label>
            <input class="form-control @error('price') is-invalid @enderror" type="text" name="price" id="price" value="{{ old('price') }}">
        </div>

        <div class="mb-3">
            <label class="form-label" for="img">Image</label>
            <input class="form-control @error('img') is-invalid @enderror" type="text" name="img" id="img" value="{{ old('img') }}">
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>


</div>
@endsection
