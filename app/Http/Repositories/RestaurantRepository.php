<?php

namespace App\Http\Repositories;
use App\Http\Interfaces\RepositoryInterface;
use App\Models\Restaurant;

class RestaurantRepository implements RepositoryInterface
{

    public function read()
    {
        return Restaurant::all();
    }

    public function show(string $id)
    {
       return Restaurant::findOrFail($id);
    }

    public function update(string $id, array $data)
    {
        // Implement update logic here
        return Restaurant::findOrFail($id)->update($data);
    }

    public function delete(string $id)
    {
        // Implement delete logic here
        return Restaurant::destroy($id);
    }
}
