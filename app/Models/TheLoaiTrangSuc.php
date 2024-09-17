<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TheLoaiTrangSuc extends Model
{
    protected $table = 'TheLoaiTrangSuc';
    protected $primaryKey = 'MaTheLoaiTrangSuc';
    protected $guarded = [];
    public function TrangSuc()
    {
        return $this->hasMany(TrangSuc::class, 'MaTheLoaiTrangSuc','MaTheLoaiTrangSuc');
    }
}
