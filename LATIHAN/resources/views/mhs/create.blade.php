@extends('layouts.master')

@section('title', 'Tambah Mahasiswa')

@section('content')
<h1>Tambah Mahasiswa</h1>
<form action="{{ route('mhs.store') }}" method="POST">
    @csrf
    <label for="name">Nama Mahasiswa:</label>
    <input type="text" name="name" id="name" required>
    <label for="npm">NPM:</label>
    <input type="text" name="npm" id="npm" required>
    <button type="submit">Simpan</button>
</form>
@endsection