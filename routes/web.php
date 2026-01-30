<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\PostAdminController;
use App\Http\Controllers\Admin\AdditionalPostController;
use App\Http\Controllers\Admin\QuillUploadController;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;




Route::get('/', fn () => redirect()->route('login'));


Route::middleware('guest')->group(function () {
    Route::get('/login', fn () => view('auth.login'))->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
});


Route::middleware('auth')->group(function () {

    Route::get('/home', [ProfileController::class, 'index'])
        ->name('profile.home');

    Route::get('/posts', function () {
        return view('posts', [
            'title' => 'Blog',
            'posts' => Post::latest()->paginate(9),
        ]);
    })->name('posts.index');

    Route::get('/posts/{post:slug}', function (Post $post) {
        return view('post', [
            'title' => $post->title,
            'post' => $post
        ]);
    })->name('posts.show');

    Route::get('/categories/{category:slug}', function (Category $category) {
        return view('posts', [
            'title' => $category->name,
            'posts' => $category->posts()->latest()->paginate(6)
        ]);
    });

    Route::get('/author/{user:username}', function (User $user) {
        return view('author', [
            'title' => 'Profil Penulis',
            'author' => $user,
            'posts' => $user->posts
        ]);
    });


    Route::prefix('admin')->name('admin.')->middleware('admin')->group(function () {

        Route::get('/', [DashboardController::class, 'index'])
            ->name('dashboard');

        Route::resource('posts', PostAdminController::class)->except('show');

        Route::get('/posts/additional/create', [AdditionalPostController::class, 'create'])
            ->name('posts.additional.create');

        Route::post('/posts/additional', [AdditionalPostController::class, 'store'])
            ->name('posts.additional.store');

        Route::post('/quill/upload', [QuillUploadController::class, 'upload'])
            ->name('quill.upload');
    });

    Route::get('/contact', fn () => view('contact', [
        'title' => 'Contact'
    ]));

    Route::post('/logout', [AuthController::class, 'logout'])
        ->name('logout');
});
