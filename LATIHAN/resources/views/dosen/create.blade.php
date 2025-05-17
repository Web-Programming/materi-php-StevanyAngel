@extends('layouts.master')

@section('title', 'Tambah Dosen')

@section('content')
<h1>Tambah Dosen</h1>
<form action="{{ route('dosen.store') }}" method="POST">
    @csrf
    <label for="name">Nama Dosen:</label