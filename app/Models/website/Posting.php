<?php

namespace App\Models\website;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Posting extends Model
{
    use SoftDeletes;

    protected $table = 't_post';
    protected $primaryKey = 'id_post';
    protected $fillable = ['judul_post','isi_post','img_post','link_gambar','link_post','link_file','id_kategori','id_tag','id_user'];

    public function getPostByAuthor($idUser){
        return Posting::select('t_post.id_post as id','t_post.judul_post','t_post.isi_post','t_post.img_post','t_post.link_gambar','t_post.link_post','t_post.tgl_post','ref_tag.nama_tag','m_user.nama_user')
                ->join('ref_tag','t_post.id_tag','=','ref_tag.id_tag')
                ->join('m_user','t_post.id_user','=','m_user.id_user')
                ->where('t_post.id_user','=',$idUser)
                ->where('t_post.id_tag','!=','1')
                ->orderBy('t_post.id_post','DESC')
                ->get();
    }
}
