<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    //public function test(Post $post)
    public function index(Post $post)
    {
        //$posts = $post -> get();
        //dd($posts); //dd確認用コマンド
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);  
        //return view('posts/index')
    }
}
?>