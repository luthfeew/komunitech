<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Attach posts to users
        \App\Models\Post::all()->each(function ($post) {
            $post->user_id = \App\Models\User::inRandomOrder()->first()->id;
            $post->save();
        });
    }
}
