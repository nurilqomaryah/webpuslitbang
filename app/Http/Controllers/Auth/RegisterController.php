<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
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
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    public function create()
    {
        $this->data['id_role'] = DB::table('m_role')
            ->get();

        $this->data['id_user'] = DB::table('m_user')
            ->get();

        return view('auth.register', $this->data);

    }

    public function store(Request $request)
    {
        $request->validate([
            'id_role'=>'required',
            'nama_user'=>'required',
            'username'=>'required',
            'password'=>'required|min:5'
        ]);


        $user = new User([
            'id_role' => $request->get('id_role'),
            'nama_user' => $request->get('nama_user'),
            'username' => $request->get('username'),
            'password' => Hash::make($request->get('password'))
        ]);
        $user->status = 1;
        $user->save();
        return redirect('/manajemenuser')->with('success', 'User saved!');
    }

    public function edit($id)
    {
        $this->data['role'] = DB::table('m_role')
            ->get();
        $this->data['edit_user'] = User::find($id);

        return view('crud.users.edituser', $this->data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_role'=>'required',
            'nama_user'=>'required',
            'username'=>'required',
            'password'=>'required|min:5'
        ]);

        $user = User::find($id);
        $user->id_role = $request->get('id_role');
        $user->nama_user = $request->get('nama_user');
        $user->username = $request->get('username');
        $user->password = Hash::make($request->get('password'));
        $user->status = $request->get('status');
        $user->save();

        return redirect('/manajemenuser')->with('success', 'User updated!');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/manajemenuser')->with('success', 'User deleted!');
    }

}
