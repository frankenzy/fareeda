<?php
namespace App\Http\Services;

use App\Http\Interfaces\PanierServiceInterface;
use App\Http\Repositories\MenuRepositorie;
use App\Http\Repositories\PanierRepositorie;
use App\Http\Repositories\UserRepository;
use Illuminate\Http\Request;

class PanierService implements PanierServiceInterface {
    public function __construct(private PanierRepositorie $panierRepositorie,private MenuRepositorie $menuRepositorie,private UserRepository $userRepositorie){}
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
    public function addProductToPanier(Request $request){

        $user = $this->getUserById(1);

        $menu = $this->getMenu($request->id);

        $request->merge([
            'user' => $user,
           'menu' => $menu
        ]);
        return $this->panierRepositorie->store($request);
    }
    private function getUserById($id){
        return $this->userRepositorie->get($id);
    }
    private function getMenu($id){
        return $this->menuRepositorie->get($id);
    }
}
