<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loaisach extends Model
{
    protected $table = 'loaisach';
    protected $fillable = ['maloai', 'tenloai'];
    public function dausach() {
        return $this->hasMany('App\dausach', 'maloai', 'maloai');
    }
}
