<?php

namespace Database\Seeders;

use App\Models\Categorie;
use App\Models\Customer;
use App\Models\Menu;
use App\Models\Restaurant;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            UserSeeder::class,
            RestaurantSeeder::class,
            CategorieSeeder::class,
            CustomerSeeder::class,
            MenuSeeder::class,
        ]);
    }
}
