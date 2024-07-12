<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Transaksi;
use App\Models\Kendaraan;
use App\Models\Area_parkir;

class TransaksiController extends Controller
{
    //
    public function show(){
        $list_transaksi = Transaksi::all();
        return view('transaksi.show', ['list_transaksi'=>$list_transaksi]);
    }

    public function create()
    {
        $list_kendaraan = Kendaraan::all();
        $transaksi = new Transaksi();
        $list_area_parkir = Area_parkir::all();
        return view('transaksi.form', ['transaksi' => $transaksi, 'list_kendaraan' => $list_kendaraan, 'list_area_parkir' => $list_area_parkir]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi data inputan
        $request->validate([
            'kendaraan_id' => 'required',
            'area_parkir_id' => 'required',
            'tanggal' => 'required',
            'mulai' => 'required',
            'akhir' => 'required',
            'biaya' => 'required',
        ]);

        if($request->id){  
            Transaksi::find($request->id)->update($request->all());
            // Redirect to the index page with a success message
            return redirect(route('transaksi.show'))->with('pesan', 'Data berhasil diupdate');
        }
        else{
            // Create a new Pasien instance with the validated data
            Pasien::create($request->all());
            // Redirect to the index page with a success message
            return redirect(route('transaksi.show'))->with('pesan', 'Data berhasil disimpan');
        }  
    }

    public function edit($id)
    {
        $transaksi = Transaksi::find($id);
        $list_area_parkir = Area_parkir::all();
        return view('transaksi.form',['transaksi'=>$transaksi,'list_area_parkir'=>$list_area_parkir]);
    }
    public function view($id)
    {
        $transaksi = Transaksi::find($id);
        return view('transaksi.view',['transaksi'=>$transaksi]);
    }
    public function destroy($id): RedirectResponse
    {
        Pasien::find($id)->delete();
        return redirect(route('transaksi.show'))->with('pesan', 'Data berhasil dihapus');
    }
}
