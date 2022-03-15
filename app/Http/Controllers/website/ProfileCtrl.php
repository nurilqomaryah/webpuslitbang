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


class ProfileCtrl extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function struktur()
    {
        $visitor = DB::table('t_visitor')->count();
        return view('profile.struktur',compact('visitor'));
    }

    public function visi()
    {
        $visitor = DB::table('t_visitor')->count();
        return view('profile.visimisi',compact('visitor'));
    }

    public function tusi()
    {
        $visitor = DB::table('t_visitor')->count();
        return view('profile.tupoksi',compact('visitor'));
    }

    public function tujuan()
    {
        $visitor = DB::table('t_visitor')->count();
        return view('profile.tujuan',compact('visitor'));
    }

    public function dukungan()
    {
        $visitor = DB::table('t_visitor')->count();
        return view('profile.dukungan',compact('visitor'));
    }

    public function pimpinan()
    {
        $visitor = DB::table('t_visitor')->count();
        return view('profile.pimpinan',compact('visitor'));
    }

    public function sekapur()
    {
        $visitor = DB::table('t_visitor')->count();
        return view('profile.sekapur',compact('visitor'));
    }

    public function kapuslitbangwas()
    {
        $visitor = DB::table('t_visitor')->count();
        return view('profile.kapuslitbangwas',compact('visitor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }


}
