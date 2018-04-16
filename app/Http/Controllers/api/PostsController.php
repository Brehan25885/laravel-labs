<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Http\Resources\PostResource;
use App\Http\Requests\StorePostRequests;
class PostsController extends Controller
{
    //
    public function index(){
        $posts=Post::paginate(2);
        return PostResource::collection($posts);
    }
    public function store (StorePostRequests $request){
        $post= Post::create ($request->all());
        return new PostResource($post);    
    }
}
