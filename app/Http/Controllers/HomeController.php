<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $users = DB::connection('mysql_remote')->select('select * from users');
        // $users2 = DB::connection('mysql_local')->select('select * from users');
        $cat01 = DB::connection('mysql_local01')->table('categorias')->get();
        $cat02 = DB::connection('mysql_local02')->table('categorias')->get();

        $categorias = $cat01->merge($cat02);
        
        return view('index', ['categorias' => $categorias]);
    }
}
