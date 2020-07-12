<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = Post::orderBy('id','desc')->get();
        return view('admin.posts.index',['posts' => $posts]);
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title'     => 'required|max:255',
            'image_url' => 'required|image',
            'content'   => 'required'
        ]);

        $fileNameWithTheExtension = request('image_url')->getClientOriginalName();

        $fileName = pathinfo($fileNameWithTheExtension, PATHINFO_FILENAME);

        $extension = request('image_url')->getClientOriginalExtension();

        $newFileName = $fileName . '_' . time() . '.' . $extension;

        $path = request('image_url')->storeAs('public/notice_images', $newFileName);

        $user = auth()->user();

        $post = new Post();
        $post->title     = request('title');
        $post->content   = request('content');
        $post->image_url = $newFileName;
        $post->user_id   = $user->id;
        $post->save();

        return redirect('posts');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.posts.edit',['post' => $post]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title'     => 'required|max:255',
            'image_url' => 'required|image',
            'content'   => 'required'
        ]);

        $fileNameWithTheExtension = request('image_url')->getClientOriginalName();

        $fileName = pathinfo($fileNameWithTheExtension, PATHINFO_FILENAME);

        $extension = request('image_url')->getClientOriginalExtension();

        $newFileName = $fileName . '_' . time() . '.' . $extension;

        $path = request('image_url')->storeAs('public/notice_images', $newFileName);

        $post = Post::findOrFail($id);

        $post->title     = request('title');
        $post->content   = request('content');
        $post->image_url = $newFileName;
        $post->save();

        return redirect('posts');
    }

    public function destroy(Request $request)
    {
        $post = Post::findOrFail($request->post_id);
        $oldImage = public_path(). '/storage/notice_images/'. $post->image_url;

        if (file_exists($oldImage))
        {
            unlink($oldImage);
        }
        $post->delete();
        return redirect('posts');
    }
}
