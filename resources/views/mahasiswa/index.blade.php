@extends('layouts.mazer')

@php
$title = "Data Mahasiswa";
@endphp

@section('content')
<h2>Table Data Mahasiswa</h2>
<div class="m-3">
    <a href="{{ route('mahasiswa.create') }}" class="btn btn-lg btn-primary fw-semibold shadow-sm px-3 py-2 hover-float">Tambah Mahasiswa</a>
</div>

<div class="card m-3">
    <table class="table table-striped" id="table-mahasiswa" class="display" style="width:100%">
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
    </table>
</div>

<script>
    $(function() {
        $('#table-mahasiswa').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('mahasiswa.data') }}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'nama',
                    name: 'nama'
                },
                {
                    data: 'nim',
                    name: 'nim'
                },
                {
                    data: 'jurusan',
                    name: 'jurusan'
                },
                {
                    data: 'aksi',
                    name: 'aksi',
                    orderable: false,
                    searchable: false
                }
            ]
        });
    });
</script>
@endsection