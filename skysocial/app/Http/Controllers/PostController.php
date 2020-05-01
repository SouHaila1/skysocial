<?php

namespace App\Http\Controllers;
use App\Post;
use App\Like;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    public function show()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('welcome', ['posts' => $posts]);
    }

    public function postCreatePost(Request $request){
        $post = new Post();
        $post->body = $request['body'];
         //image:
         if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '-' . $extension;
            $file->move('uploads/images/', $filename);
            $post->image = $filename;
        }
        
        $request->user()->posts()->save($post);
        return redirect()->route('welcome');
    }
   
    public function getDeletePost($post_id)
    {
        $post = Post::where('id', $post_id)->first();
        if (Auth::user() != $post->user) {
            return redirect()->back();

        }
        $post->delete();
        return redirect()->route('welcome');
    }
  

    public function postLikePost(Request $request)
    {
        $post_id = $request['postId'];
        $is_like = $request['isLike'] === 'true';
        $update = false;
        $post = Post::find($post_id);
        if (!$post) {
            return null;
        }
        $user = Auth::user();
        $like = $user->likes()->where('post_id', $post_id)->first();
        if ($like) {
            $already_like = $like->like;
            $update = true;
            if ($already_like == $is_like) {
                $like->delete();
                return null;
            }
        } else {
            $like = new Like();
        }
        $like->like = $is_like;
        $like->user_id = $user->id;
        $like->post_id = $post->id;
        if ($update) {
            $like->update();
        } else {
            $like->save();
        }
        return null;
    }
    
    public function addcomment(Post $post){
        Comment::create([
            'body' => request('body'),
            'post_id' => $post->id
        ]);

        return back();
    }
}
