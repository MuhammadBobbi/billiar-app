<?php

namespace App\Http\Controllers;
use App\Models\tb_meja;
use Illuminate\Http\Request;

class tb_mejaAdminController extends Controller
{
    public function index(){
        $tb_meja = tb_meja::all();
        return view('homeadmin',compact(['tb_meja']));
    }
}
