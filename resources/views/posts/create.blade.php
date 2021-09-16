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
    <form action="{{route('post.store')}}" method="POST">
        @csrf
    <div class="">
        <label for="title">Title</label>
        <input type="text" name="title" id="title">
    </div>
    <div class="">
        <label for="text">Text</label>
        <input type="text" name="postText" id="postText">
    </div>
    <div class="">
        <label for="author">Author</label>
        <input type="text" name="author" id="author">
    </div>
    <div class="">
        <label for="cover">Cover</label>
        <input type="text" name="cover" id="cover">
    </div>
    <div class="">
        <input class="btn btn-primary" type="submit" value="Aggiungi">
    </div>
    </form>
</div>
@endsection