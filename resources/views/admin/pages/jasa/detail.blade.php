@extends('admin.layouts.admin_master')
@section('content')
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Detail Layanan</p>
                        <h1>{{ $jasa->nama }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-article-section">
                        <div class="single-article-text">
                            <img src="{{ asset('storage/' . $jasa->gambar) }}" alt="{{ $jasa->nama }}" class="img-fluid">
                            <p class="blog-meta">
                                <span class="author"><i class="fas fa-user"></i> Admin</span>
                                <span class="date"><i class="fas fa-calendar"></i>
                                    {{ $jasa->created_at->format('d F, Y') }}</span>
                            </p>
                            <h2>{{ $jasa->nama }}</h2>
                            <h4 class="text-primary">Harga: Rp{{ number_format($jasa->harga, 0, ',', '.') }}</h4>
                            <p>{!! htmlspecialchars_decode($jasa->deskripsi) !!}</p>

                            <a href="{{ route('jasa.edit', $jasa->id) }}" class="btn btn-warning">Edit</a>

                            <form action="{{ route('jasa.destroy', $jasa->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus jasa ini?')">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end single article section -->
@endsection
