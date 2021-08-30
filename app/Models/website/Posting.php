<?php

namespace App\Models\website;

use Illuminate\Database\Eloquent\Model;

class Posting extends Model
{
    protected $table = 't_post';
    protected $primaryKey = 'id_post';
    protected $fillable = ['judul_post','isi_post','img_post','link_file','id_kategori','id_tag'];

}
