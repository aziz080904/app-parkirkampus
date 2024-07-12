<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Detail Kendaraan</x-slot> 
<x-slot name="card_title">Detail Kendaraan :: {{ $kendaraan->merk }} -  {{ $kendaraan->nopol }}</x-slot> 
<x-slot name="card_footer">@Parkir NF</x-slot>
<table class="table table-striped table-sm">
    <tr><th class="w-25">Merk Kendaraan</th><td>{{ $kendaraan->merk }}</td></tr>
    <tr><th>Nomor Polisi</th><td>{{ $kendaraan->nopol }}</td></tr>
    <tr><th>Tahun Beli</th><td>{{ $kendaraan->thn_beli }}</tr>
    <tr><th>Deskripsi</th><td>{{ $kendaraan->deskripsi }}</td></tr>
    <tr><th>Kapasitas Kursi</th><td>{{ $kendaraan->kapasitas_kursi }}</tr>
    <tr><th>Jenis Kendaraan</th><td>{{ $kendaraan->jenis->nama }}</td></tr>
</table>
<div>
    <a href="{{ route('kendaraan.show') }}" class="btn btn-success mt-2">Kembali</a>
</div>
</x-layout>
