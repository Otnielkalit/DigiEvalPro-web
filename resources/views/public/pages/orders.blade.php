@extends('public.layouts.master')

@section('content')
<section class="bg-img1 txt-center p-lr-15 p-tb-92">
    <h2 class="ltext-105 cl2 txt-center">
        Daftar Pesanan
    </h2>
</section>

<div class="container">
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
        <a href="{{ route('home') }}" class="stext-109 cl8 hov-cl1 trans-04">
            Home
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>
        <span class="stext-109 cl4">
            Daftar Pesanan
        </span>
    </div>
</div>

<div class="bg0 p-t-75 p-b-85">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-lr-auto m-b-50">
                <div class="m-l-25 m-r--38 m-lr-0-xl">
                    @if(session('success'))
                        <div class="alert alert-success mb-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="wrap-table-shopping-cart">
                        <table class="table-shopping-cart">
                            <tr class="table_head">
                                <th class="column-1">No. Pesanan</th>
                                <th class="column-2">Tanggal</th>
                                <th class="column-3">Total</th>
                                <th class="column-4">Status</th>
                                <th class="column-5">Aksi</th>
                            </tr>

                            @forelse($orders as $order)
                            <tr class="table_row">
                                <td class="column-1">#{{ $order->id }}</td>
                                <td class="column-2">{{ $order->created_at->format('d M Y') }}</td>
                                <td class="column-3">Rp{{ number_format($order->total, 0, ',', '.') }}</td>
                                <td class="column-4">
                                    <span class="badge bg-success">{{ $order->status }}</span>
                                </td>
                                <td class="column-5">
                                    <a href="{{ route('orders.show', $order->id) }}" class="btn btn-sm btn-primary">
                                        Detail
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center p-4">
                                    <p>Anda belum memiliki pesanan</p>
                                    <a href="{{ route('service') }}" class="flex-c-m stext-101 cl0 size-107 bg1 bor2 hov-btn1 p-lr-15 trans-04 m-b-10 m-t-10 m-auto" style="max-width: 200px;">
                                        Lihat Layanan
                                    </a>
                                </td>
                            </tr>
                            @endforelse
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection