<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function show()
    {
        $posts = Post::all(); //fatsh all posts 
        return view('welcome', ['posts' => $posts]);
    }

    public function postCreatePost(Request $request)
    {
        $post = new Post;
        $post->body = $request->summaryckeditor;
        //image:
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '-' . $extension;
            $file->move('uploads/images/', $filename);
            $post->image = $filename;
        }
        else{
            return $request;
            $post->image = '';
        }


        $request->user()->posts()->save($post);
        return redirect('/');
    }
}
