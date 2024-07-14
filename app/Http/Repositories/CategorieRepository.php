<?php
namespace App\Http\Repositories;
use App\Http\Interfaces\RepositoryInterface;
use App\Models\Categorie;

class CategorieRepository implements RepositoryInterface
{
    public function read()
    {
        return Categorie::all();
    }

    public function show(string $id)
    {
       return Categorie::findOrFail($id);
    }

    public function update(string $id, array $data)
    {
        // Implement update logic here
        return Categorie::findOrFail($id)->update($data);
    }

    public function delete(string $id)
    {
        // Implement delete logic here
        return Categorie::destroy($id);
    }


    public function getRestaurantCatorgie($id){
        return Categorie::where('restaurant_id', $id)->get();
    }
}
