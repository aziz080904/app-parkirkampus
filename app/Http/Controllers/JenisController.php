<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenis;

class JenisController extends Controller
{
    //
    public function show(){
        $list_jenis = Jenis::all();
        return view('jenis.show',['list_jenis'=>$list_jenis]);
    }
}
