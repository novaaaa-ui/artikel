<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category; 
use App\Models\User;    
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        
        $totalArtikel   = Post::count();
        $totalCategory  = Category::count(); 
        $totalUsers     = User::count();    

        return view('admin.dashboard', compact(
            'totalArtikel',
            'totalCategory',
            'totalUsers'
        ));
    }
}
