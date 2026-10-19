@extends('layouts.app')

@section('title', 'Tambah Barang')

@section('content')
<div class="card">
    <h2>Tambah Barang</h2>

    @if ($categories->isEmpty())
        <p>Belum ada kategori. Buat kategori terlebih dahulu.</p>
        <a class="btn" href="{{ route('categories.create') }}">
            Tambah Kategori
        </a>
    @else
        <form action="{{ route('items.store') }}" method="POST">
            @csrf

            <label for="name">Nama Barang</label>
            <input
                id="name"
                type="text"
                name="name"
                value="{{ old('name') }}"
                maxlength="255"
                required
            >

            <label for="category_id">Kategori</label>
            <select id="category_id" name="category_id" required>
                <option value="">-- Pilih Kategori --</option>

                @foreach ($categories as $category)
                    <option
                        value="{{ $category->id }}"
                        @selected(old('category_id') == $category->id)
                    >
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>

            <label for="price">Harga (Rp)</label>
            <input
                id="price"
                type="number"
                name="price"
                value="{{ old('price') }}"
                min="0.01"
                step="0.01"
                required
            >

            <label for="stock">Stok</label>
            <input
                id="stock"
                type="number"
                name="stock"
                value="{{ old('stock', 0) }}"
                min="0"
                step="1"
                required
            >

            <button type="submit">Simpan Barang</button>
            <a class="btn" href="{{ route('items.index') }}">Kembali</a>
        </form>
    @endif
</div>
@endsection