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

class ProdukCtrl extends Controller
{

    public function index()
    {
        $posts = DB::table('t_post')
            ->select('t_post.id_post as id','t_post.judul_post','t_post.isi_post','t_post.img_post','ref_kategori.nama_kategori','ref_tag.nama_tag')
            ->join('ref_kategori', 't_post.id_kategori', '=', 'ref_kategori.id_kategori')
            ->join('ref_tag','t_post.id_tag','=','ref_tag.id_tag')
            ->get();

        return view('posting.index', compact('posts'));
    }

    public function create()
    {
        $this->data['id_post'] = DB::table('t_post')
            ->select('m_user.id_role as id','m_user.nama_user','m_role.nama_role','m_user.username', 'm_user.password','m_user.status')
            ->join('m_role', 'm_user.id_role', '=', 'm_role.id_role')
            ->get();

        return view('posting.createpost', $this->data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul_post'=>'required',
        ]);

        $post = new Post([
            'judul_post' => $request->get('judul_post'),
            'isi_post' => $request->get('isi_post'),
            'img_post' => $request->get('img_post'),
            'nama_kategori' => $request->get('nama_kategori'),
            'nama_tag' => $request->get('nama_tag'),
        ]);

        $tujuan_upload = 'images';
        $post->move($tujuan_upload,$post->getClientOriginalName());
        $post->save();
        return redirect('/post')->with('success', 'Post saved!');
    }

    public function edit($id)
    {
        $post = Posting::find($id);
        return view('posting.editpost', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul_post'=>'required',
        ]);

        $post = Posting::find($id);
        $post->judul_post = $request->get('judul_post');
        $post->isi_post = $request->get('isi_post');
        $post->img_post = $request->get('img_post');
        $post->nama_kategori = $request->get('nama_kategori');
        $post->nama_tag = $request->get('nama_tag');
        $post->save();

        return redirect('/post')->with('success', 'Post updated!');
    }

    public function destroy($id)
    {
        $post = Posting::find($id);
        $post->delete();
        return redirect('/post')->with('success', 'Post deleted!');
    }

    public function journal()
    {
        $jurnal = DB::table('t_post')
            ->select('t_post.id_post as id','t_post.judul_post','t_post.img_post','t_post.link_file')
            ->where('t_post.id_tag','=',1)
            ->where('t_post.id_kategori','=',1)
            ->limit(9)
            ->get();
        return view('produk.jurnal.jurnal',compact('jurnal'));
    }

    public function majalah()
    {
        $majalah = DB::table('t_post')
            ->select('t_post.id_post as id','t_post.judul_post','t_post.img_post','t_post.link_file')
            ->where('t_post.id_tag','=',1)
            ->where('t_post.id_kategori','=',2)
            ->limit(9)
            ->get();
        return view('produk.majalah.majalah',compact('majalah'));
    }

    public function hasil()
    {
        $hasil = DB::table('t_post')
            ->select('t_post.id_post as id','t_post.isi_post','t_post.judul_post','t_post.img_post','t_post.link_file')
            ->where('t_post.id_tag','=',1)
            ->where('t_post.id_kategori','=',5)
            ->limit(9)
            ->get();
        return view('produk.hasil.hasil',compact('hasil'));
    }
}
