<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\PostAdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DashboardController;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/


Route::get('/', function () {
    return redirect('/admin');
});


Route::get('/login', function () {
    return view('auth.login');
})->name('login')->middleware('guest');


Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

Route::middleware('auth')->group(function () {

    Route::get('/home', function () {
        return view('home', ['title' => 'Home Page']);
    })->name('home');

    Route::get('/posts', function () {
        return view('posts', [
            'title' => 'Blog',
            'posts' => Post::latest()
                ->filter(request(['search','category','author']))
                ->paginate(9)
                ->withQueryString()
        ]);
    });

    Route::get('/posts/{post:slug}', function (Post $post) {
        return view('post', [
            'title' => 'Single Post',
            'post' => $post
        ]);
    });

    Route::get('/authors/{user:username}', function (User $user) {
        return view('posts', [
            'title' => 'Articles by ' . $user->name,
            'posts' => $user->posts()->latest()->paginate(9)
        ]);
    });

    Route::get('/categories/{category:slug}', function (Category $category) {
        return view('posts', [
            'title' => $category->name . ' Category',
            'posts' => $category->posts()->latest()->paginate(9)
        ]);
    });

    Route::get('/about', function () {
        return view('about', [
            'title' => 'About Page',
            'name' => 'Nova Pramesti Regita Cahyani'
        ]);
    });

    Route::get('/contact', function () {
        return view('contact', ['title' => 'Contact']);
    });

    Route::prefix('admin')->name('admin.')->group(function () {

        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        Route::resource('posts', PostAdminController::class)->only([
            'index', 'create', 'store', 'edit', 'update', 'destroy'

        ]);
    });

    Route::get('/authors/{user:username}', function (User $user) {
        return view('author', [
            'title' => 'Profil Penulis',
            'author' => $user,
            'posts' => $user->posts()->latest()->get()
        ]);
});


});