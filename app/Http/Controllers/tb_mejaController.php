<?php

namespace App\Http\Controllers;

use App\Models\tb_meja;
use Illuminate\Http\Request;

class tb_mejaController extends Controller
{
    public function index(){
        $tb_meja = tb_meja::all();
        return view('home',compact(['tb_meja']));
    }
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        tb_meja::create($request->except(['_token','submit']));
        return redirect('create');

    }
    public function edit($id){
        $tb_meja = tb_meja::find($id);
        return view('edit',compact(['tb_meja']));
    }
    public function update($id, Request $request){
        $tb_meja = tb_meja::find($id);
        $tb_meja->update($request->except(['_token','submit']));
        return redirect('/homeadmin');
    }
    public function destroy($id){
        $tb_meja = tb_meja::find($id);
        $tb_meja->delete();
        return redirect('/homeadmin');
    }
}
