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
        $data = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'category_id' => 'required'
        ]);

        $slug = Str::slug($data['title']);

        $forbidden = ['create', 'edit', 'admin', 'posts'];
        if (in_array($slug, $forbidden)) {
            $slug .= '-artikel';
        }

        $data['slug'] = $slug;
        $data['author_id'] = auth()->id();

        Post::create($data);

        return redirect()->route('admin.posts.index')
            ->with('success', 'Post berhasil ditambahkan!');
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

    public function edit(Post $post)
    {
        return view('admin.posts.edit', [
            'title' => 'Edit Artikel',
            'post' => $post,
            'categories' => Category::all(),
        ]);
    }


    
    public function destroy($id)
    {
        Post::findOrFail($id)->delete();

        return redirect()->route('admin.posts.index')
            ->with('success', 'Post berhasil dihapus!');
    }
}
