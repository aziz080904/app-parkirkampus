<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Data Transaksi</x-slot> 
<x-slot name="card_title">Daftar Transaksi</x-slot> 
<x-slot name="card_footer">@Parkir NF</x-slot>

<h2 class="text-center">Data Transaksi</h2>
<a href="{{route('transaksi.create')}}"><button class="btn btn-primary mb-1">Tambah Data</button></a>
<table class="table table-striped text-center">
    <thead>
        <tr>
            <th>No</th>
            <th>Nopol Kendaraan</th>  
            <th>Area Parkir</th>
            <th>Tanggal</th>
            <th>Jam Masuk</th>
            <th>Jam Keluar</th>
            <th>Biaya</th>
            <th>Aksi</th>          
        </tr>
    </thead>
    <tbody>
        @foreach($list_transaksi as $transaksi)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $transaksi->kendaraan->nopol }}</td>
            <td>{{ $transaksi->area_parkir->nama }}</td>
            <td>{{ $transaksi->tanggal }}</td>
            <td>{{ $transaksi->mulai }}</td>
            <td>{{ $transaksi->akhir }}</td>
            <td>{{ $transaksi->biaya }}</td>
            <td>
                <!-- <a href="" class="btn btn-primary">View</a>
                <a href="" class="btn btn-warning">Edit</a>
                <a href="" class="btn btn-danger">Delete</a> -->
                <form action="{{ route('transaksi.destroy', $transaksi->id) }}" method="post">
                <a href="{{ route('transaksi.view', $transaksi->id) }}" class="btn btn-transparant"><i class="fas fa-eye text-info"></i></a>
                <a href="{{ route('transaksi.edit', $transaksi->id) }}" class="btn btn-transparant"><i class="fas fa-edit text-warning"></i></a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-transparant"><i class="fas fa-trash text-danger"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</x-layout>