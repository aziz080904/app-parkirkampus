<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Kelola Transaksi</x-slot> 
<x-slot name="card_title">Form Kelola Transaksi</x-slot> 
<x-slot name="card_footer">@Parkir NF</x-slot>
<form action="{{ route('transaksi.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="kendaraan_id">ID Kendaraan</label>
        <select name="kendaraan_id" class="form-select form-select-lg mb-3">
            <option>--Pilih--</option>
            @foreach($list_kendaraan as $kendaraan)
            <option value="{{ $kendaraan->id }}" {{ $transaksi->kendaraan_id==$kendaraan->id ? 'selected': ''}}>
                {{ $kendaraan->nopol }}
            </option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="area_parkir_id">ID Area Parkir</label>
        <select name="area_parkir_id" class="form-select form-select-lg mb-3">
            <option>--Pilih--</option>
            @foreach($list_area_parkir as $area_parkir)
            <option value="{{ $area_parkir->id }}" {{ $transaksi->area_parkir_id==$area_parkir->id ? 'selected': ''}}>
                {{ $area_parkir->nama }}
            </option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="tanggal">Tanggal</label>
        <input type="date" name="tanggal" id="tanggal" value="{{ $transaksi->tanggal}}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="mulai">Jam Masuk</label>
        <input type="time" name="mulai" id="mulai" value="{{ $transaksi->mulai }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="mulai">Jam Keluar</label>
        <input type="time" name="akhir" id="akhir" value="{{ $transaksi->mulai }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="biaya">Biaya</label>
        <input type="text" name="biaya" id="biaya" value="{{ $transaksi->biaya }}" class="form-control" required>
    </div>
    <input type="hidden" name="id" value="{{ $transaksi->id }}">
    <a href="{{ route('transaksi.show') }}" class="btn btn-success mr-2">Batal</a>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</x-layout>