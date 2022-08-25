@extends('layouts.app')

@section('content')
<div class="container">
    <ul>
        @foreach ($games as $game)
            <li>
                <a href="{{route('admin.games.show', ['game' => $game])}} ">
                    {{$game->title}}
                </a>
                <form action="{{ route('admin.games.destroy', ['game' => $game]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>

</div>
@endsection
