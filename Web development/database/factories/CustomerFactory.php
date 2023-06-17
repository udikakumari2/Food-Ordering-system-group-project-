<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Model\customert;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $customer_name=$this->faker->unique()->words($nb=26,$asText = true);
       
        return [
            'name' => $customer_name,
            'address' =>$this->faker->text(100),
            'email' => $this->faker->text(100),
            'note'=>$this->faker->text(100)
           
        ];
    }
}
