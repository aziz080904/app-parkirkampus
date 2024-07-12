<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Detail Transaksi</x-slot> 
<x-slot name="card_title">Detail Transaksi :: {{ $transaksi->nama }}</x-slot> 
<x-slot name="card_footer">@RumahSakit NF</x-slot>
<table class="table table-striped table-sm">
    <tr><th class="w-25">N</th><td>{{ $transaksi->kendaraan->nopol }}</td></tr>
    <tr><th class="w-25">N</th><td>{{ $transaksi->area_parkir->nama }}</td></tr>
    <tr><th>Tanggal</th><td>{{ $transaksi->tanggal }}</td></tr>
    <tr><th>Jam Masuk</th><td>{{ $transaksi->mulai }}</td></tr>
    <tr><th>Jam Keluar</th><td>{{ $transaksi->akhir }}</td></tr>
    <tr><th>Biaya</th><td>{{ $transaksi->biaya }}</td></tr>
</table>
<div>
    <a href="{{ route('transaksi.show') }}" class="btn btn-success mt-2">Kembali</a>
</div>
</x-layout>
