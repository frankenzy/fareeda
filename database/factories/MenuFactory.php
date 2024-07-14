<?php

namespace Database\Factories;

use App\Models\Categorie;
use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\menu>
 */
class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {


        return [
            //
            'nom' => $this->faker->name(),
            'descriptions' => $this->faker->text(200),
            'prix' => $this->faker->randomFloat(0, 0, 500),
            'restaurant_id' => Restaurant::inRandomOrder()->value('id'),
            'categorie_id' => Categorie::inRandomOrder()->value('id'),
        ];
    }
}
