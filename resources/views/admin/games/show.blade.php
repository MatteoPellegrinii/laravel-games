@extends('layouts.app')

@section('content')
<div class="container">
    <ul>
        <li>{{$game->title}}</li>
        <li> <img src={{$game->img}}></li>
        <li>{{$game->description}}</li>
        <li>{{$game->price}}</li>
    </ul>

</div>
@endsection