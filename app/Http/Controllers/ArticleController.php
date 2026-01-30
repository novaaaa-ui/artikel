<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    
    public function index()
    {
        $articles = Article::latest()->get();

        return view('posts.index', compact('articles'));
    }

    
    public function create()
    {
        $categories = Category::all();

        return view('posts.create', compact('categories'));
    }

    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'category_id' => 'required',
            'slug' => 'required|unique:articles',
            'body' => 'required',
        ]);

        Article::create($validated);

        return redirect()->route('post.index')
            ->with('success', 'Article berhasil ditambahkan!');
    }
}
