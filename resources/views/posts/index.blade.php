@extends('layouts.app')

@section('content')
<div class="container text-center">
    @foreach ($allPosts as $post)
        TITOLO: {{$post->title}}</br>
        TESTO: {{$post->postText}}</br>
        AUTORE: {{$post->author}}</br>
        <a href="/post/{{$post->id}}"><img class="photo" src="{{$post->cover}}" alt=""></a></br> <hr>
    @endforeach
</div>
@endsection