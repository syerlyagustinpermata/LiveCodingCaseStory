@extends('layouts.app')

@section('title', 'Edit Kategori')

@section('content')
<div class="card">
    <h2>Edit Kategori</h2>

    <form action="{{ route('categories.update', $category) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Nama Kategori</label>
        <input
            id="name"
            type="text"
            name="name"
            value="{{ old('name', $category->name) }}"
            maxlength="255"
            required
        >

        <button type="submit">Simpan Perubahan</button>
        <a class="btn" href="{{ route('categories.index') }}">Kembali</a>
    </form>
</div>
@endsection