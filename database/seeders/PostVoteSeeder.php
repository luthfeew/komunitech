<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostVoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create 10 votes for each post
        for ($i = 1; $i <= 100; $i++) {
            for ($j = 1; $j <= 10; $j++) {
                \App\Models\PostVote::factory()->create([
                    'post_id' => $i,
                    'user_id' => $j,
                ]);
            }
        }
    }
}
