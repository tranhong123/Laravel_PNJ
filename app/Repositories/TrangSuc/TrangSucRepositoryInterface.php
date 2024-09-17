<?php

namespace App\Repositories\TrangSuc;

use App\Repositories\RepositoriesInterface;

interface TrangSucRepositoryInterface extends RepositoriesInterface
{
    public function SanPhamLienQuan($trangsuc, $limit = 4);
    
    public function Nhan($limit = 10);
    public function VongTay($limit = 5);
    public function LacTay($limit = 5);
    public function VongCo($limit = 5);
    public function NhanCuoi($limit = 10);
    public function VongA($limit = 5);
    public function DayChuyen($limit = 5);
    public function BongTai($limit = 10);
    public function DayCo($limit = 10);
}