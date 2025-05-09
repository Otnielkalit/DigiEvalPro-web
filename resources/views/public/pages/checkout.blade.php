@extends('public.layouts.master')

@section('content')
<section class="bg-img1 txt-center p-lr-15 p-tb-92">
    <h2 class="ltext-105 cl2 txt-center">
        Checkout
    </h2>
</section>

<div class="container">
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
        <a href="{{ route('home') }}" class="stext-109 cl8 hov-cl1 trans-04">
            Home
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>
        <a href="{{ route('cart.index') }}" class="stext-109 cl8 hov-cl1 trans-04">
            Keranjang
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>
        <span class="stext-109 cl4">
            Checkout
        </span>
    </div>
</div>

<div class="bg0 p-t-75 p-b-85">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-10 col-lg-8 col-xl-6 m-lr-auto m-b-50">
                <div class="bor10 p-lr-40 p-t-30 p-b-40 m-lr-0-xl p-lr-15-sm">
                    <h4 class="mtext-109 cl2 p-b-30">
                        Ringkasan Pesanan
                    </h4>

                    @foreach($cartItems as $item)
                    <div class="flex-w flex-t p-b-13">
                        <div class="size-208">
                            <span class="stext-110 cl2">
                                {{ $item->jasa->nama }} x {{ $item->quantity }}:
                            </span>
                        </div>
                        <div class="size-209">
                            <span class="mtext-110 cl2">
                                Rp{{ number_format($item->price * $item->quantity, 0, ',', '.') }}
                            </span>
                        </div>
                    </div>
                    @endforeach

                    <div class="flex-w flex-t p-t-27 p-b-33">
                        <div class="size-208">
                            <span class="mtext-101 cl2">
                                Total:
                            </span>
                        </div>
                        <div class="size-209 p-t-1">
                            <span class="mtext-110 cl2">
                                Rp{{ number_format($total, 0, ',', '.') }}
                            </span>
                        </div>
                    </div>
                    
                    <form action="{{ route('checkout.process') }}" method="POST">
                        @csrf
                        <button type="submit" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                            Proses Pesanan
                        </button>
                    </form>
                    
                    <div class="flex-w flex-m m-t-20">
                        <a href="{{ route('cart.index') }}" class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
                            Kembali ke Keranjang
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection