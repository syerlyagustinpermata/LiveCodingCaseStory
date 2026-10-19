@extends('layouts.app')

@section('title', 'Edit Barang')

@section('content')
<div class="card">
    <h2>Edit Barang</h2>

    <form action="{{ route('items.update', $item) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Nama Barang</label>
        <input
            id="name"
            type="text"
            name="name"
            value="{{ old('name', $item->name) }}"
            maxlength="255"
            required
        >

        <label for="category_id">Kategori</label>
        <select id="category_id" name="category_id" required>
            <option value="">-- Pilih Kategori --</option>

            @foreach ($categories as $category)
                <option
                    value="{{ $category->id }}"
                    @selected(old('category_id', $item->category_id) == $category->id)
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
            value="{{ old('price', $item->price) }}"
            min="0.01"
            step="0.01"
            required
        >

        <label for="stock">Stok</label>
        <input
            id="stock"
            type="number"
            name="stock"
            value="{{ old('stock', $item->stock) }}"
            min="0"
            step="1"
            required
        >

        <button type="submit">Simpan Perubahan</button>
        <a class="btn" href="{{ route('items.index') }}">Kembali</a>
    </form>
</div>
@endsection