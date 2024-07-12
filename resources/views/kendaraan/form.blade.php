<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Kelola Kendaraan</x-slot> 
<x-slot name="card_title">Form Kelola kendaraan</x-slot> 
<x-slot name="card_footer">@Parkir NF</x-slot>
<form action="{{ route('kendaraan.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="merk">Merk Kendaraan</label>
        <input type="text" name="merk" id="merk" value="{{ $kendaraan->merk }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="nopol">Nomor Polisi</label>
        <input type="text" name="nopol" id="nopol" value="{{ $kendaraan->nopol }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="thn_beli">Tahun Beli</label>
        <input type="text" name="thn_beli" id="thn_beli" value="{{ $kendaraan->thn_beli}}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea name="deskripsi" id="deskripsi" class="form-control" required>{{ $kendaraan->deskripsi }}</textarea>
    </div>
    <div class="form-group">
        <label for="kapasitas_kursi">Kapasitas Kursi</label>
        <input type="text" name="kapasitas_kursi" id="kapasitas_kursi" value="{{ $kendaraan->kapasitas_kursi}}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="jenis">Jenis Kendaraan</label>
        <select name="jenis_kendaraan_id" class="form-select form-select-lg mb-3">
            <option>--Pilih--</option>
            @foreach($list_jenis as $jenis)
            <option value="{{ $jenis->id }}" {{ $kendaraan->jenis_kendaraan_id==$jenis->id ? 'selected': ''}}>
                {{ $jenis->nama }}
            </option>
            @endforeach
        </select>
    </div>
    <input type="hidden" name="id" value="{{ $kendaraan->id }}">
    <a href="{{ route('kendaraan.show') }}" class="btn btn-success mr-2">Batal</a>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</x-layout>