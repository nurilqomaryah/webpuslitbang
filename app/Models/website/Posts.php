<?php

namespace App\Models\website;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    //
    protected $table = 't_post';
    protected $primaryKey = 'id_post';
    public $timestamps = false;
    protected $fillable = ['judul','id_kategori','tgl_post','pengarang','penerbit','isi','files','catatan'];

}
