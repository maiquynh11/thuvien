<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hocsinh extends Model
{
    protected $table = 'hocsinh';
    protected $fillable = ['mahocsinh', 'tenhocsinh', 'gioitinh', 'ngaysinh', 'malop'];
    public function lop() {
        return $this->belongsTo('App\lop', 'malop', 'malop');
    }
}
