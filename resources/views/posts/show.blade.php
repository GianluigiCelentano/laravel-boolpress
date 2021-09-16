@extends('layouts.app')

@section('content')
<div class="container text-center">
    TITOLO: {{$post->title}}</br>
    TESTO: {{$post->postText}}</br>
    AUTORE: {{$post->author}}</br>
    <a href="/post/{{$post->id}}"><img class="photo" src="{{$post->cover}}" alt=""></a></br> <hr>
</div>
@endsection