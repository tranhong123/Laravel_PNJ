<?php

namespace App\Repositories\TheLoaiTrangSuc;

use App\Repositories\RepositoriesInterface;
use App\Models\TheLoaiTrangSuc;


interface TheLoaiTrangSucRepositoryInterface extends RepositoriesInterface
{
    public function Menu();
    public function TheLoaiTrangSuc($theloaitrangsuc, $limit = 4);
    public function getTrangSucByTheLoai(TheLoaiTrangSuc $theloaitrangsuc);
    
}
