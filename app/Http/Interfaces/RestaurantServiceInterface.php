<?php

namespace App\Http\Interfaces;

interface RestaurantServiceInterface {
    public function getAllRestaurants();
    public function getRestaurantById(string $id);
    public function updateRestaurant(string $id, array $data);
    public function deleteRestaurant(string $id);
}
