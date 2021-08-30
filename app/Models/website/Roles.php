<?php

namespace App\Models\website;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    //
    protected $table = 'm_role';
    protected $primaryKey = 'id_role';
    public $timestamps = false;
    protected $fillable = ['id_role','nama_role','deskripsi'];

}
