<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dausach extends Model
{
    protected $table = 'dausach';
    protected $fillable = ['masach', 'tensach', 'tacgia', 'maloai', 'nhaxuatban', 'namxuatban', 'soluong', 'ngonngu',  ];
    public function loaisach() {
        return $this->belongsTo('App\loaisach', 'maloai', 'maloai');
    }

}
