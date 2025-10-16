@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Mata Kuliah</h1>
    <a href ="{{  route('matakuliah.create') }}">Tambah Mata Kuliah Baru</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
    @foreach ($mks as $mk)
    <tr>
        <td>{{ $mk->id }}</td>
        <td>{{ $mk->nama_mk }}</td>
        <td>{{ $mk->sks }}</td>
        <td>
            <a href="{{ route('matakuliah.edit', $mk->id) }}" 
   class="btn btn-sm text-white" 
    style="background-color: #00ff15ff; border-color: #000000ff;">
   <i class="bi bi-pencil-square"></i> Edit
</a>

<form action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" 
            class="btn btn-sm text-white" 
            style="background-color: #ff0000ff; border-color: #000000ff;"
            onclick="return confirm('Yakin ingin menghapus data ini?')">
        <i class="bi bi-trash"></i> Hapus
    </button>
            </form>
        </td>
    </tr>
    @endforeach
</tbody>
    </table>
</div>

@endsection