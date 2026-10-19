@extends('layouts.app')

@section('title', 'Tambah Kategori')

@section('content')
<div class="card">
    <h2>Tambah Kategori</h2>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf

        <label for="name">Nama Kategori</label>
        <input
            id="name"
            type="text"
            name="name"
            value="{{ old('name') }}"
            maxlength="255"
            required
        >

        <button type="submit">Simpan</button>
        <a class="btn" href="{{ route('categories.index') }}">Kembali</a>
    </form>
</div>
@endsection