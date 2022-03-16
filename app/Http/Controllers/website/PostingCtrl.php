<?php

namespace App\Http\Controllers\website;
use App\Models\website\Categories;
use App\Models\website\Tags;
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

    public function index(Request $request)
    {
        $idUser = $request->session()->get('id_user');
        if($request->session()->get('role') == '1')
        {
            $posts = DB::table('t_post')
                ->select('t_post.id_post as id','t_post.judul_post','t_post.isi_post','t_post.img_post','t_post.link_gambar','t_post.link_post','t_post.tgl_post','ref_tag.nama_tag','m_user.nama_user')
                ->join('ref_tag','t_post.id_tag','=','ref_tag.id_tag')
                ->join('m_user','t_post.id_user','=','m_user.id_user')
                ->where('t_post.id_tag','!=','1')
                ->get();
        }
        else
        {
            $postList = new Posting();
            $posts = $postList->getPostByAuthor($idUser);
        }

        return view('crud.posts.index', compact('posts'));
    }

    public function create()
    {
        $this->data['id_user'] = DB::table('m_user')
             ->get();

        $this->data['id_tag'] = DB::table('ref_tag')
            ->get();

        $this->data['id_post'] = DB::table('t_post')
            ->get();

        return view('crud.posts.createpost', $this->data);
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
        $idTag = $request->get('id_tag');
        $linkPost = $request->get('link_post');
        $idUser = $request->session()->get('id_user');
        $linkFile = "";

        // Logic Upload dimulai dari sini
        $namaTag = $this->__changeIdTagToString($idTag);
        $extension = $request->file('img_post')->extension();
        $filename = sha1(time().time()).".".$extension;
        $tujuan_upload = 'public/images/'.strtolower(str_replace(' ','_', $namaTag));
        $upload = $request->file('img_post')->storeAs($tujuan_upload, $filename);
        // Logic upload selesai

        if(!empty($request->file('link_file')))
        {
            $extension = $request->file('link_file')->extension();
            $filenameArtikel = sha1(time().time()).".".$extension;
            $tujuan_upload = 'public/artikel';
            $uploadFile = $request->file('link_file')->storeAs($tujuan_upload, $filenameArtikel);
            $linkFile = str_replace('public','',$uploadFile);
        }

        $post = new Posting([
            'id_user'=> $idUser,
            'judul_post' => $judulPost,
            'isi_post' => $isiPost,
            'img_post' => $imgPost,
            'link_gambar' => str_replace('public','',$upload),
            'link_post' => $linkPost,
            'nama_tag' => $idTag,
            'id_tag' => $idTag,
            'link_file' => (!empty($linkFile) ? $linkFile : '')
        ]);

        $post->save();
        return redirect('/manajemenpost')->with('success', 'Post saved!');
    }

    public function edit($id)
    {
        $this->data['user'] = DB::table('m_user')
            ->get();

        $this->data['tag'] = DB::table('ref_tag')
            ->get();

        $this->data['edit_post'] = Posting::find($id);

        return view('crud.posts.editpost', $this->data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul_post'=>'required',
            'id_tag'=>'required',
        ]);

        $post = Posting::find($id);
        $judulPost = $request->get('judul_post');
        $isiPost = $request->get('isi_post');
        $linkPost = $request->get('link_post');
        $idTag = $request->get('id_tag');
        $idUser = $request->session()->get('id_user');

        $post->judul_post = $judulPost;
        $post->isi_post = $isiPost;
        $post->link_post = $linkPost;
        $post->id_tag = $idTag;
        $post->id_user = $idUser;
        if(!empty($request->file('img_post')))
        {
            // Logic Upload dimulai dari sini
            $namaTag = $this->__changeIdTagToString($idTag);
            $extension = $request->file('img_post')->extension();
            $originalFilename = $request->file('img_post')->getClientOriginalName();
            $filename = sha1(time().time()).".".$extension;
            $tujuan_upload = 'public/images/'.strtolower(str_replace(' ','_', $namaTag));
            $upload = $request->file('img_post')->storeAs($tujuan_upload, $filename);
            // Logic upload selesai

            $post->img_post = $originalFilename;
            $post->link_gambar = str_replace('public','',$upload);
        }

        if(!empty($request->file('link_file')))
        {
            // Logic Upload dimulai dari sini
            $extension = $request->file('link_file')->extension();
            $filenameArtikel = sha1(time().time()).".".$extension;
            $tujuan_uploadFile = 'public/artikel';
            $uploadFile = $request->file('link_file')->storeAs($tujuan_uploadFile, $filenameArtikel);
            // Logic upload selesai

            $post->link_file = str_replace('public','',$uploadFile);
        }

        $post->save();
        return redirect('/manajemenpost')->with('success', 'Post updated!');
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
            ->select('t_post.id_post as id','t_post.judul_post','t_post.isi_post','t_post.tgl_post','t_post.img_post','t_post.link_post','t_post.views')
            ->where('t_post.id_tag','=',3)
            ->orderBy('t_post.created_at','desc')
            ->limit(3)
            ->get();
        $artikel = DB::table('t_post')
            ->select('t_post.id_post as id','t_post.judul_post','t_post.isi_post','t_post.tgl_post','t_post.img_post','t_post.link_post','t_post.link_file','t_post.link_gambar')
            ->where('t_post.id_tag','=',4)
            ->orderBy('t_post.created_at','desc')
            ->limit(3)
            ->get();
        $pengumuman = DB::table('t_post')
            ->select('t_post.id_post as id','t_post.img_post','t_post.link_post','t_post.link_gambar')
            ->where('t_post.id_tag','=',2)
            ->limit(3)
            ->orderBy('t_post.created_at','desc')
            ->get();
        $info = DB::table('t_post')
            ->select('t_post.id_post as id','t_post.img_post','t_post.link_post','t_post.link_gambar')
            ->where('t_post.id_tag','=',5)
            ->orderBy('t_post.created_at','desc')
            ->limit(3)
            ->get();
        $video = DB::table('t_post')
            ->select('t_post.id_post as id','t_post.img_post','t_post.link_post')
            ->where('t_post.id_tag','=',6)
            ->orderBy('t_post.created_at','desc')
            ->limit(3)
            ->get();
        $achieve = DB::table('t_post')
            ->select('t_post.id_post as id','t_post.img_post','t_post.link_post')
            ->where('t_post.id_tag','=',7)
            ->limit(3)
            ->get();
        $visitor = DB::table('t_visitor')->count();
        return view('home.index',compact('berita','artikel','pengumuman','info','video','achieve', 'visitor'));
    }

    public function read_berita(Request $id)
    {
        $post = Posting::find($id);
        $baca_berita = DB::table('t_post')
            ->select('t_post.id_post as id','t_post.judul_post','t_post.isi_post','t_post.tgl_post','t_post.img_post','t_post.link_post','t_post.views','t_post.link_gambar')
            ->where('t_post.id_tag','=',3)
            ->get();
        return view('home.read-berita',compact('baca_berita'));
    }

    public function grafis()
    {
        $grafis = DB::table('t_post')
            ->select('t_post.id_post as id','t_post.img_post','t_post.link_post')
            ->where('t_post.id_tag','=',5)
            ->limit(3)
            ->get();
        $visitor = DB::table('t_visitor')->count();
        return view('home.infografis',compact('grafis','visitor'));
    }

    public function video()
    {
        $video = DB::table('t_post')
            ->select('t_post.id_post as id','t_post.img_post','t_post.link_post')
            ->where('t_post.id_tag','=',6)
            ->limit(3)
            ->get();
        $visitor = DB::table('t_visitor')->count();
        return view('home.videografis',compact('video','visitor'));
    }

    /**
     * @param $idTag
     */
    private function __changeIdTagToString($idTag)
    {
        $stringIdTag = Tags::find($idTag);
        return $stringIdTag->nama_tag;
    }
}
