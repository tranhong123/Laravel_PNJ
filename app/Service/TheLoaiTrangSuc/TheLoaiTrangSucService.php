<?php

namespace App\Service\TheLoaiTrangSuc;

use App\Repositories\TheLoaiTrangSuc\TheLoaiTrangSucRepositoryInterface;
use App\Service\BaseService;


class TheLoaiTrangSucService extends BaseService implements TheLoaiTrangSucServiceInterface
{
    public $repository;
    public function __construct(TheLoaiTrangSucRepositoryInterface $theloaitrangsucRepository)
    {
        $this->repository = $theloaitrangsucRepository;
    }
    public function Menu()
    {
        return $this->repository->Menu();
    }
    public function TheLoaiTrangSuc($theloaitrangsuc, $limit = 4)
    {
        return $this->repository->TheLoaiTrangSuc($theloaitrangsuc, $limit);
    }
    public function getTrangSucByTheLoai($theloaitrangsuc)
    {
        return $this->repository->getTrangSucByTheLoai($theloaitrangsuc);
    }
   
}
