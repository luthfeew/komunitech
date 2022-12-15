<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommunitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create 10 communities
        \App\Models\Community::factory(10)->create();

        // Attach 5 random users to each community
        \App\Models\Community::all()->each(function ($community) {
            $community->users()->attach(
                \App\Models\User::inRandomOrder()->limit(5)->pluck('id')->toArray()
            );
        });
    }
}
