<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'category' => 'required',
            'slug' => 'required|unique:articles',
            'body' => 'required',
        ]);

        Article::create($validated);

        return redirect()->route('post.index')->with('success', 'Article berhasil ditambahkan!');
    }
}
