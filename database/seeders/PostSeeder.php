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
        // Create 10 posts for each community
        \App\Models\Community::all()->each(function ($community) {
            \App\Models\Post::factory(10)->create([
                'community_id' => $community->id,
            ]);
        });

        // Attach posts to users
        \App\Models\Post::all()->each(function ($post) {
            $post->user_id = \App\Models\User::inRandomOrder()->first()->id;
            $post->save();
        });
    }
}
