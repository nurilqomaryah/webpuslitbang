<?php

namespace App\Models\website;

use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
    protected $table = 'm_gambar';
    protected $primaryKey = 'id_gambar';
    public $timestamps = false;
    protected $fillable = ['file_gambar','keterangan'];

}
