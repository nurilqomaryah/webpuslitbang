<?php

namespace App\Http\Controllers\website;
use App\Models\website\Categories;
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

class ProductCrudCtrl extends Controller
{

    public function index()
    {
        $products = DB::table('t_post')
                ->select('t_post.id_post as id','t_post.judul_post','t_post.isi_post','t_post.img_post','t_post.link_gambar','t_post.link_post','t_post.tgl_post','ref_kategori.nama_kategori','ref_tag.nama_tag','m_user.nama_user')
                ->join('ref_kategori', 't_post.id_kategori', '=', 'ref_kategori.id_kategori')
                ->join('ref_tag','t_post.id_tag','=','ref_tag.id_tag')
                ->join('m_user','t_post.id_user','=','m_user.id_user')
                ->where('t_post.id_tag','=','1')
                ->get();

        return view('crud.product.index', compact('products'));
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

        return view('crud.product.createproduct', $this->data);
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
        $imgPost = $request->file('img_post')->getClientOriginalName();
        $idKategori = $request->get('id_kategori');
        $idTag = $request->get('id_tag');
        $linkPost = $request->get('link_post');

        // Logic Upload dimulai dari sini
        $namaKategori = $this->__changeIdCategoryToString($idKategori);
        $extension = $request->file('img_post')->extension();
        $filename = sha1(time().time()).".".$extension;
        $tujuan_upload = 'public/images/'.strtolower(str_replace(' ','_', $namaKategori));
        $upload = $request->file('img_post')->storeAs($tujuan_upload, $filename);
        // Logic upload selesai

        $post = new Posting([
            'judul_post' => $judulPost,
            'isi_post' => $isiPost,
            'img_post' => $imgPost,
            'link_gambar' => str_replace('public','',$upload),
            'link_post' => $linkPost,
            'nama_kategori' => $idKategori,
            'id_kategori' => $idKategori,
            'id_tag' => $idTag
        ]);

        $post->save();
        return redirect('/manajemenproduct')->with('success', 'Post saved!');
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

        return view('crud.product.editproduct', $this->data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul_post'=>'required',
            'img_post'=>'required',
            'id_tag'=>'required',
        ]);

        $post = Posting::find($id);
        $judulPost = $request->get('judul_post');
        $isiPost = $request->get('isi_post');
        $linkPost = $request->get('link_post');
        $idKategori = $request->get('id_kategori');
        $idTag = $request->get('id_tag');

        if(empty($request->file('img_post')))
        {
            $post->judul_post = $judulPost;
            $post->isi_post = $isiPost;
            $post->link_post = $linkPost;
            $post->id_kategori = $idKategori;
            $post->id_tag = $idTag;
        }
        else
        {
            // Logic Upload dimulai dari sini
            $namaKategori = $this->__changeIdCategoryToString($idKategori);
            $extension = $request->file('img_post')->extension();
            $originalFilename = $request->file('img_post')->getClientOriginalName();
            $filename = sha1(time().time()).".".$extension;
            $tujuan_upload = 'public/images/'.strtolower(str_replace(' ','_', $namaKategori));
            $upload = $request->file('img_post')->storeAs($tujuan_upload, $filename);
            // Logic upload selesai

            $post->judul_post = $judulPost;
            $post->isi_post = $isiPost;
            $post->img_post = $originalFilename;
            $post->link_gambar = str_replace('public','',$upload);
            $post->link_post = $linkPost;
            $post->id_kategori = $idKategori;
            $post->id_tag = $idTag;
        }

        $post->save();
        return redirect('/manajemenproduct')->with('success', 'Product updated!');
    }

    public function destroy($id)
    {
        $product = Posting::find($id);
        $product->delete();
        return redirect('/manajemenproduct')->with('success', 'Product deleted!');
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

    /**
     * @param $idKategori
     */
    private function __changeIdCategoryToString($idKategori)
    {
        $stringIdKategory = Categories::find($idKategori);
        return $stringIdKategory->nama_kategori;
    }
}
