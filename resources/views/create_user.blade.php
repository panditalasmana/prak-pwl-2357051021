@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="min-height:70vh;">
  <div class="card shadow-lg p-4" style="width: 400px; border-radius: 15px;">
    <h2 class="text-center" style="color: #1B3C53;">Buat Pengguna Baru</h2>

<form action="{{ route('user.store') }}" method="POST">
             @csrf

            <label for="nama" class="form-label">Nama:</label>
            <input type="text" id="nama" name="nama" class="form-control">

            <label for="nim" class="form-label">NIM:</label>
            <input type="text" id="nim" name="nim" class="form-control">
      
            <label for="kelas_id" class="form-label">Kelas:</label>
            <select name="kelas_id" id="kelas_id" class="form-select">
                @foreach ($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                @endforeach
            </select><br><br>
            
            <div class="text-center">
            <button type="submit" class="btn btn-success" style="background-color:#1B3C53; border-color:#EFE4D2;">
                <i class="bi bi-save"></i> Submit
            </button> 
            </div>  
        </form>
    </div>
</div>
@endsection
 