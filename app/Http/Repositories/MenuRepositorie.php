<?php
namespace App\Http\Repositories;

use App\Models\Menu;

class MenuRepositorie{
    public function __construct(private Menu $menu){}
    // Implementations of MenuRepositoryInterface methods
    public function get($id){
      return $this->menu->find($id);
    }
    public function update($id, array $data){

        $menu = $this->menu->find($id);
        if($menu){
            $menu->update($data);
            return $menu;
        }
    }
    public function delete($id){
        $menu = $this->menu->find($id);
        if($menu){
            $menu->delete();
            return true;
        }
    }
    public function store($data){
       return $this->menu->create($data);
    }
    public function read(){
        return $this->menu->all();
    }

}
