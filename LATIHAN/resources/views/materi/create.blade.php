@extends('layouts.master')

@section('title', 'Tambah Materi')

@section('content')
<h1>Tambah Materi</h1>
<form action="{{ route('materi.store') }}" method="POST">
    @csrf
    <label for="name">Nama Materi:</label>
    <input type="text" name="name" id="name" required>
    <button type="submit">Simpan</button>
</form>
@endsection