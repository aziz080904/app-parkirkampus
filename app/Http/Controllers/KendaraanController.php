<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Kendaraan;
use App\Models\Jenis;

class KendaraanController extends Controller
{
    public function show(){
        $list_kendaraan = Kendaraan::with('jenis')->get(); // Eager loading relasi jenis
        return view('kendaraan.show', ['list_kendaraan' => $list_kendaraan]);
    }

    public function create()
    {
        $list_jenis = Jenis::all();
        $kendaraan = new Kendaraan();
        return view('kendaraan.form',['kendaraan'=>$kendaraan,'list_jenis'=>$list_jenis]);
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'merk' => 'required',
            'nopol' => 'required',
            'thn_beli' => 'required',
            'deskripsi' => 'required',
            'kapasitas_kursi' => 'required',
            'jenis_kendaraan_id' => 'required',
        ]);

        if($request->id){  
            Kendaraan::find($request->id)->update($request->all());
            return redirect(route('kendaraan.show'))->with('pesan', 'Data berhasil diupdate');
        }
        else{
            Kendaraan::create($request->all());
            return redirect(route('kendaraan.show'))->with('pesan', 'Data berhasil disimpan');
        }  
    }

    public function edit($id)
    {
        $kendaraan = Kendaraan::find($id);
        $list_jenis = Jenis::all();
        return view('kendaraan.form',['kendaraan'=>$kendaraan,'list_jenis'=>$list_jenis]);
    }

    public function view($id)
    {
        $kendaraan = Kendaraan::find($id);
        return view('kendaraan.view',['kendaraan'=>$kendaraan]);
    }

    public function destroy($id): RedirectResponse
    {
        Kendaraan::find($id)->delete();
        return redirect(route('kendaraan.show'))->with('pesan', 'Data berhasil dihapus');
    }
}


