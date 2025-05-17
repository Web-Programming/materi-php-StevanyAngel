@extends('layouts.master')

@section('title', 'Hapus Materi')

@section('content')
<h1>Hapus Materi</h1>
<p>Apakah Anda yakin ingin menghapus materi ini?</p>
<form action="{{ route('materi.destroy', $materi->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Hapus</button>
</form>
@endsection