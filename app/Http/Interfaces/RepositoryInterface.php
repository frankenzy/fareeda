<?php
namespace App\Http\Interfaces;

interface RepositoryInterface {
    public function  read();
    public function show(string $id);
    public function update(string $id, array $data);
    public function delete(string $id);
}
