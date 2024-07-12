<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Area_parkir;
use App\Models\Kampus;

class Area_parkirController extends Controller
{
    //
    public function show(){ //menampilkan tabel area_parkir
        $list_area_parkir = Area_parkir::all(); //select * from area_parkir
        return view('area_parkir.show', ['list_area_parkir'=>$list_area_parkir]);
    }

    public function create()
    {
        $list_kampus = Kampus::all();
        $area_parkir = new Area_parkir();
        return view('area_parkir.form',['area_parkir'=>$area_parkir,'list_kampus'=>$list_kampus]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi data inputan
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'kelurahan_id' => 'required',
        ]);

        if($request->id){  
            Area_parkir::find($request->id)->update($request->all());
            // Redirect to the index page with a success message
            return redirect(route('area_parkir.show'))->with('pesan', 'Data berhasil diupdate');
        }
        else{
            // Create a new Area_parkir instance with the validated data
            Area_parkir::create($request->all());
            // Redirect to the index page with a success message
            return redirect(route('area_parkir.show'))->with('pesan', 'Data berhasil disimpan');
        }  
    }

    public function edit($id)
    {
        $area_parkir = Area_parkir::find($id);
        $list_kampus = Kampus::all();
        return view('area_parkir.form',['area_parkir'=>$area_parkir,'list_kampus'=>$list_kampus]);
    }
    public function view($id)
    {
        $area_parkir = Area_parkir::find($id);
        return view('area_parkir.view',['area_parkir'=>$area_parkir]);
    }
    public function destroy($id): RedirectResponse
    {
        Area_parkir::find($id)->delete();
        return redirect(route('area_parkir.show'))->with('pesan', 'Data berhasil dihapus');
    }
}

