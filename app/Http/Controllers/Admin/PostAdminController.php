<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostAdminController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create', [
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'category_id' => 'required'
        ]);

        Post::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'body' => $request->body,
            'author_id' => auth()->id(),
            'category_id' => $request->category_id
        ]);

        return redirect()->route('admin.posts.index')
            ->with('success', 'Post berhasil ditambahkan!');
    }

   
    public function edit($id)
    {
        return view('admin.posts.edit', [
            'post' => Post::findOrFail($id),
            'categories' => Category::all()
        ]);
    }

    
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'category_id' => 'required',
            'slug' => 'required|unique:posts,slug,' . $post->id
        ]);

        $post->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'body' => $request->body,
            'category_id' => $request->category_id
        ]);

        return redirect()->route('admin.posts.index')
            ->with('success', 'Post berhasil diperbarui!');
    }

    
    public function destroy($id)
    {
        Post::findOrFail($id)->delete();

        return redirect()->route('admin.posts.index')
            ->with('success', 'Post berhasil dihapus!');
    }
}
