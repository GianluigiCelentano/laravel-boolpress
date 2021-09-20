{{-- MODIFICA POST --}}
@extends('layouts.app')

@section('content')
<div class="container">
    @if ($errors->any()) 
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('post.update', $post)}}" method="POST">
        @csrf
        @method('PUT')
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{$post->title}}">
    </div>
    <div class="form-group">
        <label for="postText">Text</label>
        <input type="text" name="postText" id="postText" value="{{$post->postText}}">
    </div>
    <div class="form-group">
        <label for="author">Author</label>
        <input type="text" name="author" id="author" value="{{$post->author}}">
    </div>
    <div class="form-group">
        <label for="cover">Cover</label>
        <input type="text" name="cover" id="cover" value="{{$post->cover}}">
    </div>
    <div class="form-group">
        <input class="btn btn-success" type="submit" value="Salva">
    </div>
    </form>
</div>
@endsection