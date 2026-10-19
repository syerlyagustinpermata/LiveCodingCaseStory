@extends('layouts.app')

@section('title', 'Data Barang')

@section('content')
<div class="card">
    <h2>Inventaris Barang</h2>
    <p>Daftar barang perlengkapan komputer.</p>

    <a class="btn" href="{{ route('items.create') }}">
        + Tambah Barang
    </a>
</div>

<div class="card">
    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($items as $item)
                    <tr>
                        <td>{{ $items->firstItem() + $loop->index }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->category->name }}</td>
                        <td>
                            Rp {{ number_format((float) $item->price, 0, ',', '.') }}
                        </td>
                        <td>{{ $item->stock }}</td>
                        <td>
                            <a class="btn"
                               href="{{ route('items.edit', $item) }}">
                                Edit
                            </a>

                            <form class="inline"
                                  action="{{ route('items.destroy', $item) }}"
                                  method="POST"
                                  onsubmit="return confirm('Yakin ingin menghapus barang ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="danger" type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">Belum ada barang.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div style="margin-top:16px">
        {{ $items->links() }}
    </div>
</div>
@endsection