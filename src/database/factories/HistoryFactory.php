<?php

namespace Database\Factories;

use App\Models\Retailer;
use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

class HistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'item_id' => function () {
                return Item::factory()->create()->id;
            },
            'amount' => $this->faker->numberBetween($min = 10, $max = 100),
        ];
    }
}
