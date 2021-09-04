<?php

namespace App\Models\website;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'ref_kategori';
    protected $primaryKey = 'id_kategori';
    public $timestamps = false;
    protected $fillable = ['id_kategori','nama_kategori'];

}
