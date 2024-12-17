@extends('layouts.app')

@section('content')

    <!-- Tampilkan pesan sukses jika ada -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif    <!-- Tabel Data Pelanggan -->
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-pelanggans-center">
            <h4 class="mb-0">Daftar Pelanggan</h4>
            <a href="{{ route('pelanggan.create') }}" class="btn btn-light btn-sm">+ Tambah Pelanggan</a>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nomor Pelanggan</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Golongan</th>
                        <th>No HP</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pelanggans as $pelanggan)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $pelanggan->pel_no }}</td>
                        <td>{{ $pelanggan->pel_nama }}</td>
                        <td>{{ $pelanggan->pel_alamat }}</td>
                        <td>{{ $pelanggan->golongan->gol_nama ?? '-' }}</td>
                        <td>{{ $pelanggan->pel_hp }}</td>
                        <td>
                            <a href="{{ route('pelanggan.edit', $pelanggan->pel_id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('pelanggan.destroy', $pelanggan->pel_id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endsection
    