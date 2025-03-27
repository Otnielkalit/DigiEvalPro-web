@extends('admin.layouts.admin_master')

@section('content')
    <div class="card">
        <h5 class="card-header">Daftar Jasa</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Jasa</th>
                        <th>Harga</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jasa as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>Rp{{ number_format($item->harga, 0, ',', '.') }}</td>
                            <td>{!! Str::limit($item->deskripsi, 50) !!}</td>
                            <td>
                                <a href="{{ route('jasa.show', $item->id) }}" class="btn btn-primary btn-sm">
                                    <i class='bx bx-show'></i> Detail
                                </a>
                                <a href="{{ route('jasa.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                    <i class='bx bx-edit'></i> Edit
                                </a>
                                <form action="{{ route('jasa.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus jasa ini?')">
                                        <i class='bx bx-trash'></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
