@extends('layouts.master')

@section('title', 'Hapus Materi')

@section('content')
<h1>Hapus Prodi</h1>
<p>Apakah Anda yakin ingin menghapus prodi ini?</p>
<form action="{{ route('prodi.destroy', $prodi->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Hapus</button>
</form>
@endsection