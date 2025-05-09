@extends('public.layouts.master')

@section('content')
<section class="bg-img1 txt-center p-lr-15 p-tb-92">
    <h2 class="ltext-105 cl2 txt-center">
        Detail Pesanan
    </h2>
</section>

<div class="container">
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
        <a href="{{ route('home') }}" class="stext-109 cl8 hov-cl1 trans-04">
            Home
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>
        <a href="{{ route('orders.index') }}" class="stext-109 cl8 hov-cl1 trans-04">
            Daftar Pesanan
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>
        <span class="stext-109 cl4">
            Pesanan #{{ $order->id }}
        </span>
    </div>
</div>

<div class="bg0 p-t-75 p-b-85">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-lr-auto m-b-50">
                <div class="m-l-25 m-r--38 m-lr-0-xl">
                    <div class="bor10 p-lr-40 p-t-30 p-b-40 m-lr-0-xl p-lr-15-sm">
                        <h4 class="mtext-109 cl2 p-b-30">
                            Detail Pesanan #{{ $order->id }}
                        </h4>
                        
                        <div class="flex-w flex-t p-b-13">
                            <div class="size-208">
                                <span class="stext-110 cl2">
                                    Tanggal Pesanan:
                                </span>
                            </div>
                            <div class="size-209">
                                <span class="mtext-110 cl2">
                                    {{ $order->created_at->format('d M Y H:i') }}
                                </span>
                            </div>
                        </div>
                        
                        <div class="flex-w flex-t p-b-13">
                            <div class="size-208">
                                <span class="stext-110 cl2">
                                    Status:
                                </span>
                            </div>
                            <div class="size-209">
                                <span class="mtext-110 cl2">
                                    <span class="badge bg-success">{{ $order->status }}</span>
                                </span>
                            </div>
                        </div>
                        
                        <div class="flex-w flex-t p-b-13">
                            <div class="size-208">
                                <span class="stext-110 cl2">
                                    Total:
                                </span>
                            </div>
                            <div class="size-209">
                                <span class="mtext-110 cl2">
                                    Rp{{ number_format($order->total, 0, ',', '.') }}
                                </span>
                            </div>
                        </div>
                        
                        <div class="p-t-15">
                            <h5 class="mtext-108 cl2 p-b-10">
                                Item Pesanan
                            </h5>
                            
                            <div class="wrap-table-shopping-cart">
                                <table class="table-shopping-cart">
                                    <tr class="table_head">
                                        <th class="column-1">Layanan</th>
                                        <th class="column-2">Harga</th>
                                        <th class="column-3">Jumlah</th>
                                        <th class="column-4">Total</th>
                                    </tr>
                                    
                                    @foreach($order->orderItems as $item)
                                    <tr class="table_row">
                                        <td class="column-1">{{ $item->jasa->nama }}</td>
                                        <td class="column-2">Rp{{ number_format($item->price, 0, ',', '.') }}</td>
                                        <td class="column-3">{{ $item->quantity }}</td>
                                        <td class="column-4">Rp{{ number_format($item->price * $item->quantity, 0, ',', '.') }}</td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                            
                            <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                                <a href="{{ route('orders.index') }}" class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
                                    Kembali ke Daftar Pesanan
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection