<?php

namespace App\Http\Controllers;

use App\Http\Services\PanierService;
use Illuminate\Http\Request;


class PanierController extends Controller
{
    protected PanierService $panierService;
    public function  __construct(PanierService $service)
    {
        $this->panierService = $service;
    }

    public function index(){
        $paniers = $this->panierService->getAllPanier();
        return view('app.panier.read', compact('paniers'));
    }

    public function store(Request $request){
       try {
        $this->panierService->addProductToPanier($request);
        return response()->json('success', 201);
       } catch (\Throwable $th) {
        return throw $th;
       }
    }
}
