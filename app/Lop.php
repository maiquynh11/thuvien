<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lop extends Model
{
    protected $table = 'lop';
    protected $fillable = ['malop', 'tenlop'];
    public function hocsinh() {
        return $this->hasMany('App\lop', 'malop', 'malop');
    }
}
