@extends('layouts.master')

@section('title', 'Dosen Index')

@section('content')
<h1>Dosen Index</h1>
<a href="{{ route('dosen.create') }}">Tambah Dosen</a>
<!-- Tampilkan daftar dosen di sini -->
@endsection