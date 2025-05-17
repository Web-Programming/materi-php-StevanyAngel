@extends('layouts.master')

@section('title', 'Hapus Mahasiswa')

@section('content')
<h1>Hapus Mahasiswa</h1>
<p>Apakah Anda yakin ingin menghapus mahasiswa ini?</p>
<form action="{{ route('mhs.destroy', $mahasiswa->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Hapus</button>
</form>
@endsection