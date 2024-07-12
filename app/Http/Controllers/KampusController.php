<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kampus;

class KampusController extends Controller
{
    //
    public function show(){
        $list_kampus = Kampus::all();
        return view('kampus.show',['list_kampus'=>$list_kampus]);
    }
}
