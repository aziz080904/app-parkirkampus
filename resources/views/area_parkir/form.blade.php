<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Kelola Area Parkir</x-slot> 
<x-slot name="card_title">Form Kelola Area Parkir</x-slot> 
<x-slot name="card_footer">@Parkir NF</x-slot>
<form action="{{ route('area_parkir.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="nama">Nama Area</label>
        <input type="text" name="nama" id="nama" value="{{ $area_parkir->nama}}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="kapasitas">Kapasitas</label>
        <input type="text" name="kapasitas" id="kapasitas" value="{{ $area_parkir->kapasitas }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="keterangan">Keterangan</label>
        <textarea name="keterangan" id="keterangan" class="form-control" required>{{ $area_parkir->keterangan }}</textarea>
    </div>
    <div class="form-group">
        <label for="kampus_id">ID Kampus</label>
        <select name="kampus_id" class="form-select form-select-lg mb-3">
            <option>--Pilih--</option>
            @foreach($list_kampus as $kampus)
            <option value="{{ $kampus->id }}" {{ $area_parkir->kampus_id==$kampus->id ? 'selected': ''}}>
                {{ $kampus->nama }}
            </option>
            @endforeach
        </select>
    </div>
    <input type="hidden" name="id" value="{{ $area_parkir->id }}">
    <a href="{{ route('area_parkir.show') }}" class="btn btn-success mr-2">Batal</a>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</x-layout>