<?php

namespace App\Service\TheLoaiTrangSuc;

use App\Service\ServiceInterface;

interface TheLoaiTrangSucServiceInterface extends ServiceInterface
{
    public function Menu();
    public function TheLoaiTrangSuc($theloaitrangsuc, $limit = 4);
    public function getTrangSucByTheLoai($theloaitrangsuc);
    
}
