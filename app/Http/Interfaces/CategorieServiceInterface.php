<?php
namespace App\Http\Interfaces;


interface CategorieServiceInterface
{
    public function getAllCategories();
    public function getCategorieById(string $id);
    public function updateCategorie(string $id, array $data);
    public function deleteCategorie(string $id);
}
