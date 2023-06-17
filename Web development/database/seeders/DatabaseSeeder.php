<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\beverages;
use App\Models\foods;

//use App\Models\dtable;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Category::factory(6)->create();
        \App\Models\foods::factory(16)->create();
        \App\Models\beverages::factory(16)->create();
        
        $this->call([
            PostTableSeeder::class,
        ]);
       // \App\Models\dtable::factory(16)->create();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
