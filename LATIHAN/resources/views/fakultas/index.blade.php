@extends('layouts.master')

@section('title', 'Fakultas Index')

@section('content')
<h1>Fakultas Index</h1>
<a href="{{ route('fakultas.create') }}">Tambah Fakultas</a>
<!-- Tampilkan daftar fakultas di sini -->
@endsection