@extends('layouts.app')

@section('content')
<h2 class="text-center" style="color: #1B3C53;">Daftar Pengguna</h2>

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
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td class="text-center">{{ $user->id }}</td>
                        <td>{{ $user->nama }}</td>
                        <td>{{ $user->nim }}</td>
                        <td class="text-center">{{ $user->kelas->nama_kelas ?? '-' }}</td>
                    </tr>
                @empty
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection