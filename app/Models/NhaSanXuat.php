<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhaSanXuat extends Model
{
    protected $table = 'NhaSanXuat';
    protected $primaryKey = 'MaNhaSanXuat';
    protected $guarded = [];
    public function TrangSuc()
    {
        return $this->hasMany(TrangSuc::class, 'MaNhaSanXuat','MaNhaSanXuat');
    }
}
