<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function blogPost(Request $post){
        $post->validate([
           'post_category' => 'required',
           'content' => 'required',
           'image' => 'required|mimes:jpg,jpeg,png,jiff|image',
           'post_title' => 'required',
        ]);
            
            $imageName = time().'.'.$post->image->extension();
            $post->image->move(public_path('images',$imageName));
        // return response()->json($post);x
        $post = Post::create([
            'post_title' => $post->post_title,
            'post_category' => $post->post_category,
            'image' => $imageName,
            'content' => $post->content,
            'user_id'=>auth()->user()->id,

        ]);
    }
}
