<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=catergory>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $catargory_name=$this->faker->unique()->words($nb=2,$asText = true);
        $slug=Str::slug($catargory_name,'-');
        return [
        'name' => $catargory_name,
        'slug' => $slug
            //
        ];
    }
}
