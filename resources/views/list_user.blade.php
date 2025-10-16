@extends('layouts.app')

@section('content')
<h2 class="text-center" style="color: #002461ff;">Daftar Pengguna</h2>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered text-center" style="background-color:#F4E9D7;">
    <thead style="background-color:#E6D3B3; color:#5C4033;">
                <tr class="text-center">
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                <tr>
    <td class="text-center">{{ $user->id }}</td>
    <td>{{ $user->nama }}</td>
    <td>{{ $user->nim }}</td>
    <td class="text-center">{{ $user->kelas->nama_kelas ?? '-' }}</td>
    <td class="text-center">
        <div class="d-flex justify-content-center gap-2">
            {{-- Tombol Edit --}}
            <a href="{{ route('user.edit', $user->id) }}" 
               class="btn btn-sm text-white" 
               style="background-color: #30d83cff; border-color: #ECEEDF;">
               <i class="bi bi-pencil-square"></i> Edit
            </a>

            {{-- Tombol Hapus --}}
            <form action="{{ route('user.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus user ini?')" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" 
                     class="btn btn-sm text-white" 
                     style="background-color: #f50000ff; border-color: #ECEEDF;"
                     onclick="return confirm('Yakin ingin menghapus user ini?')">
                     <i class="bi bi-trash"></i> Hapus
                </button>
            </form>
        </div>
    </td>
</tr>
                @empty
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection