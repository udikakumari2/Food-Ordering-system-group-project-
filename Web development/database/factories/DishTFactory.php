<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\dishT;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DishT>
 */
class DishTFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = dishT::class;
    public function definition(): array
    {
        $disht_name=$this->faker->unique()->words($nb=26,$asText = true);
        $slug=Str::slug($disht_name,'-');
        return [
            'name' => $disht_name,
            'slug' => $slug,
            'short_description' => $this->faker->text(200),
            'regular_price' => $this->faker->numberBetween(10,500),
            'stoke_status' =>'instock',
            'image' => 'product-'.$this->faker->numberBetween(1,20)
        ];
    }
}
