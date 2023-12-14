@extends('layout.juwita')
@section('konten')
<h4>Edit Data Tamu Undangan Temu Mahasiswa Matematika 2023</h4>
<form method="POST" action="{{'/isian/'.$data->Nama}}" >
    @csrf
    @method('put')
    <div class="mb-3">
        <label for="Nama" class="form-label">Nama:</label>
        <input type="text" id="Nama" name="Nama" class="form-control" placeholder="Nama Lengkap" value="{{$data->Nama}}">
    </div>
    <div class="mb-3">
        <label for="NIM" class="form-label">NIM:</label>
        <input type="Number" id="NIM" name="NIM" class="form-control" placeholder="Contoh: 2222222222" value="{{$data->NIM}}">
    </div>
    <div class="mb-3">
        <label for="Kelas" class="form-label">Kelas:</label>
        <input type="text" id="kelas" name="Kelas" class="form-control" placeholder="Contoh: 1D" value="{{$data->Kelas}}">
    </div>
    <div class="mb-3">
        <label for="Angkatan" class="form-label">Angkatan:</label>
        <input type="text" id="Angkatan" name="Angkatan" class="form-control" placeholder="Isi dengan tahun angkatan!" value="{{$data->Angkatan}}">
    </div>

    <div class="mb-3">
        <button>Submit</button> <a class="btn btn-econdry" href="/isian">Kembali</a>
    </div>
</form>
@endsection