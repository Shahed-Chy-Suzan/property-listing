<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Location;

class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence,
            'featured_image' => 'https://picsum.photos/1200/800',
            // 'featured_image' => 'https://picsum.photos/1200/800?random=' . rand(10, 1000),
            'location_id' => Location::all()->random()->id,
            'price' => rand(100000,500000),
            'sale' => rand(1,2),
            'type' => rand(1,3),
            'bedrooms' => rand(1,6),
            'bathrooms' => rand(1,5),
            'net_sqm' => rand(55,300),
            'gross_sqm' => rand(65,450),
            'pool' => rand(1,4),
            'overview' => $this->faker->text(100),
            'why_buy' => $this->faker->text(1000),
            'description' => $this->faker->text(500)
        ];
    }
}
