<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Data Area Parkir</x-slot> 
<x-slot name="card_title">Daftar Area Parkir</x-slot> 
<x-slot name="card_footer">@Parkir NF</x-slot>

<h2 class="text-center">Data Area Parkir</h2>
<a href="{{route('area_parkir.create')}}"><button class="btn btn-primary mb-1">Tambah Data</button></a>
<table class="table table-striped text-center">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kapasitas</th>
            <th>Kampus</th>
            <th>Aksi</th>       
        </tr>
    </thead>
    <tbody>
        @foreach($list_area_parkir as $area_parkir)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th> 
            <td>{{ $area_parkir->nama }}</td>
            <td>{{ $area_parkir->kapasitas }}</td>
            <td>{{ $area_parkir->keterangan }}</td>
            <td>{{ $area_parkir->kampus->nama }}</td>
            <td>
                <form action="{{ route('area_parkir.destroy', $area_parkir->id) }}" method="post">
                <a href="{{ route('area_parkir.view', $area_parkir->id) }}" class="btn btn-transparant"><i class="fas fa-eye text-info"></i></a>
                <a href="{{ route('area_parkir.edit', $area_parkir->id) }}" class="btn btn-transparant"><i class="fas fa-edit text-warning"></i></a>
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