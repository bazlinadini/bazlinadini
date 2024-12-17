<!-- resources/views/golongan/edit.blade.php -->
@extends('layouts.app')

@section('content')

    <!-- Form Edit Golongan -->
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h3>Edit Golongan</h3>
    <form action="{{ route('golongan.update', $golongan->gol_id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="gol_kode" class="form-label">Kode Golongan</label>
            <input type="text" class="form-control" id="gol_kode" name="gol_kode" value="{{ $golongan->gol_kode }}" required>
        </div>
        <div class="mb-3">
            <label for="gol_nama" class="form-label">Nama Golongan</label>
            <input type="text" class="form-control" id="gol_nama" name="gol_nama" value="{{ $golongan->gol_nama }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection