<?php

namespace App\Models\website;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;
    protected $primaryKey = "id_visitor";
    protected $table = "t_visitor";
    public $timestamps = false;
}
