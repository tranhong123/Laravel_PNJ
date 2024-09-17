<?php

namespace App\Service\TrangSuc;

use App\Repositories\TrangSuc\TrangSucRepositoryInterface;
use App\Service\BaseService;


class TrangSucService extends BaseService implements TrangSucServiceInterface
{
    public $repository;
    public function __construct(TrangSucRepositoryInterface $trangsucRepository)
    {
        $this->repository = $trangsucRepository;
    }
    public function SanPhamLienQuan($trangsuc, $limit = 4)
    {
        return $this->repository->SanPhamLienQuan($trangsuc, $limit);
    }
    
    public function Nhan($limit = 10)
    {
        return $this->repository->Nhan($limit);
    }
    public function VongTay($limit = 5)
    {
        return $this->repository->VongTay($limit);
    }
    public function LacTay($limit = 5)
    {
        return $this->repository->LacTay($limit);
    }
    public function VongCo($limit = 5)
    {
        return $this->repository->VongCo($limit);
    }
    public function NhanCuoi($limit = 10)
    {
        return $this->repository->NhanCuoi($limit);
    }
    public function VongA($limit = 5)
    {
        return $this->repository->VongA($limit);
    }
    public function DayChuyen($limit = 5)
    {
        return $this->repository->DayChuyen($limit);
    }
    public function BongTai($limit = 10)
    {
        return $this->repository->BongTai($limit);
    }
    public function DayCo($limit = 10)
    {
        return $this->repository->DayCo($limit);
    }
    
}
