<?php

namespace App\Repositories\TrangSuc;

use App\Repositories\BaseRepositories;
use App\Models\TrangSuc;
use PhpParser\Node\Stmt\Return_;

class TrangSucRepository extends BaseRepositories implements TrangSucRepositoryInterface
{
    public function getModel()
    {
        return TrangSuc::class;
    }
    public function SanPhamLienQuan($trangsuc, $limit = 4)
    {
        return $this->model->where('MaTheLoaiTrangSuc', $trangsuc->MaTheLoaiTrangSuc)
            ->limit($limit)
            ->get();
    }
   
    public function Nhan($limit = 10)
    {
        return $this->model->where('MaTheLoaiTrangSuc', 1)
            ->limit($limit)
            ->get();
    }
    public function VongTay($limit = 5)
    {
        return $this->model->where('MaTheLoaiTrangSuc', 2)
            ->limit($limit)
            ->get();
    }
    public function LacTay($limit = 5)
    {
        return $this->model->where('MaTheLoaiTrangSuc', 3)
            ->limit($limit)
            ->get();
    }
    public function VongCo($limit = 5)
    {
        return $this->model->where('MaTheLoaiTrangSuc', 4)
            ->limit($limit)
            ->get();
    }
    public function NhanCuoi($limit = 10)
    {
        return $this->model->where('MaTheLoaiTrangSuc', 5)
            ->limit($limit)
            ->get();
    }
    public function VongA($limit = 5)
    {
        return $this->model->where('MaTheLoaiTrangSuc', 6)
            ->limit($limit)
            ->get();
    }
    public function DayChuyen($limit = 5)
    {
        return $this->model->where('MaTheLoaiTrangSuc', 7)
            ->limit($limit)
            ->get();
    }
    public function BongTai($limit = 10)
    {
        return $this->model->where('MaTheLoaiTrangSuc', 8)
            ->limit($limit)
            ->get();
    }
    public function DayCo($limit = 10)
    {
        return $this->model->where('MaTheLoaiTrangSuc', 9)
            ->limit($limit)
            ->get();
    }
}
