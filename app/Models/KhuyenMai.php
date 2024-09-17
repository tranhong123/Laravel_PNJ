<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhuyenMai extends Model
{
    protected $table = 'KhuyenMai';
    protected $primaryKey = 'MaKhuyenMai';
    protected $guarded = [];
    public function TrangSuc()
    {
        return $this->belongsTo(TrangSuc::class,'MaTrangSuc','MaTrangSuc');
    }
}
