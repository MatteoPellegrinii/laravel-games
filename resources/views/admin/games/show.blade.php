@extends('layouts.app')

@section('content')
<div class="container">

    <div>{{$game->title}}</div>
    <div> <img src={{$game->img}}> </div>
    <div>{{$game->description}}</div>
    <div>{{$game->price}}€</div>

</div>
@endsection
