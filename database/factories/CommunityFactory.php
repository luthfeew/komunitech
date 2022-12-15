<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Community>
 */
class CommunityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = fake()->unique()->company();

        return [
            'name' => $name,
            'slug' => Str::slug($name, '_'),
            'description' => fake()->catchPhrase(),
            'logo' => 'https://picsum.photos/id/' . rand(1, 1000) . '/64',
            'banner' => 'https://picsum.photos/id/' . rand(1, 1000) . '/1280/360',
        ];
    }
}
