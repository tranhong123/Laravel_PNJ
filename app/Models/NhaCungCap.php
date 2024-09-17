<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhaCungCap extends Model
{
    protected $table = 'NhaCungCap';
    protected $primaryKey = 'MaNhaCungCap';
    protected $guarded = [];
    public function HoaDonNhap()
    {
        return $this->hasMany(HoaDonNhap::class, 'MaNhaCungCap', 'MaNhaCungCap');
    }
    public function TrangSuc()
    {
        return $this->hasMany(TrangSuc::class, 'MaNhaCungCap', 'MaNhaCungCap');
    }
}
