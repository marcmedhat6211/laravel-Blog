<?php

namespace App\Http\Controllers;
use App\Http\Requests\StorePostRequest;
use Illuminate\Http\Request;
use App\Post;
use App\User;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('index', [
            'posts' => $posts,
        ]);
    }

    public function show()
    {
        $request = request();
        $postId = $request->post;
        // dd($postId);
        $post = Post::find($postId);
        return view('show',[
            'post' => $post,
        ]);
    }

    public function create()
    {
        $users = User::all();
        return view('create',[
            'users' => $users
        ]);
    }

    public function store(StorePostRequest $request)
    {
        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => $request->user_id,
        ]);

        return redirect()->route('index');
    }

    public function destroy($postId)
    {   
        // $request = request();
        // $postId = $request->post;
        // $deleted = Post::delete($postId);
        // return redirect()->route('index')->with(['message'=>'successfully deleted!']);

        $post = Post::where('id',$postId);
        $post->delete();
        return redirect()->route('index')->with(['message'=>'successfully deleted!']);
    }
}
