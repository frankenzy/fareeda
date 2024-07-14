<?php

namespace App\Http\Services;

use App\Http\Repositories\RestaurantRepository;
use App\Http\Interfaces\RestaurantServiceInterface;
class RestaurantService implements RestaurantServiceInterface
{
    protected $restaurantRepository;
    public function __construct(RestaurantRepository $restaurantRepository)
    {
        $this->restaurantRepository = $restaurantRepository;
    }

    public function getAllRestaurants()
    {
        return $this->restaurantRepository->read();
    }

    public function getRestaurantById(string $id)
    {
        return $this->restaurantRepository->show($id);
    }

    public function updateRestaurant(string $id, array $data)
    {
        return $this->restaurantRepository->update($id, $data);
    }

    public function deleteRestaurant(string $id)
    {
        return $this->restaurantRepository->delete($id);
    }
}
