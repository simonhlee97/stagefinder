<?php

namespace Database\Factories;

use App\Models\User;
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
      'user_id' => User::factory(),
      'name' => $this->faker->unique()->word,
      'location' => $this->faker->address,
      'capacity' => $this->faker->biasedNumberBetween($min = 10, $max = 20, $function = 'sqrt'),
      'available' => $this->faker->dateTime
    ];
  }
}
