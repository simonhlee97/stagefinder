<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VenueFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'name' => $this->faker->unique()->word,
      'location' => $this->faker->address,
      'capacity' => $this->faker->biasedNumberBetween($min = 10, $max = 20, $function = 'sqrt'),
      'available' => $this->faker->dateTime
    ];
  }
}
