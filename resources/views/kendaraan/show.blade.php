<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Data Kendaraan</x-slot> 
<x-slot name="card_title">Daftar Kendaraan</x-slot> 
<x-slot name="card_footer">@Parkir NF</x-slot>

<h2 class="text-center">Data Kendaraan</h2>
@if(Auth::user()->role=='administrator')
<a href="{{route('kendaraan.create')}}"><button class="btn btn-primary mb-1">Tambah Data</button></a>
@endif
<table class="table table-striped text-center">
    <thead>
        <tr>
            <th>No</th>
            <th>Merk Kendaraan</th>
            <th>Nomor Polisi</th>  
            <th>Tahun Beli</th>
            <th>Deskripsi</th>
            <th>Kapasitas Kursi</th>
            <th>Jenis Kendaraan</th> 
            <th>Aksi</th>       
        </tr>
    </thead>
    <tbody>
        @foreach($list_kendaraan as $kendaraan)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th> 
            <td>{{ $kendaraan->merk }}</td>
            <td>{{ $kendaraan->nopol }}</td>
            <td>{{ $kendaraan->thn_beli }}</td>
            <td>{{ $kendaraan->deskripsi }}</td>
            <td>{{ $kendaraan->kapasitas_kursi }}</td>
            <td>{{ $kendaraan->jenis ? $kendaraan->jenis->nama : 'Jenis tidak ditemukan' }}</td>

            <td>
                <!-- <a href="" class="btn btn-primary">View</a>
                <a href="" class="btn btn-warning">Edit</a>
                <a href="" class="btn btn-danger">Delete</a> -->
                @if(Auth::user()->role=='administrator')
                <form action="{{ route('kendaraan.destroy', $kendaraan->id) }}" method="post">
                @endif

                <a href="{{ route('kendaraan.view', $kendaraan->id) }}" class="btn btn-transparant"><i class="fas fa-eye text-info"></i></a>
               
                @if(Auth::user()->role=='administrator')
                <a href="{{ route('kendaraan.edit', $kendaraan->id) }}" class="btn btn-transparant"><i class="fas fa-edit text-warning"></i></a>

                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-transparant"><i class="fas fa-trash text-danger"></i></button>
                @endif
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</x-layout>