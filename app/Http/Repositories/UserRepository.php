<?php
namespace App\Http\Repositories;


use App\Models\User;

class UserRepository{
    public function __construct(private User $user){}
    // Implementations of userRepositoryInterface methods
    public function get($id){
      return $this->user->find($id);
    }
    public function update($id, array $data){

        $user = $this->user->find($id);
        if($user){
            $user->update($data);
            return $user;
        }
    }
    public function delete($id){
        $user = $this->user->find($id);
        if($user){
            $user->delete();
            return true;
        }
    }
    public function store($data){
       return $this->user->create($data);
    }
    public function read(){
        return $this->user->all();
    }

}
