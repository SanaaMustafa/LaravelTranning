<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Postscontroller extends Controller
{
    //
    public function allposts()
    {
        return view('posts.list') ;
    }
    public function singlepost($id)
    {
        return view('posts.show');
    }
}
