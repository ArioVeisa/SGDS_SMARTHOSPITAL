<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stephenjude\FilamentBlog\Models\Post;

class BlogController extends Controller
{
    // Method to show the list of published articles
    public function index()
    {
        // Fetch all published posts
        $posts = Post::published()->get();

        return view('articles.index', compact('posts'));
    }

    // Method to show a specific article's details
    public function show($id)
    {
        // Fetch the post along with its author and category
        $post = Post::with(['author', 'category'])->findOrFail($id);

        return view('articles.show', compact('post'));
    }
}
