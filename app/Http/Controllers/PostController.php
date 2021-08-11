<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function blogPost(Request $post)
    {
        $post->validate([
            'post_category' => 'required',
            'post_details' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,jiff|image',
            'post_title' => 'required',
        ]);

        $imageName = time() . '.' . $post->image->extension();
        $post->image->move(public_path('images', $imageName));
        $post = Post::create([
            'post_title' => $post->post_title,
            'post_details' => $post->post_details,
            'post_category' => $post->post_category,
            'image' => $imageName,
            'user_id' => auth()->user()->id,
        ]);
        return redirect('posts');
    }
    public function deletePost($postId)
    {
        $data = Post::find($postId);
        $data->delete();
        return redirect('posts');
    }
    public function loadPosts()
    {
        $data = Post::all();
        return view('dashboard-post', ['posts' => $data]);
    }
    public function editPost($postId)
    {
        $data = Post::find($postId);
        return view('edit', ['data' => $data]);
        // $data = Post::find($postId);
        // $data->update()
    }
    public function updatePost(Request $post)
    {
        // return $post;
        $post->validate([
            'post_category' => 'required',
            'post_details' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,jiff|image',
            'post_title' => 'required',
        ]);
        $imageName = time() . '.' . $post->image->extension();
        $post->image->move(public_path('images', $imageName));

        $data = Post::find($post->post_id);
        // return $post->post_id;
        $data->post_title = $post->post_title;
        $data->post_details = $post->post_details;
        $data->post_category = $post->post_category;
        $data->image = $imageName;
        $data->user_id = auth()->user()->id;
        $data->save();
        return redirect('posts');
    }
}
