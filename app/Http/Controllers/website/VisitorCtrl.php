<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\website\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisitorCtrl extends Controller
{
    protected $t_visitor;
    public function __construct()
    {
        $this->t_visitor = new Visitor();
    }

    public function index(Request $request)
    {
        $data = array(
            'ip_address' => $request->getClientIp(),
            'user_agent' => $request->header('User-Agent')
        );

        DB::table('t_visitor')
            ->insert($data);
    }
}
