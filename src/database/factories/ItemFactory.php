<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Psy\Util\Str;
use App\Models\Retailer;

class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text('10'),
            'category' => $this->faker->numberBetween($min = 0, $max = 4),
            'price' => $this->faker->numberBetween($min = 1, $max = 10000),
            'retailer_id' => function () {
                return Retailer::factory()->create()->id;
            }
        ];
    }
}
