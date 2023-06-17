<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=beverages>
 */
class beveragesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $beverages_name=$this->faker->unique()->words($nb=26,$asText = true);
        $slug=Str::slug($beverages_name,'-');
        return [
            'name' => $beverages_name,
            'slug' => $slug,
            'short_description' => $this->faker->text(200),
            'regular_price' => $this->faker->numberBetween(10,500),
            'stoke_status' =>'instock',
            'images' => 'product-'.$this->faker->numberBetween(1,20)
        ];
    }
}
