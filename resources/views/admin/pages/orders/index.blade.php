@extends('admin.layouts.admin_master')

@section('content')
<div class="card">
    <div class="card-header">
        <h5 class="card-title">Daftar Pesanan</h5>
    </div>

    @if(session('success'))
    <div class="alert alert-success alert-dismissible m-3">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="table-responsive text-nowrap">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Pelanggan</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->user->name }}</td>
                    <td>Rp{{ number_format($order->total, 0, ',', '.') }}</td>
                    <td>
                        @if($order->status == 'Pending')
                        <span class="badge bg-warning">Pending</span>
                        @elseif($order->status == 'Processing')
                        <span class="badge bg-info">Processing</span>
                        @elseif($order->status == 'Completed')
                        <span class="badge bg-success">Completed</span>
                        @elseif($order->status == 'Cancelled')
                        <span class="badge bg-danger">Cancelled</span>
                        @endif
                    </td>
                    <td>{{ $order->created_at->format('d M Y H:i') }}</td>
                    <!-- Add this modal at the end of the content section -->
                    <div class="modal fade" id="completeOrderModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Konfirmasi Tutup Pesanan</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Apakah Anda yakin ingin menutup pesanan ini? <br> Setelah ditutup, analisis tidak dapat diubah lagi.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <button type="button" class="btn btn-danger" id="confirmComplete">Ya, Tutup Pesanan</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Update the action buttons section -->
                    <td>
                        <a href="{{ route('admin.orders.show', $order) }}" class="btn btn-primary btn-sm">
                            <i class="bx bx-show me-1"></i> Detail
                        </a>
                        @if($order->status != 'Completed' && $order->status != 'Cancelled')
                        <a href="javascript:void(0);" class="btn btn-danger btn-sm"
                            onclick="showCompleteModal({{ $order->id }})">
                            <i class="bx bx-check-circle me-1"></i> Tutup
                        </a>
                        <form id="complete-form-{{ $order->id }}"
                            action="{{ route('admin.orders.complete', $order) }}"
                            method="POST" style="display: none;">
                            @csrf
                            @method('PUT')
                        </form>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{ $orders->links() }}
    </div>
</div>
@endsection

@push('scripts')
<script>
    let currentOrderId = null;

    function showCompleteModal(orderId) {
        currentOrderId = orderId;
        const modal = new bootstrap.Modal(document.getElementById('completeOrderModal'));
        modal.show();
    }

    document.getElementById('confirmComplete').addEventListener('click', function() {
        if (currentOrderId) {
            document.getElementById('complete-form-' + currentOrderId).submit();
        }
    });
</script>
@endpush