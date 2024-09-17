<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietDonHang extends Model
{
    protected $table = 'ChiTietDonHang';
    protected $primaryKey = 'MaChiTietDonHang';
    protected $guarded = [];
    public function DonHang()
    {
        return $this->belongsTo(DonHang::class, 'MaDonHang', 'MaDonHang');
    }
    public function TrangSuc()
    {
        return $this->belongsTo(TrangSuc::class, 'MaTrangSuc', 'MaTrangSuc');
    }
}
