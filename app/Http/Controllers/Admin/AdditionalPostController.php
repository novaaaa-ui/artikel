<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdditionalPostController extends Controller
{
    
    public function create()
    {
        return view('admin.posts.create-additional', [
            'categories' => Category::all()
        ]);
    }

    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'slug'        => 'required|unique:posts,slug',
            'body'        => 'required|min:5',
            'category_id' => 'required|exists:categories,id',
        ]);

        Post::create([
            'title'       => $validated['title'],
            'slug'        => $validated['slug'],
            'body'        => $validated['body'],
            'category_id' => $validated['category_id'],
            'author_id'   => Auth::id(),
        ]);

        return redirect()
            ->route('admin.posts.index')
            ->with('success', 'Artikel berhasil dibuat');
    }
}
