<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence();
        $numbers = range(1, 10);

        return [
            'image' => fake()->imageUrl(),
            'title' => $title,
            'slug' => Str::slug($title),
            'content' => fake()->paragraph(5),
            'category_id' => Category::inRandomOrder()->first()->id,
            'user_id' => Arr::random($numbers),
            'published_at' => fake()->optional()->dateTime(),
        ];
    }
}
