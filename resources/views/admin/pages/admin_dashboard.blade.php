@extends('admin.layouts.admin_master')

@section('content')
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h2 class="card-title text-primary">Selamat Datang Admin Kami 🎉</h2>
                            <h4 class="mb-4">
                                Jangan lupa selalu semangat
                                <span class="fw-bold">100%</span>
                                Semangat Untuk analisisnya
                            </h4>
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="asset-admin/assets/img/illustrations/man-with-laptop-light.png" height="140"
                                alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                data-app-light-img="illustrations/man-with-laptop-light.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Dashboard Cards -->
    <div class="row">
        <!-- Orders Card -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h5 class="card-title mb-0">Pesanan</h5>
                            <small class="text-muted">Kelola pesanan pelanggan</small>
                        </div>
                        <div class="card-icon">
                            <span class="badge bg-label-primary rounded p-2">
                                <i class="bx bx-cart-alt bx-md"></i>
                            </span>
                        </div>
                    </div>
                    <h3 class="card-title mb-2 mt-4">{{ \App\Models\Order::count() }}</h3>
                    <small class="text-success fw-semibold">
                        <i class="bx bx-up-arrow-alt"></i> Pesanan Total
                    </small>
                    <div class="mt-3">
                        <a href="{{ route('admin.orders.index') }}" class="btn btn-sm btn-primary">Lihat Semua Pesanan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
