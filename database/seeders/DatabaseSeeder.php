<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Venue;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();
        // Category::truncate();
        // Post::truncate();

        User::factory(7)->create();
        Post::factory(8)->create();
        Category::factory(4)->create();
        Venue::factory(14)->create();
    }
}
