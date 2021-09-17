<!-- HOME -->
@extends('layouts.app')

@section('content')
<div class="container text-center">
    @foreach ($allPosts as $post)
        TITOLO: {{$post->title}}</br>
        TESTO: {{$post->postText}}</br>
        AUTORE: {{$post->author}}</br>
        <a href="/post/{{$post->id}}"><img class="photo" src="{{$post->cover}}" alt=""></a></br> 
        
        <div>
            <a href="{{route('post.edit', $post)}}"><h5><i class="bi bi-pencil-fill"></i></h5></a>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Elimina post
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Elimina post</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Sei sicuro di voler eliminare questo post?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <form action="{{route('post.destroy', $post)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-primary" type="submit" value="Elimina">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    @endforeach
</div>
@endsection