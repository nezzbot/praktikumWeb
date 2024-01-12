<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return Post::all();
    }

    public function show($id)
    {
        return Post::find($id);
    }

    public function store(Request $request)
    {
        return Post::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->update($request->all());
        return $post;
    }

    public function destroy($id)
    {
        Post::destroy($id);
        return response()->json(['message' => 'Post deleted successfully']);
    }
}
