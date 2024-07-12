<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Detail Area Parkir</x-slot> 
<x-slot name="card_title">Detail Area Parkir</x-slot> 
<x-slot name="card_footer">@Parkir NF</x-slot>
<table class="table table-striped table-sm">
    <tr><th class="w-25">Nama Area Parkir</th><td>{{ $area_parkir->nama }}</td></tr>
    <tr><th>Kapasitas</th><td>{{ $area_parkir->kapasitas}}</td></tr>
    <tr><th>Keterangan</th><td>{{ $area_parkir->keterangan}}</td></tr>
    <tr><th>Pasien</th><td>{{ $area_parkir->kampus->nama}}</td></tr>
</table>
<div>
    <a href="{{ route('area_parkir.show') }}" class="btn btn-success mt-2">Kembali</a>
</div>
</x-layout>
