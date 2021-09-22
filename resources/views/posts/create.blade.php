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
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="facings_id">Per chi?</label>
        </div>
        <select class="custom-select" id="facings_id" name="facings_id">
            <option selected>Scegli...</option>
            @foreach ($facings as $facing)
                <option value="{{$facing->id}}">{{$facing->facing}}</option>
            @endforeach
        </select>
    </div>
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
        <label for="thematic">Thematic</label>
        <input type="text" name="thematic" id="thematic">
    </div>
    <div class="form-group">
        <label for="type">Type</label>
        <input type="text" name="type" id="type">
    </div>
    <div class="form-group">
        <input class="btn btn-success" type="submit" value="Aggiungi">
    </div>
    </form>
</div>
@endsection