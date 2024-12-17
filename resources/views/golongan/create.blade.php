<!-- resources/views/golongan/create.blade.php -->
@extends('layouts.app')

@section('content')

    <!-- Form Tambah Golongan -->
    <div class="card shadow-sm">
        <h3>Tambah Golongan</h3>
    <form action="{{ route('golongan.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="gol_kode" class="form-label">Kode Golongan</label>
            <input type="text" class="form-control" id="gol_kode" name="gol_kode" required>
        </div>
        <div class="mb-3">
            <label for="gol_nama" class="form-label">Nama Golongan</label>
            <input type="text" class="form-control" id="gol_nama" name="gol_nama" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection