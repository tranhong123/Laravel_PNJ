<?php

namespace App\Repositories\TheLoaiTrangSuc;

use App\Repositories\BaseRepositories;
use App\Models\TheLoaiTrangSuc;
use App\Models\TrangSuc;
use PhpParser\Node\Stmt\Return_;


class TheLoaiTrangSucRepository extends BaseRepositories implements TheLoaiTrangSucRepositoryInterface
{
    public function getModel()
    {
        return TheLoaiTrangSuc::class;
    }
    public function Menu()
    {
        return $this->model->all();
    }
    public function TheLoaiTrangSuc($theloaitrangsuc, $limit = 4)
    {
        return $this->model->where('MaTheLoaiTrangSuc', $theloaitrangsuc->MaTheLoaiTrangSuc)
            ->limit($limit)
            ->get();
    }
    public function getTrangSucByTheLoai(TheLoaiTrangSuc $theloaitrangsuc)
    {
        
        return TrangSuc::where('MaTheLoaiTrangSuc', $theloaitrangsuc->MaTheLoaiTrangSuc)->paginate(8);
    }
}
