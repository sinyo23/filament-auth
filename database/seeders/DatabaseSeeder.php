<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
             'name' => 'Admin',
             'email' => 'admin@admin.com',
         ]);
        
        Category::create(["name" => "Laravel", "slug" => "laravel"]);
        Category::create(["name" => "Filament", "slug" => "filament"]);
    }
}
