<?php

namespace App\Models\website;

use Illuminate\Database\Eloquent\Model;

class Kategori_Post extends Model
{
    protected $table = 'm_kategori';
    protected $primaryKey = 'id_kategori';
    public $timestamps = false;
    protected $fillable = ['nama kategori'];

}
