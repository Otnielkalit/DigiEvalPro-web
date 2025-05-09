@extends('public.layouts.master')

@section('content')
<section class="bg-img1 txt-center p-lr-15 p-tb-92">
    <h2 class="ltext-105 cl2 txt-center">
        Keranjang Belanja
    </h2>
</section>

<div class="container">
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
        <a href="{{ route('home') }}" class="stext-109 cl8 hov-cl1 trans-04">
            Home
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>
        <span class="stext-109 cl4">
            Keranjang Belanja
        </span>
    </div>
</div>

<form class="bg0 p-t-75 p-b-85">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
                <div class="m-l-25 m-r--38 m-lr-0-xl">
                    <div class="wrap-table-shopping-cart">
                        <table class="table-shopping-cart">
                            <tr class="table_head">
                                <th class="column-1">Layanan</th>
                                <th class="column-2"></th>
                                <th class="column-3">Harga</th>
                                <th class="column-4">Jumlah</th>
                                <th class="column-5">Total</th>
                                <th class="column-6">Aksi</th>
                            </tr>

                            @forelse($cartItems as $item)
                            <tr class="table_row">
                                <td class="column-1">
                                    <div class="how-itemcart1">
                                        <img src="{{ asset('storage/' . $item->jasa->gambar) }}" alt="{{ $item->jasa->nama }}">
                                    </div>
                                </td>
                                <td class="column-2">{{ $item->jasa->nama }}</td>
                                <td class="column-3">Rp{{ number_format($item->price, 0, ',', '.') }}</td>
                                <td class="column-4">
                                    <div class="wrap-num-product flex-w m-l-auto m-r-0">
                                        <form action="{{ route('cart.update', $item->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('PUT')
                                            <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                                <i class="fs-16 zmdi zmdi-minus"></i>
                                            </div>
                                            <input class="mtext-104 cl3 txt-center num-product" type="number" name="quantity" value="{{ $item->quantity }}">
                                            <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                                <i class="fs-16 zmdi zmdi-plus"></i>
                                            </div>
                                            <button type="submit" class="d-none update-cart-btn">Update</button>
                                        </form>
                                    </div>
                                </td>
                                <td class="column-5">Rp{{ number_format($item->price * $item->quantity, 0, ',', '.') }}</td>
                                <td class="column-6">
                                    <form action="{{ route('cart.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <i class="zmdi zmdi-delete"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center p-4">
                                    <p>Keranjang belanja Anda kosong</p>
                                    <a href="{{ route('service') }}" class="flex-c-m stext-101 cl0 size-107 bg1 bor2 hov-btn1 p-lr-15 trans-04 m-b-10 m-t-10 m-auto" style="max-width: 200px;">
                                        Lihat Layanan
                                    </a>
                                </td>
                            </tr>
                            @endforelse
                        </table>
                    </div>

                    <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                        <div class="flex-w flex-m m-r-20 m-tb-5">
                            <a href="{{ route('service') }}" class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
                                Lanjutkan Belanja
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
                <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                    <h4 class="mtext-109 cl2 p-b-30">
                        Total Keranjang
                    </h4>

                    <div class="flex-w flex-t bor12 p-b-13">
                        <div class="size-208">
                            <span class="stext-110 cl2">
                                Subtotal:
                            </span>
                        </div>

                        <div class="size-209">
                            <span class="mtext-110 cl2">
                                Rp{{ number_format($total, 0, ',', '.') }}
                            </span>
                        </div>
                    </div>

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
                </div>

                <a href="{{ route('checkout') }}" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                    Lanjutkan ke Pembayaran
                </a>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        // Update cart when quantity changes
        $('.btn-num-product-up, .btn-num-product-down').click(function() {
            setTimeout(function() {
                $('.update-cart-btn').click();
            }, 300);
        });
    });
</script>
@endpush