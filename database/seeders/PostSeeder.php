<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create(['title' => 'Sample Post 1', 'categories_id' => 1, 'author_id' => 1]);
        Post::create(['title' => 'Sample Post 2', 'categories_id' => 2, 'author_id' => 2]);
        Post::create(['title' => 'Sample Post 3', 'categories_id' => 2, 'author_id' => 3]);
    }
}
