<?php

namespace App\Service\NhaSanXuat;

use App\Repositories\NhaSanXuat\NhaSanXuatRepositoryInterface;
use App\Service\BaseService;


class NhaSanXuatService extends BaseService implements NhaSanXuatServiceInterface
{
    public $repository;
    public function __construct(NhaSanXuatRepositoryInterface $nhasanxuatRepository)
    {
        $this->repository = $nhasanxuatRepository;
    }
    
    
}
