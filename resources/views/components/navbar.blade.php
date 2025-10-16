<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/user') }}">Sistem Pendataan Mahasiswa</a>
        <div>
            <a href="{{ url('/user') }}" class="btn btn-sm">Data Mahasiswa</a>
            <a href="{{ url('/user/create') }}" class="btn btn-sm">Input Baru Mahasiswa</a>
            <a href="{{ url('/matakuliah') }}" class="btn btn-sm">Daftar Mata Kuliah</a>
            <a href="{{ url('/matakuliah/create') }}" class="btn btn-sm">Tambah Mata Kuliah</a>
        </div>
    </div>
</nav>
