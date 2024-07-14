<?php
namespace App\Http\Interfaces;
interface PanierServiceInterface{
    public function getAllPanier();
    public function getPanierById($id);
    public function updatePanier($id, array $data);
    public function removePanier($id);
}
