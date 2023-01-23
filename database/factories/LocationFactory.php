<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Location>
 */
class LocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'place_id'    => fake()->numberBetween(1,62),

            'description' => fake()->company(),
            'starred_at'  => ( fake()->boolean() ? fake()->dateTime() : null ),
            'last_visited_at' => fake()->dateTime(),

            'address'     => fake()->streetAddress(),
            'google_type' => fake()->randomElement(['asdf','qwer','zxcv','poiu']),
            'latitude'    => fake()->latitude(),
            'longitude'   => fake()->longitude(),
            'major_shopping_centre' => fake()->boolean(),            

        ];
    }
}
