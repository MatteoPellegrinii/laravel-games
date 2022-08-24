@extends('layouts.app')

@section('content')
<div class="container">
    <ul>
        @foreach ($games as $game)
            <li>
                <a href="{{route('admin.games.show', ['game' => $game])}} ">
                    {{$game->title}}
                </a>
            </li>
        @endforeach
    </ul>

</div>
@endsection