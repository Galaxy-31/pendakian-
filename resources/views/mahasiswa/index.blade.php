<h2>Data Mahasiswa</h2>

<a href="{{ route('mahasiswa.create') }}">Tambah Mahasiswa</a>

<table border="1">
    <tr>
        <th>Nama</th>
        <th>NIM</th>
        <th>Jurusan</th>
        <th>Aksi</th>
    </tr>

    @foreach($data as $m)
    <tr>
        <td>{{ $m->nama }}</td>
        <td>{{ $m->nim }}</td>
        <td>{{ $m->jurusan }}</td>
        <td>
            <a href="{{ route('mahasiswa.edit', $m->id) }}">Edit</a>

            <form action="{{ route('mahasiswa.destroy', $m->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
