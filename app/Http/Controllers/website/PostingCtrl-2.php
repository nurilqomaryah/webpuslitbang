<?php

namespace App\Http\Controllers\website;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Auth;
use Carbon\Carbon;
use Session;
use \Validator;
use Response;
use Illuminate\Support\Facades\Input;
use Alert;
use PDF;
use App\Models\website\Posting;

class PostingCtrl extends Controller
{

    public function index()
    {
        $posts = DB::table('t_post')
                ->select('t_post.id_post as id','t_post.judul_post','t_post.isi_post','t_post.img_post','t_post.link_file','t_post.tgl_post','ref_kategori.nama_kategori','ref_tag.nama_tag','m_user.nama_user')
                ->join('ref_kategori', 't_post.id_kategori', '=', 'ref_kategori.id_kategori')
                ->join('ref_tag','t_post.id_tag','=','ref_tag.id_tag')
                ->join('m_user','t_post.id_user','=','m_user.id_user')
                ->get();

        return view('crud.product.index', compact('posts'));
    }

    public function create()
    {
        $this->data['id_user'] = DB::table('m_user')
             ->get();

        $this->data['id_kategori'] = DB::table('ref_kategori')
            ->get();

        $this->data['id_tag'] = DB::table('ref_tag')
            ->get();

        $this->data['id_post'] = DB::table('t_post')
            ->get();

        return view('crud.product.createpost', $this->data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul_post'=>'required',
            'img_post'=>'required',
            'id_tag'=>'required'
        ]);

        $judulPost = $request->get('judul_post');
        $isiPost = $request->get('isi_post');
        $imgPost = $request->get('img_post');
        $linkFile = $request->get('link_file');
        $namaKategori = $request->get('nama_kategori');
        $namaTag = $request->get('nama_tag');

        $post = new Posting([
            'judul_post' => $judulPost,
            'isi_post' => $isiPost,
            'img_post' => $imgPost,
            'link_file' => $linkFile,
            'nama_kategori' => $namaKategori,
            'nama_tag' => $namaTag,
        ]);

        $tujuan_upload = 'images/'.strtolower('nama_kategori');
        $post->move($tujuan_upload,$imgPost->getClientOriginalName());
        $post->save();
        return redirect('/manajemenpost')->with('success', 'Post saved!');
    }

    public function edit($id)
    {
        $this->data['user'] = DB::table('m_user')
            ->get();

        $this->data['kategori'] = DB::table('ref_kategori')
            ->get();

        $this->data['tag'] = DB::table('ref_tag')
            ->get();

        $this->data['edit_post'] = Posting::find($id);

        return view('crud.product.editpost', $this->data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul_post'=>'required',
            'img_post'=>'required',
            'id_tag'=>'required'
        ]);

        $post = Posting::find($id);
        $judulPost = $this->get('judul_post');


        $isiPost = $this->get('isi_post');


        $imgPost = $this->get('img_post');


        $linkFile = $this->get('link_file');


        $namaKategori = $this->get('nama_kategori');


        $namaTag = $this->get('nama_tag');


        if($imgPost === "")
        {
            $post->judul_post = $judulPost;
            $post->isi_post = $isiPost;
            $post->link_file = $linkFile;
            $post->nama_kategori = $namaKategori;
            $post->nama_tag = $namaTag;
        }
        else
        {
            $post->judul_post = $judulPost;
            $post->isi_post = $isiPost;
            $post->img_post = $imgPost;
            $post->link_file = $linkFile;
            $post->nama_kategori = $namaKategori;
            $post->nama_tag = $namaTag;
        }

        $post->save();
        return redirect('/manajemenpost')->with('success', 'Post updated!');

//        $post->judul_post = $request->get('judul_post');
//        $post->isi_post = $request->get('isi_post');
//        $post->img_post = $request->get('img_post');
//        $post->link_file = $request->get('link_file');
//        $post->nama_kategori = $request->get('nama_kategori');
//        $post->nama_tag = $request->get('nama_tag');

    }

    public function destroy($id)
    {
        $post = Posting::find($id);
        $post->delete();
        return redirect('/manajemenpost')->with('success', 'Post deleted!');
    }

    public function home()
    {
        $berita = DB::table('t_post')
            ->select('t_post.id_post as id','t_post.judul_post','t_post.isi_post','t_post.tgl_post','t_post.img_post','t_post.link_file')
            ->where('t_post.id_tag','=',3)
            ->limit(3)
            ->get();
        $artikel = DB::table('t_post')
            ->select('t_post.id_post as id','t_post.judul_post','t_post.isi_post','t_post.tgl_post','t_post.img_post','t_post.link_file')
            ->where('t_post.id_tag','=',4)
            ->limit(3)
            ->get();
        $pengumuman = DB::table('t_post')
            ->select('t_post.id_post as id','t_post.img_post','t_post.link_file')
            ->where('t_post.id_tag','=',2)
            ->limit(3)
            ->get();
        $info = DB::table('t_post')
            ->select('t_post.id_post as id','t_post.img_post','t_post.link_file')
            ->where('t_post.id_tag','=',5)
            ->limit(3)
            ->get();
        $video = DB::table('t_post')
            ->select('t_post.id_post as id','t_post.img_post','t_post.link_file')
            ->where('t_post.id_tag','=',6)
            ->limit(3)
            ->get();
        $achieve = DB::table('t_post')
            ->select('t_post.id_post as id','t_post.img_post','t_post.link_file')
            ->where('t_post.id_tag','=',7)
            ->limit(3)
            ->get();
        return view('home.index',compact('berita','artikel','pengumuman','info','video','achieve'));
    }

    public function video()
    {
        $video = DB::table('t_post')
            ->select('t_post.id_post as id','t_post.img_post','t_post.link_file')
            ->where('t_post.id_tag','=',6)
            ->limit(3)
            ->get();
        return view('home.videografis',compact('video',));
    }

    public function dash()
    {
        $namauser = DB::table('m_user')
            ->select('m_user.id_user','m_user.id_role','m_user.nama_user')
            ->where('m_user.id_role','=',1)
            ->first();
        $jumlahberita = DB::table('t_post')
            ->where('t_post.id_tag','=',3)
            ->count();
        $jumlahjurnal = DB::table('t_post')
            ->where('t_post.id_kategori','=',1)
            ->count();
        $jumlahmajalah = DB::table('t_post')
            ->where('t_post.id_kategori','=',2)
            ->count();
        $jumlahartikel = DB::table('t_post')
            ->where('t_post.id_tag','=',4)
            ->count();
        return view('dashboard',compact('jumlahberita','namauser','jumlahjurnal','jumlahmajalah','jumlahartikel'));
    }

}
