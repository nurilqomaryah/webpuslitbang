<?php

namespace App\Models\website;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $table = 'm_role';
    protected $primaryKey = 'id_role';
    public $timestamps = false;
    protected $fillable = ['nama_role','deskripsi'];

}
