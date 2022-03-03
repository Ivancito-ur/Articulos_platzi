<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function posts()
    {   
        // $posts = Post::latest()->paginate();
        // $posts = Post::with('user')->latest()->paginate(15);
        // dd($posts);
        //dd(Post::with('user')->latest()->paginate());


          return view('posts',[
              'posts' => Post::with('user')->latest()->paginate(5)
          ]); 

       
    }

    public function post(Post $post)
    {

        //dd($post);
        return view('post', [
            'post' => $post
        ]);
    }
}
