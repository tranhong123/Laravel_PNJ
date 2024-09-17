<?php

namespace App\Repositories\NhaSanXuat;

use App\Repositories\BaseRepositories;
use App\Models\NhaSanXuat;
use PhpParser\Node\Stmt\Return_;

class NhaSanXuatRepository extends BaseRepositories implements NhaSanXuatRepositoryInterface
{
    public function getModel()
    {
        return NhaSanXuat::class;
    }
    
}
