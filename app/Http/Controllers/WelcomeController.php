<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Post;

class WelcomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $posts = Post::latest()->get();
        $posts->each(function($post) {
            $post->created_at = Carbon::parse($post->created_at);
        });
        return view('welcome', compact('categories','posts'));
    }
    public function showCategory()
    {
        $categories = Category::all();
        return view('welcome', compact('categories'));
    }
    public function showPost()
    {
        $posts = Post::latest()->get();
        $posts->each(function($post) {
            $post->created_at = Carbon::parse($post->created_at);
        });
        return view('welcome', compact('posts'));
    }
}
