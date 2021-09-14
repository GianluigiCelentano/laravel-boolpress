@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container text-center">
    @foreach ($allPosts as $post)
        TITOLO: {{$post->title}}</br>
        TESTO: {{$post->postText}}</br>
        AUTORE: {{$post->author}}</br>
        <a href="/post/{{$post->id}}"><img class="photo" src="{{$post->cover}}" alt=""></a></br> <hr>
    @endforeach
</div>
@endsection
