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
    <div class="container mb-5">
        <h3 class="mb-4">Tambah Detail Harga</h3>
        <form action="{{ route('jasa-prices.store') }}" method="POST">
            @csrf
            <input type="hidden" name="jasa_id" value="{{ $jasa->id }}">
            <div class="d-flex flex-wrap align-items-center gap-4">
                <div class="form-group">
                    <label for="durasi_hari" class="form-label">Durasi (Hari)</label>
                    <input type="number" name="durasi_hari" id="durasi_hari" class="form-control" min="1"
                        placeholder="Contoh: 2" required>
                </div>
                <div class="form-group">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" name="harga" id="harga" class="form-control" placeholder="Contoh: 150000"
                        required>
                </div>
                <div class="form-group">
                    <label for="skala_project" class="form-label">Skala Project</label>
                    <select name="skala_project" id="skala_project" class="form-control" required>
                        <option value="">-- Pilih Skala --</option>
                        <option value="kecil">Kecil</option>
                        <option value="sedang">Sedang</option>
                        <option value="besar">Besar</option>
                    </select>
                </div>
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>

    @if ($hargaDetails->count())
        <div class="container mb-5">
            <h4 class="mb-3">Daftar Detail Harga</h4>
            @foreach ($hargaDetails as $detail)
                <div class="d-flex flex-wrap align-items-center gap-4 mb-3 border-bottom pb-2">
                    <div class="form-group mb-0">
                        <label class="form-label">Durasi (Hari)</label>
                        <input type="text" class="form-control" value="{{ $detail->durasi_hari }} hari" readonly>
                    </div>
                    <div class="form-group mb-0">
                        <label class="form-label">Harga</label>
                        <input type="text" class="form-control"
                            value="Rp{{ number_format($detail->harga, 0, ',', '.') }}" readonly>
                    </div>
                    <div class="form-group mb-0">
                        <label class="form-label">Skala Project</label>
                        <input type="text" class="form-control text-capitalize" value="{{ $detail->skala_project }}"
                            readonly>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="container mb-5">
            <p class="text-muted">Belum ada detail harga.</p>
        </div>
    @endif


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
