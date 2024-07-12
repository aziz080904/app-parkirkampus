<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Data Jenis Kendaraan</x-slot> 
<x-slot name="card_title">Daftar Jenis Kendaraan</x-slot> 
<x-slot name="card_footer">@Parkir NF</x-slot>

<h2 class="text-center">Data Jenis Kendaraan</h2>
<a href=""><button class="btn btn-primary mb-1">Tambah Data</button></a>
<table class="table table-striped text-center">
    <thead>
        <tr>
            <th>No</th>
            <th>Jenis Kendaraan</th>  
            <th>Aksi</th>          
        </tr>
    </thead>
    <tbody>
        @foreach($list_jenis as $jenis)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $jenis->nama }}</td>
            <td>
                <a href="" class="btn btn-primary">View</a>
                <a href="" class="btn btn-warning">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</x-layout>


