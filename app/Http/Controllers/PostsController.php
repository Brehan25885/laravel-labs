<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\StorePostRequests;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        //$post = $posts->first();
        return view('posts.index',[

            'posts' => $posts
        ]);
    }

    public function create()
    {
        $users = User::all();

        return view('posts.create',[
            'users' => $users
        ]);
    }

    public function store(StorePostRequests $request)
    {
        //validation 
        /* $request->validate([
                'title'=>'required|min:3|max:255',
                'description' => 'required',
        ],[
            'title.required'=>'write in the title field'//customize default messages
        ]); */
        // dd($request->all());
        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => $request->user_id
        ]);
        
       return redirect(route('posts.index')); 
    }
    public function destroy(Post $post)
    {
       $post->delete();
        //$post = $posts->first();
        return redirect(route('posts.index'));
    }
    public function edit (Post $post)
    {
       $users = User::all(); 
       return view('posts.edit',[
            'posts' => $post,
            'users' => $users

        ]);
    }
    public function update (StorePostRequests $request,Post $post)
     {  $post->title=$request->title;
        $post->description=$request->description;
        $post->user_id = $request->user_id;
        $post->save();
       /*  $post->update([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => $request->user_id
        ]); */

    return redirect(route('posts.index'));

}
public function showMore(Post $post)
    {

        return view('posts.more',[
            'post' => $post
        ]);
    }

}