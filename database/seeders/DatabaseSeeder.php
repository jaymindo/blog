<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::truncate();
        Category::truncate();

        $user = User::factory()->create();

        Category::create([
            'name' => 'Family',
            'slug' => 'family',
        ]);
        Category::create([
            'name' => 'Work',
            'slug' => 'work',
        ]);
        Category::create([
            'name' => 'Hobbies',
            'slug' => 'hobbies',
        ]);
    }
}