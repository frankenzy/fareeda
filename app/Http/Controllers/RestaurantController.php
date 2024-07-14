<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\StoreRestaurantRequest;
use App\Http\Requests\UpdateRestaurantRequest;
use App\Http\Services\CategorieService;
use App\Http\Services\RestaurantService;

class RestaurantController extends Controller
{
    protected $restaurantService;
    protected $categorieService;
    public function __construct(RestaurantService $restaurantService, CategorieService $categorieService)
    {
        $this->restaurantService = $restaurantService;
        $this->categorieService = $categorieService;
    }

    public function index()
    {
        $restaurants = $this->restaurantService->getAllRestaurants();
        return view('app.dashboard', compact('restaurants'));
    }

    public function show($id)
    {
        $restaurant = $this->restaurantService->getRestaurantById($id);
       $categories = $this->categorieService->getCategorieByRestaurant($id);
       return view('app.menu.index', compact('restaurant','categories'));

    }

    public function update(UpdateRestaurantRequest $request, $id)
    {
        $this->restaurantService->updateRestaurant($id, $request->all());
        return response()->json(['message' => 'Restaurant updated']);
    }

    public function delete($id)
    {
        $this->restaurantService->deleteRestaurant($id);

        return response()->json(['message' => 'Restaurant deleted']);
    }
}
