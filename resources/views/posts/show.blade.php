@extends('layouts.app')

@section('content')
<div class="container text-center">
    TITOLO: {{$post->title}}</br>
        TESTO: {{$post->postText}}</br>
        AUTORE: {{$post->author}}</br>
        <img class="photo" src="{{$post->cover}}" alt=""></br>
</div>
@endsection