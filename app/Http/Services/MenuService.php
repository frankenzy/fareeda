<?php
namespace App\Http\Services;

use App\Http\Repositories\MenuRepositorie;

class MenuService{
    public function __construct(private MenuRepositorie $menuRepositorie)
    {}
    public function getAllMenus(){
        return $this->menuRepositorie->read();
    }
    public function getMenu($id){
        return $this->menuRepositorie->get($id);
    }
    public function createMenu($data){
        return $this->menuRepositorie->store($data);
    }
    public function updateMenu($id, $data){

       //implementation mise a menu
    }
    public function deleteMenu($id){
        $menu = $this->menuRepositorie->get($id);
        $menu->delete();
    }
}
