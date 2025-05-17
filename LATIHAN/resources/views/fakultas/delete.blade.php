@extends('layouts.master')

@section('title', 'Hapus Fakultas')

@section('content')
<h1>Hapus Fakultas</h1>
<p>Apakah Anda yakin ingin menghapus fakultas ini?</p>
<form action="{{ route('fakultas.destroy', $fakultas->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Hapus</button>
</form>
@endsection