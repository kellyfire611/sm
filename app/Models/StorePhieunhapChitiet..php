<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StorePhieunhapChitiet extends Model
{
    use SoftDeletes;

    protected $table = 'store_phieunhap_chitiet';

    public function scopeNoneDelete()
    {
        return $this->where('deleted_at', null);
    }
}
