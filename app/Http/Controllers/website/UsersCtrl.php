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
use App\Models\website\Role;
use Illuminate\Support\Facades\Hash;


class UsersCtrl extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = DB::table('m_user')
                ->select('m_user.id_user as id','m_user.nama_user','m_role.nama_role','m_user.username','m_user.password','m_user.status')
                ->join('m_role', 'm_user.id_role', '=', 'm_role.id_role')
                ->get();

        return view('crud.users.index', compact('users'));

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

        $this->data['id_user'] = DB::table('m_user')
             ->get();

        return view('crud.users.createuser', $this->data);

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
            'id_role'=>'required',
            'nama_user'=>'required',
            'username'=>'required',
            'password'=>'required|min:5'
        ]);


        $user = new Users([
            'id_role' => $request->get('id_role'),
            'nama_user' => $request->get('nama_user'),
            'username' => $request->get('username'),
            'password' => Hash::make($request->get('password'))
        ]);
        $user->status = 1;
        $user->save();
        return redirect('/user')->with('success', 'User saved!');
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
        $this->data['role'] = DB::table('m_role')
             ->get();
//        $this->data['id_user'] = DB::table('m_user')
//             ->select('id_user as id','id_role','nama_user','username','password','status')
//            ->get();
        $this->data['edit_user'] = Users::find($id);

        return view('crud.users.edituser', $this->data);
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
            'id_role'=>'required',
            'nama_user'=>'required',
            'username'=>'required',
            'password'=>'required|min:5'
        ]);

        $user = Users::find($id);
        $user->id_role = $request->get('id_role');
        $user->nama_user = $request->get('nama_user');
        $user->username = $request->get('username');
        $user->password = Hash::make($request->get('password'));
        $user->status = $request->get('status');
        $user->save();

        return redirect('/user')->with('success', 'User updated!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Users::find($id);
        $user->delete();
        return redirect('/user')->with('success', 'User deleted!');
    }

}
