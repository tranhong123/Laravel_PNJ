<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrangSuc extends Model
{
    protected $table = 'TrangSuc';
    protected $primaryKey = 'MaTrangSuc';
    protected $guarded = [];
    public function AnhTrangSuc()
    {
        return $this->hasMany(AnhTrangSuc::class, 'MaTrangSuc', 'MaTrangSuc');
    }
    public function TheLoaiTrangSuc()
    {
        return $this->belongsTo(TheLoaiTrangSuc::class, 'MaTheLoaiTrangSuc', 'MaTheLoaiTrangSuc');
    }


    public function NhaSanXuat()
    {
        return $this->belongsTo(NhaSanXuat::class, 'MaNhaSanXuat', 'MaNhaSanXuat');
    }
    public function NhaCungCap()
    {
        return $this->belongsTo(NhaCungCap::class, 'MaNhaCungCap', 'MaNhaCungCap');
    }

    public function KhuyenMai()
    {
        return $this->hasMany(KhuyenMai::class, 'MaTrangSuc', 'MaTrangSuc');
    }
}
