<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(3)->create();

        Category::create([
            'name' => 'Artikel Informasi',
            'slug' => 'artikel-informasi',
            'color' => 'red'        
        ]);

        Category::create([
            'name' => 'Artikel Opini',
            'slug' => 'artikel-opini',
            'color' => 'green'
        ]);

        Category::create([
            'name' => 'Artikel Praktis',
            'slug' => 'artikel-praktis',
            'color' => 'blue'
            
        ]);

        Category::create([
            'name' => 'Artikel Ilmiah',
            'slug' => 'artikel-ilmiah',
            'color' => 'yellow'
           
        ]);
        

    }
}
