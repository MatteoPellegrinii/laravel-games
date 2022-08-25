@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create new post</h1>
    <form action="{{ route('admin.games.store')}} " method="post">
        @csrf
        <label for="">title</label>
        <input type="text" name="title" id="">

        <label for="">description</label>
        <input type="text" name="description" id="">

        <label for="">price</label>
        <input type="text" name="price" id="">

        <label for="">img</label>
        <input type="text" name="img" id="">

        <button type="submit">save</button>
    </form>


</div>
@endsection
