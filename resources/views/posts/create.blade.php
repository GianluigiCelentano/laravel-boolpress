{{-- CREA POST --}}
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
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title">
    </div>
    <div class="form-group">
        <label for="postText">Text</label>
        <input type="text" name="postText" id="postText">
    </div>
    <div class="form-group">
        <label for="author">Author</label>
        <input type="text" name="author" id="author">
    </div>
    <div class="form-group">
        <label for="cover">Cover</label>
        <input type="text" name="cover" id="cover">
    </div>
    <div class="form-group">
        <input class="btn btn-success" type="submit" value="Aggiungi">
    </div>
    </form>
</div>
@endsection