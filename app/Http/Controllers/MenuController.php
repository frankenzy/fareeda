<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoremenuRequest;
use App\Http\Requests\UpdatemenuRequest;
use App\Http\Services\MenuService;
use App\Models\menu;

class MenuController extends Controller
{
    public function __construct(private MenuService $menu){}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('app.menu.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoremenuRequest $request)
    {
        //
        return response()->json('okok', 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //

        return response()->json($menu);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatemenuRequest $request, menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(menu $menu)
    {
        //
    }
}
