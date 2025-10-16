@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="min-height:70vh;">
  <div class="card shadow-lg p-4" style="width: 400px; border-radius: 15px;">
    <h2 class="text-center" style="color: #1B3C53;">Edit Data Pengguna</h2>

    {{-- Form Update --}}
    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        {{-- Input Nama --}}
        <label for="nama" class="form-label mt-2">Nama:</label>
        <input 
            type="text" 
            id="nama" 
            name="nama" 
            class="form-control" 
            value="{{ old('nama', $user->nama) }}" 
            required>

        {{-- Input NIM --}}
        <label for="nim" class="form-label mt-2">NIM:</label>
        <input 
            type="text" 
            id="nim" 
            name="nim" 
            class="form-control" 
            value="{{ old('nim', $user->nim) }}" 
            required>

        {{-- Pilihan Kelas --}}
        <label for="kelas_id" class="form-label mt-2">Kelas:</label>
        <select name="kelas_id" id="kelas_id" class="form-select" required>
            @foreach ($kelas as $kelasItem)
                <option 
                    value="{{ $kelasItem->id }}" 
                    {{ $kelasItem->id == $user->kelas_id ? 'selected' : '' }}>
                    {{ $kelasItem->nama_kelas }}
                </option>
            @endforeach
        </select>

        {{-- Tombol Simpan --}}
        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary" 
                style="background-color:#1B3C53; border-color:#EFE4D2;">
                <i class="bi bi-save"></i> Update
            </button>

            <a href="{{ route('user.index') }}" class="btn btn-secondary ms-2" 
                style="background-color:#B8B8B8; border-color:#EFE4D2;">
                <i class="bi bi-arrow-left-circle"></i> Batal
            </a>
        </div>
    </form>
  </div>
</div>
@endsection