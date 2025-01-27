<?php

namespace App\Service;

interface ServiceInterface
{
    public function all();
    public function find(string $id);
    public function create(array $data);
    public function update(array $data, $id);
    public function delete($id);
    public function searchAndPaginate($searchBy, $keyword, $perPage=5);
}
