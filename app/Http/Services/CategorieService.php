<?php

namespace App\Http\Services;
use App\Http\Interfaces\CategorieServiceInterface;
use App\Http\Repositories\CategorieRepository;

class CategorieService implements CategorieServiceInterface
{
    protected $categorieRepository;

    public function __construct(CategorieRepository $categorieRepository)
    {
        $this->categorieRepository = $categorieRepository;
    }

    public function getAllCategories()
    {
        return $this->categorieRepository->read();
    }

    public function getCategorieById(string $id)
    {
        return $this->categorieRepository->show($id);
    }

    public function updateCategorie(string $id, array $data)
    {
        $this->categorieRepository->update($id, $data);
    }

    public function deleteCategorie(string $id)
    {
        $this->categorieRepository->delete($id);
    }

    public function getCategorieByRestaurant( $id){
       return  $this->categorieRepository->getRestaurantCatorgie($id);
    }
}
