<?php

namespace App\Models\website;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $table = 'ref_tag';
    protected $primaryKey = 'id_tag';
    public $timestamps = false;
    protected $fillable = ['id_tag','nama_tag'];

}
