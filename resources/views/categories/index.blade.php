@extends('layouts.app')

@section('title', 'Data Kategori')

@section('content')
<div class="card">
    <h2>Data Kategori</h2>
    <p>Kelola kategori barang inventaris.</p>

    <a class="btn" href="{{ route('categories.create') }}">
        + Tambah Kategori
    </a>
</div>

<div class="card">
    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Kategori</th>
                    <th>Jumlah Barang</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($categories as $category)
                    <tr>
                        <td>{{ $categories->firstItem() + $loop->index }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->items_count }}</td>
                        <td>
                            <a class="btn"
                               href="{{ route('categories.edit', $category) }}">
                                Edit
                            </a>

                            <form class="inline"
                                  action="{{ route('categories.destroy', $category) }}"
                                  method="POST"
                                  onsubmit="return confirm('Yakin ingin menghapus kategori ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="danger" type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">Belum ada kategori.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div style="margin-top:16px">
        {{ $categories->links() }}
    </div>
</div>
@endsection