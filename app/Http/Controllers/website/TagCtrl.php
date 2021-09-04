<?php

namespace App\Http\Controllers\website;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Auth;
use Carbon\Carbon;
use phpDocumentor\Reflection\DocBlock\Tag;
use Session;
use \Validator;
use Response;
use Illuminate\Support\Facades\Input;
use Alert;
use PDF;
use App\Models\website\Tags;
use Illuminate\Support\Facades\Hash;


class TagCtrl extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tag = DB::table('ref_tag')
            ->get();

        return view('crud.tags.index', compact('tag'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['id_tag'] = DB::table('ref_tag')
            ->get();

        return view('crud.tags.createtag', $this->data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_tag'=>'required',
        ]);


        $tag = new Tags([
            'nama_tag' => $request->get('nama_tag'),
        ]);

        $tag->save();
        return redirect('/manajementag')->with('success', 'Tag saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['edit_tag'] = Tags::find($id);

        return view('crud.tags.edittag', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_tag'=>'required',

        ]);

        $tag = Tags::find($id);
        $tag->nama_tag = $request->get('nama_tag');
        $tag->save();

        return redirect('/manajementag')->with('success', 'Tag updated!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = Tags::find($id);
        $tag->delete();
        return redirect('/manajementag')->with('success', 'Tag deleted!');
    }

}
