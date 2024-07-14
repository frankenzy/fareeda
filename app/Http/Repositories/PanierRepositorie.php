<?php
namespace App\Http\Repositories;

use App\Http\Interfaces\RepositoryInterface;
use App\Models\Panier;

class PanierRepositorie implements RepositoryInterface
{

    //Constructeur par défaut
    public function __construct(){}

    public function  read()
    {
        return Panier::all();
    }
    public function show($id)
    {
        return Panier::findOrFail($id);
    }

    public function update(string $id, array $data)
    {
        return Panier::findOrFail($id)->update($data);
    }

    public function delete(string $id)
    {
        return Panier::destroy($id);
    }
}
