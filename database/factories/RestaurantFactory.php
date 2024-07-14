<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Restaurant>
 */
class RestaurantFactory extends Factory
{
    /**
     * Define the model's default state.
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'nom' => $this->faker->unique()->name,
            'telephone' => $this->faker->unique()->phoneNumber(),
            'descriptions' => $this->faker->text(200),
            'adresse' =>$this->faker->address(),
            'logo' => $this->faker->image('public/images/restaurants', 640, 480, null, false),
            'latitude' => $this->faker->latitude(),
            'longitude' => $this->faker->longitude(),
            'user_id' => User::inRandomOrder()->value('id'),
        ];
    }
}
