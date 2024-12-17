@extends('layouts.app')

@section('content')
    <h1>Edit Pelanggan</h1>

    <!-- Tampilkan pesan error jika ada -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pelanggan.update', $pelanggan->pel_id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="pel_id_gol">Golongan</label>
            <select name="pel_id_gol" id="pel_id_gol" class="form-control" required>
                @foreach($golongans as $golongan)
                    <option value="{{ $golongan->gol_id }}" {{ $pelanggan->pel_id_gol == $golongan->gol_id ? 'selected' : '' }}>
                        {{ $golongan->gol_nama }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="pel_id_user">User</label>
            <select name="pel_id_user" id="pel_id_user" class="form-control" required>
                @foreach($users as $user)
                    <option value="{{ $user->user_id }}" {{ $pelanggan->pel_id_user == $user->user_id ? 'selected' : '' }}>
                        {{ $user->user_name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="pel_no">No Pelanggan</label>
            <input type="text" class="form-control" id="pel_no" name="pel_no" value="{{ old('pel_no', $pelanggan->pel_no) }}" required>
        </div>

        <div class="form-group">
            <label for="pel_nama">Nama</label>
            <input type="text" class="form-control" id="pel_nama" name="pel_nama" value="{{ old('pel_nama', $pelanggan->pel_nama) }}" required>
        </div>

        <div class="form-group">
            <label for="pel_alamat">Alamat</label>
            <textarea class="form-control" id="pel_alamat" name="pel_alamat" required>{{ old('pel_alamat', $pelanggan->pel_alamat) }}</textarea>
        </div>

        <div class="form-group">
            <label for="pel_hp">No HP</label>
            <input type="text" class="form-control" id="pel_hp" name="pel_hp" value="{{ old('pel_hp', $pelanggan->pel_hp) }}">
        </div>

        <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
@endsection
