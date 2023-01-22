<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Checkin>
 */
class CheckinFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'stage'       => fake()->randomElement(['new','sent','done','error']),
            'checkin_at'  => fake()->dateTime(),

            'type'        => fake()->randomElement(['real_time','end_of_day','no_travel_today']),
            'sequence'    => fake()->randomDigit(),
            'address'     => fake()->streetAddress(),
            'google_type' => fake()->randomElement(['asdf','qwer','zxcv','poiu']),
            'latitude'    => fake()->latitude(),
            'longitude'   => fake()->longitude(),
            'place_id'    => fake()->numberBetween(1,62),
            'major_shopping_centre' => false,

        ];
    }
}
