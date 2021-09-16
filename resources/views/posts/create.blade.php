@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('post.store')}}" method="POST">
        @csrf
    <div class="">
        <label for="title">Title</label>
        <input type="text" name="title" id="title">
    </div>
    <div class="">
        <label for="text">Text</label>
        <input type="text" name="text" id="text">
    </div>
    <div class="">
        <label for="author">Author</label>
        <input type="text" name="author" id="author">
    </div>
    <div class="">
        <label for="photo">Photo</label>
        <input type="text" name="author" id="author">
    </div>
    <div class="">
        <input class="btn btn-primary" type="submit" value="Aggiungi">
    </div>
    </form>
</div>
@endsection