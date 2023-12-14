@extends('layout.juwita')
@section('konten')
<h2>Input Data Tamu Undangan Temu Mahasiswa Matematika 2023</h2>
<form method="POST" action="/isian" >
    @csrf
    <div class="mb-3">
        <label for="Nama" class="form-label">Nama:</label>
        <input type="text" id="Nama" name="Nama" class="form-control" placeholder="Nama Lengkap" value="{{Session::get('Nama')}}">
    </div>
    <div class="mb-3">
        <label for="NIM" class="form-label">NIM:</label>
        <input type="Number" id="NIM" name="NIM" class="form-control" placeholder="Contoh: 2222222222" value="{{Session::get('NIM')}}">
    </div>
    <div class="mb-3">
        <label for="Kelas" class="form-label">Kelas:</label>
        <input type="text" id="kelas" name="Kelas" class="form-control" placeholder="Contoh: 1D" value="{{Session::get('Kelas')}}">
    </div>
    <div class="mb-3">
        <label for="Angkatan" class="form-label">Angkatan:</label>
        <input type="text" id="Angkatan" name="Angkatan" class="form-control" placeholder="Isi dengan tahun angkatan!" value="{{Session::get('Angkatan')}}">
    </div>

    <div class="mb-3">
        <button>Submit</button>
    </div>
</form>
@endsection