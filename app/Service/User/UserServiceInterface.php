<?php

namespace App\Service\User;

use App\Service\ServiceInterface;

interface UserServiceInterface
{
    public function all();
    public function create(array $data);
    public function update(array $data, $id);
    public function delete($id);
}