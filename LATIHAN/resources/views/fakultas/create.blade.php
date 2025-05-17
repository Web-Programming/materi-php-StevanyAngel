@extends('layouts.master')

@section('title', 'Tambah Fakultas')

@section('content')
<h1>Tambah Fakultas</h1>
<form action="{{ route('fakultas.store') }}" method="POST">
    @csrf
    <label for="name">Nama Fakultas:</label>
    <input type="text" name="name" id="name" required>
    <button type="submit">Simpan</button>
</form>
@endsection