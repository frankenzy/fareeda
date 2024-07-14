<?php

namespace App\Http\Interfaces;

interface PanierRepositorieInterface
{
    public function read();
    public function show();
    public function update(string $id, array $data);
    public function delete(string $id);
}
