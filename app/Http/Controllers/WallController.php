<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WallController extends Controller
{
    public function index(){
        $posts = Post::paginate(5);

        return view('wall',['posts' => $posts]);
    }

    public function save(Request $request){
        $post = new Post;
        $post->content = $request->content;
        $post->user_id = Auth::id();
        $post->save();

        return redirect('wall')->with('status', 'Message Posted !');
    }
    public function delete(Request $request){
        $post_id = $request->post_id;

        $post = Post::find($post_id);
        $post->delete();

        return redirect('wall')->with('status', 'Message deleted !');
    }

    public function update(Request $request){
        $post_id = $request->post_id;
        $post = Post::find($post_id);
        return view('update',['post' => $post]);
    }

    public function store(Request $request){
        $post_id = $request->post_id;
        $post = Post::find($post_id);
        $post->content = $request->content;
        $post->save();

        return redirect('wall')->with('status', 'Message updated !');
    }

}
