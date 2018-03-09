<?php

namespace App\Models;

use App\Models\StorePhieunhapChitiet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StorePhieunhap extends Model
{
    use SoftDeletes;

    protected $table = 'store_phieunhap';

    public function scopeNoneDelete()
    {
        return $this->where('deleted_at', null);
    }

    public static function options($id)
    {
        return static::where('id', $id)->get()->map(function ($obj) {

            return [$obj->id => $obj->so_phieunhap];

        })->flatten();
    }

    public function chitiet()
    {
        return $this->hasMany(StorePhieunhapChitiet::class, 'phieunhap_id', 'id');
    }
}
