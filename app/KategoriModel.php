<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriModel extends Model
{
    //
    protected $table = 'kategori';
    protected $fillabel = ['id','nama_kategori','slug','tanggal_input_data'];
    public $timestamps = true;
}
