<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'username';
    }

    public function index()
    {
        return view('auth.login');
    }

    public function onSubmit(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        $user = new User();
        $result = $user->checkUser($username);

        if(Hash::check($password, $result[0]->password))
        {
            $request->session()->put('id_user', $result[0]->id_user);
            $request->session()->put('role',$result[0]->id_role);
            $request->session()->put('nama', $result[0]->nama_user);
            if($result[0]->id_role == 1)
            {
                return redirect()
                    ->route('dashboardadmin');
            }
            else
            {
                echo $result[0]->id_role;
                // Redirect ke halaman author
                return redirect()
                    ->route('dashboardauthor');
            }
        }
        else
        {
            echo "Password Salah";
        }
    }


}
