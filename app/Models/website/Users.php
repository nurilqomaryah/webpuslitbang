<?php

namespace App\Models\website;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'm_user';
    protected $primaryKey = 'id_user';
    public $timestamps = false;
    protected $fillable = ['id_role', 'nama_user', 'username', 'password'];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
        return $this->belongsTo('App\Models\website\Role','id_role');
    }

    public function hasRole($roles)
    {
        $this->have_role = $this->getUserRole();

        if(is_array($roles)){
            foreach($roles as $need_role){
                if($this->cekUserRole($need_role)) {
                    return true;
                }
            }
        } else{
            return $this->cekUserRole($roles);
        }
        return false;
    }

    private function getUserRole()
    {
        return $this->role()->getResults();
    }

    private function cekUserRole($role)
    {
        return (strtolower($role)==strtolower($this->have_role->nama_role)) ? true : false;
    }

}
