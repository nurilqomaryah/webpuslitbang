<?php

namespace App\Http\Controllers\website;
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
use App\Models\User;
use App\Models\website\Roles;
use Illuminate\Support\Facades\Hash;


class RoleCtrl extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = DB::table('m_role')
              ->get();

        return view('crud.roles.index', compact('role'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['id_role'] = DB::table('m_role')
            ->get();

        return view('crud.roles.createrole', $this->data);

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
            'nama_role'=>'required',
        ]);


        $role = new Roles([
            'nama_role' => $request->get('nama_role'),
            'deskripsi' => $request->get('deskripsi'),
        ]);

        $role->save();
        return redirect('/manajemenrole')->with('success', 'Role saved!');
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
        $this->data['edit_role'] = Roles::find($id);
        return view('crud.roles.editrole', $this->data);
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
            'nama_role'=>'required',

        ]);

        $role = Roles::find($id);
        $role->nama_role = $request->get('nama_role');
        $role->deskripsi = $request->get('deskripsi');

        $role->save();

        return redirect('/manajemenrole')->with('success', 'Role updated!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Roles::find($id);
        $role->delete();
        return redirect('/manajemenrole')->with('success', 'Role deleted!');
    }

}
