<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create 30 media for each post
        for ($i = 35; $i <= 65; $i++) {
            if (mt_rand(0, 1)) {
                \App\Models\PostMedia::factory()->create([
                    'post_id' => $i,
                ]);
            }
        }
    }
}
