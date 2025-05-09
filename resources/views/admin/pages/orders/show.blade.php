@extends('admin.layouts.admin_master')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="card-title">Detail Pesanan #{{ $order->id }}</h5>
        <a href="{{ route('admin.orders.index') }}" class="btn btn-sm btn-secondary">
            <i class="bx bx-arrow-back"></i> Kembali
        </a>
    </div>
    <div class="card-body">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title">Informasi Pesanan</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">ID Pesanan</label>
                            <p class="form-control-static">{{ $order->id }}</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal</label>
                            <p class="form-control-static">{{ $order->created_at->format('d M Y H:i') }}</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <p class="form-control-static">
                                @if($order->status == 'Pending')
                                    <span class="badge bg-warning">Pending</span>
                                @elseif($order->status == 'Processing')
                                    <span class="badge bg-info">Processing</span>
                                @elseif($order->status == 'Completed')
                                    <span class="badge bg-success">Completed</span>
                                @elseif($order->status == 'Cancelled')
                                    <span class="badge bg-danger">Cancelled</span>
                                @endif
                            </p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Total</label>
                            <p class="form-control-static">Rp{{ number_format($order->total, 0, ',', '.') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title">Informasi Pelanggan</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <p class="form-control-static">{{ $order->user->name }}</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <p class="form-control-static">{{ $order->user->email }}</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">No. HP</label>
                            <p class="form-control-static">{{ $order->user->nohp ?? '-' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="card-title">Item Pesanan</h5>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Layanan</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach($order->orderItems as $item)
                        <tr>
                            <td>{{ $item->jasa->nama }}</td>
                            <td>Rp{{ number_format($item->price, 0, ',', '.') }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>Rp{{ number_format($item->price * $item->quantity, 0, ',', '.') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="3" class="text-end">Total</th>
                            <th>Rp{{ number_format($order->total, 0, ',', '.') }}</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        
        <!-- Analisis Pesanan Section -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Analisis Pesanan</h5>
            </div>
            <div class="card-body">
                @if($order->status == 'Completed')
                    <div class="alert alert-info">
                        <i class="bx bx-info-circle me-1"></i>
                        Pesanan telah diselesaikan. Analisis tidak dapat diubah.
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Hasil Analisis</label>
                        <div class="p-3 border rounded bg-light">
                            {!! $order->analysis ?? '<em>Tidak ada analisis</em>' !!}
                        </div>
                    </div>
                    @if($order->attachment_path)
                    <div class="mb-3">
                        <label class="form-label">Lampiran</label>
                        <div class="mt-2">
                            <a href="{{ asset($order->attachment_path) }}" target="_blank" class="btn btn-sm btn-info">
                                <i class="bx bx-download"></i> Unduh Lampiran
                            </a>
                        </div>
                    </div>
                    @endif
                @else
                    <form action="{{ route('admin.orders.update-analysis', $order) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="analysis" class="form-label">Hasil Analisis</label>
                            <textarea class="form-control" id="analysis" name="analysis" rows="6">{{ $order->analysis ?? '' }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="attachment" class="form-label">Lampiran (Opsional)</label>
                            <input class="form-control" type="file" id="attachment" name="attachment">
                            @if($order->attachment_path)
                            <div class="mt-2">
                                <a href="{{ asset($order->attachment_path) }}" target="_blank" class="btn btn-sm btn-info">
                                    <i class="bx bx-download"></i> Unduh Lampiran
                                </a>
                            </div>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan Analisis</button>
                    </form>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        ClassicEditor
            .create(document.querySelector('#analysis'), {
                toolbar: [
                    'bold', 'italic', 'link', 'bulletedList', 'numberedList',
                    'blockQuote', 'insertTable', 'undo', 'redo'
                ]
            })
            .catch(error => {
                console.error(error);
            });
    });
</script>
<style>
    .ck-editor__editable {
        min-height: 200px !important;
        max-height: 400px;
    }
</style>
@endpush