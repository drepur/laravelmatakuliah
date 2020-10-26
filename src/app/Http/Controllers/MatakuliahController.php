<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function index(){
        return view('matakuliah',[
            "matakuliah" => \App\Models\Matakuliah::all()
        ]);
    }
    //
    public function simpan(Request $request){
       // dd($request->all());
       \App\Models\Matakuliah::create([
            "kodemk" => $request->kodemk,
            "mk" => $request->mk,
            "dosen" => $request->dosen,
            "noruang" => $request->noruang
       ]);

       return redirect()->route('matakuliah.index');
    }
}
