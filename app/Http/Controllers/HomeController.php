<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    public function index()
    {
        $posts = Post::orderBy('id','desc')->simplepaginate(5);
        return view('welcome',['posts' => $posts]);
    }

    public function post($id)
    {
        $post = Post::find($id);
        return view('post',['post' => $post ]);
    }
}
