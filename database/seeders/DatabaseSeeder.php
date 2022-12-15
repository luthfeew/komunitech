<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(9)->create();

        \App\Models\User::factory()->create([
            'name' => 'Luthfi Wijaya',
            'username' => 'luthfeew',
            'email' => 'luthfeew@gmail.com',
            'password' => Hash::make('12345679'),
        ]);

        $this->call([
            CommunitySeeder::class,
            PostSeeder::class,
            PostMediaSeeder::class,
            PostVoteSeeder::class,
        ]);
    }
}
