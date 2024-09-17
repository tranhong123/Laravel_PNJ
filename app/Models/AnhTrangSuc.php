<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnhTrangSuc extends Model
{
    protected $table = 'anhtrangsuc';
    protected $primaryKey = 'MaAnh';
    protected $guarded = [];
    public function TrangSuc()
    {
        return $this->belongsTo(TrangSuc::class,'MaTrangSuc','MaTrangSuc');
    }
}
