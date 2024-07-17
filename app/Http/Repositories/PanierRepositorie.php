<?php
namespace App\Http\Repositories;

use App\Http\Constant\PanierConstant;
use App\Http\Interfaces\RepositoryInterface;
use App\Models\Panier;
use Illuminate\Http\Request;

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
    public function store(Request $data){
        return Panier::create([
            'user_id' => $data->user->id,
            'produit_id' => $data->menu->id,
            'quantite' => $data->quantity,
            'prix_unitaire' => $data->menu->prix,
            'statut' => PanierConstant::EN_ATTENTE,
        ]);
    }
}
