<?php

namespace App\Http\Controllers;

use App\Http\Services\PanierService;
use Illuminate\Http\Request;


class PanierController extends Controller
{
    public function  __construct(private PanierService $service)
    {
    }

    public function index(){

        $paniers = $this->service->getAllPanier();
        return view('app.panier.read', compact('paniers'));
    }

    public function store(Request $request){
       try {
        $this->service->addProductToPanier($request);
        return response()->json('success', 201);
       } catch (\Throwable $th) {
        return throw $th;
       }
    }
}
