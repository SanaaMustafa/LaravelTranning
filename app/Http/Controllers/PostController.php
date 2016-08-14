<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        //
        
        $posts=Post::all();
        return view('posts.list',['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $title=$request->input('title');
        $body=$request->input('body');
        $url="plz";
        $auther_id=0;

        //Post::insert(['title'=>$title,'body'=>$body,'url'=>$url,'auther_id'=>$auther_id]);
        $new_post=new Post;
        $new_post->title=$title;
        $new_post->body=$body;
        $new_post->url=$url;
        $new_post->auther_id=$auther_id;
        $new_post->save();

        return redirect('admin');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $title=$request->input('title');
        $post=Post::find($id);
        $post->title=$title;
        $post->save();
        return redirect('admin');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Post::destroy($id);
        return redirect('admin');

    }
    public function admin(){
        $posts=Post::all();
        return view('posts.admin',['posts'=>$posts]);

    }
}
