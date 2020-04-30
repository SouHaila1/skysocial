<?php

namespace App\Http\Controllers;
use App\Post;
use App\Like;
use Illuminate\Http\Request;


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
        else{
            return $request;
            $post->image = '';
        }
        $request->user()->posts()->save($post);
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
}
