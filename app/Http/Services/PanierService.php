<?php
namespace App\Http\Services;

use App\Http\Interfaces\PanierServiceInterface;
use App\Http\Repositories\PanierRepositorie;

class PanierService implements PanierServiceInterface {
    protected PanierRepositorie $panierRepositorie;

    public function __construct(PanierRepositorie $panierRepositorie){
        $this->panierRepositorie = $panierRepositorie;
    }
    public function getAllPanier(){
        return $this->panierRepositorie->read();
    }
    public function getPanierById($id){
        return $this->panierRepositorie->show($id);
    }
    public function updatePanier($id, array $data){
        return $this->panierRepositorie->update($id, $data);
    }
    public function removePanier($id){
        return $this->panierRepositorie->delete($id);
    }
}
