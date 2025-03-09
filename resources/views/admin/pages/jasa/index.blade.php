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
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $jasa = [
                            ['nama' => 'Usability Analyze', 'harga' => 250000, 'deskripsi' => 'Analisis usability untuk meningkatkan pengalaman pengguna.'],
                            ['nama' => 'Sentiment Analyze', 'harga' => 300000, 'deskripsi' => 'Analisis sentimen untuk memahami opini pengguna.'],
                            ['nama' => 'Code Refactory', 'harga' => 400000, 'deskripsi' => 'Refaktor kode untuk meningkatkan kualitas dan performa.'],
                            ['nama' => 'Cloud Recommendation', 'harga' => 500000, 'deskripsi' => 'Rekomendasi solusi cloud sesuai kebutuhan bisnis.'],
                        ];
                    @endphp

                    @foreach ($jasa as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $item['nama'] }}</td>
                            <td>Rp{{ number_format($item['harga'], 0, ',', '.') }}</td>
                            <td>{{ $item['deskripsi'] }}</td>
                            <td>
                            <a href="{{ route('jasa.detail', ['nama' => Str::slug($item['nama'], '-')]) }}" class="btn btn-info btn-sm">Detail</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
