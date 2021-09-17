<!-- SINGOLO POST -->
@extends('layouts.app')

@section('content')
<div class="container text-center">
    TITOLO: {{$post->title}}</br>
    TESTO: {{$post->postText}}</br>
    AUTORE: {{$post->author}}</br>
    <a href="/post/{{$post->id}}"><img class="photo" src="{{$post->cover}}" alt=""></a></br> 
    <div>
        <a href="{{route('post.edit', $post)}}"><i class="bi bi-pencil-fill"></i></a>
        <form action="{{route('post.destroy', $post)}}" method="POST">
            @csrf
            @method('DELETE')
            <input class="btn btn-primary" type="submit" value="Elimina post">
        </form>
    </div>
</div>
@endsection