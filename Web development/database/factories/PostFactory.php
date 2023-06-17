<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
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
    protected $model = Post::class;
    public function definition(): array
    {
        return [
            'name'=>$this->faker->unique()->words($nb=26,$asText = true),
            'slug' => Str::slug($this->faker->unique()->words($nb=26,$asText = true),'-'),
            'short_description' => $this->faker->text(300),
            'regular_price' => $this->faker->numberBetween(10,5000),
            'stoke_status' =>'instock',
            'image' => 'product-'.$this->faker->numberBetween(1,30),
        ];
    }
}
