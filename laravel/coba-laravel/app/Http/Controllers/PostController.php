<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        $title = '';

        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            if($category) $title = $title . ' in ' . $category->name;
        }
        
        if(request('author')) {
            $author = User::firstWhere('username', request('author'));
            if($author) $title = $title . ' by ' . $author->name;
        }

        return view('posts', [
            "title" => "All Posts $title",
            "active" => "posts",
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
            // "posts" => Post::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "active" => "posts",
            "post" => $post
        ]);
    }
}
