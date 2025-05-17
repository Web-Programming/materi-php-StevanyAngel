@extends('layouts.master')

@section('title', 'Mahasiswa Index')

@section('content')
<h1>Mahasiswa Index</h1>
<a href="{{ route('mhs.create') }}">Tambah Mahasiswa</a>
<!-- Tampilkan daftar mahasiswa di sini -->
@endsection