<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\PostDetail;
use App\Facing;
class PostController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allPosts = Post::all();
        return view('posts.index', compact('allPosts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $facings=Facing::all();
        return view('posts.create', compact('facings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $request->validate([
            'cover'=>'url'
        ]);
        $post= new Post();
        $postDetail=new PostDetail();
        $this->fillAndSavePost($post, $postDetail, $request);
        return redirect()->route('post.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function edit(Post $post) //<-autowire legge direttamente dal db
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
       $this->fillAndSavePost($post, $request);
       return redirect()->route('post.show', $post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('post.index');
    }
    private function fillAndSavePost(Post $post, PostDetail $postDetail, Request $request) {
        $data=$request->all();
        $postDetail->thematic=$data['thematic'];
        $postDetail->type=$data['type'];
        $post->title = $data['title'];
        $post->postText = $data['postText'];
        $post->author = $data['author'];
        $post->cover = $data['cover'];
        $post->post_detail_id=$postDetail->id;
        $post->facings_id=$data['facings_id'];
        $post-> save();
    }
}
