@extends('public.layouts.master')
@section('content')
    <div class="container">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
        </div>
    </div>
    <section class="sec-product-detail bg0 p-t-65 p-b-60">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-7 p-b-30">
                    <div class="p-l-25 p-r-30 p-lr-0-lg">
                        <div class="wrap-slick3 flex-sb flex-w">
                            <div class="wrap-slick3-dots"></div>
                            <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

                            <div class="slick3 gallery-lb">
                                <div class="item-slick3" data-thumb="{{ asset('storage/' . $jasa->gambar) }}">
                                    <div class="wrap-pic-w pos-relative">
                                        <img src="{{ asset('storage/' . $jasa->gambar) }}" alt="IMG-PRODUCT">
                                        <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04"
                                            href="{{ asset('storage/' . $jasa->gambar) }}">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                    </div>
                                </div>

                                @if (isset($jasa->galeri) && count($jasa->galeri) > 0)
                                    @foreach ($jasa->galeri as $galeri)
                                        <div class="item-slick3" data-thumb="{{ asset('storage/' . $galeri->gambar) }}">
                                            <div class="wrap-pic-w pos-relative">
                                                <img src="{{ asset('storage/' . $galeri->gambar) }}" alt="IMG-PRODUCT">
                                                <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04"
                                                    href="{{ asset('storage/' . $galeri->gambar) }}">
                                                    <i class="fa fa-expand"></i>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="item-slick3" data-thumb="assets/images/product-detail-02.jpg">
                                        <div class="wrap-pic-w pos-relative">
                                            <img src="assets/images/product-detail-02.jpg" alt="IMG-PRODUCT">
                                            <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04"
                                                href="assets/images/product-detail-02.jpg">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-slick3" data-thumb="assets/images/product-detail-03.jpg">
                                        <div class="wrap-pic-w pos-relative">
                                            <img src="assets/images/product-detail-03.jpg" alt="IMG-PRODUCT">
                                            <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04"
                                                href="assets/images/product-detail-03.jpg">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-5 p-b-30">
                    <div class="p-r-50 p-t-5 p-lr-0-lg">
                        <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                            {{ $jasa->nama }}
                        </h4>
                        <span class="mtext-106 cl2">
                            Rp{{ number_format($jasa->harga, 0, ',', '.') }}
                        </span>
                        <div class="p-t-33">
                            <div class="flex-w flex-r-m p-b-10">
                                <div class="size-203 flex-c-m respon6">
                                    Size
                                </div>
                                <div class="size-204 respon6-next">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2" name="time">
                                            <option>Choose an option</option>
                                            <option>Size S</option>
                                            <option>Size M</option>
                                            <option>Size L</option>
                                            <option>Size XL</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-w flex-r-m p-b-10">
                                <div class="size-203 flex-c-m respon6">
                                    Color
                                </div>
                                <div class="size-204 respon6-next">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2" name="time">
                                            <option>Choose an option</option>
                                            <option>Red</option>
                                            <option>Blue</option>
                                            <option>White</option>
                                            <option>Grey</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-w flex-r-m p-b-10">
                                <div class="size-204 flex-w flex-m respon6-next">
                                    <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                        <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                            <i class="fs-16 zmdi zmdi-minus"></i>
                                        </div>

                                        <input class="mtext-104 cl3 txt-center num-product" type="number"
                                            name="num-product" value="1">

                                        <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                            <i class="fs-16 zmdi zmdi-plus"></i>
                                        </div>
                                    </div>

                                    <button
                                        class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                                        Add to cart
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="flex-w flex-m p-l-100 p-t-40 respon7">
                            <a href="https://wa.me/6281262425029?text=Halo DigitalPro, saya tertarik dengan layanan {{ urlencode($jasa->nama) }}"
                                class="flex-m hov-cl1 trans-04 p-lr-5 p-tb-2 tooltip100" data-tooltip="WhatsApp"
                                target="_blank" style="text-decoration: none;">
                                <img src="{{ asset('assets/images/logowa.png') }}" alt="WhatsApp"
                                    style="width:56px; height:56px; margin-right:8px;">
                                <span class="fs-14 cl3">Hubungi Kami</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="bor10 m-t-50 p-t-43 p-b-40">
                <div class="tab01">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item p-b-10">
                            <a class="nav-link active" data-toggle="tab" href="#description" role="tab">Description</a>
                        </li>
                        <li class="nav-item p-b-10">
                            <a class="nav-link" data-toggle="tab" href="#information" role="tab">Forum Diskusi</a>
                        </li>
                        <li class="nav-item p-b-10">
                            <a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Reviews (1)</a>
                        </li>
                    </ul>
                    <div class="tab-content p-t-43">
                        <!-- - -->
                        <div class="tab-pane fade show active" id="description" role="tabpanel">
                            <div class="how-pos2 p-lr-15-md">
                                <p class="stext-102 cl6">
                                    {!! htmlspecialchars_decode($jasa->deskripsi) !!}
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="information" role="tabpanel">
                            <div class="row">
                                <div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
                                    <div class="p-b-30 m-lr-15-sm">
                                        <div class="flex-w flex-t p-b-68">
                                            <div class="wrap-pic-s size-109 bor0 of-hidden m-r-18 m-t-6">
                                                @if (auth()->check() && auth()->user()->profile_photo_path)
                                                    <img src="{{ asset('storage/' . auth()->user()->profile_photo_path) }}"
                                                        alt="{{ auth()->user()->name }}" class="avatar-img">
                                                @else
                                                    <img src="{{ asset('assets/images/default-avatar.png') }}"
                                                        alt="Avatar" class="avatar-img">
                                                @endif
                                            </div>
                                            <div class="size-207">
                                                <div class="flex-w flex-sb-m p-b-10">
                                                    @if (auth()->check())
                                                        <span class="mtext-107 cl2 p-r-20">
                                                            {{ auth()->user()->name }}
                                                        </span>
                                                    @else
                                                        <span class="mtext-107 cl2 p-r-20 text-danger">
                                                            Untuk mengikuti forum diskusi, silakan
                                                            <a href="{{ route('login') }}">login</a>.
                                                        </span>
                                                    @endif
                                                </div>
                                                @if (auth()->check())
                                                    <p class="stext-102 cl6">
                                                        Tanyakan dan diskusikan apa yang ingin kamu sampaikan
                                                    </p>
                                                @else
                                                    <p class="stext-102 cl6">
                                                    </p>
                                                @endif
                                            </div>
                                        </div>

                                        <!-- List Diskusi -->
                                        <div class="mt-5">
                                            <h4 class="mtext-112 cl2 mb-4">Diskusi Terkini</h4>

                                            @if (count($diskusi) > 0)
                                                @foreach ($diskusi as $item)
                                                    <div class="flex-w flex-t p-b-30 mt-4 border-bottom">
                                                        <div class="wrap-pic-s size-109 bor0 of-hidden m-r-18 m-t-6">
                                                            @if ($item->user->profile_photo_path)
                                                                <img src="{{ asset('storage/' . $item->user->profile_photo_path) }}"
                                                                    alt="{{ $item->user->name }}" class="avatar-img">
                                                            @else
                                                                <img src="{{ asset('assets/images/default-avatar.png') }}"
                                                                    alt="{{ $item->user->name }}" class="avatar-img">
                                                            @endif
                                                        </div>
                                                        <div class="size-207">
                                                            <div class="flex-w flex-sb-m p-b-17">
                                                                <span class="mtext-107 cl2 p-r-20">
                                                                    {{ $item->user->name }}
                                                                </span>
                                                                <span class="fs-14 cl11">
                                                                    {{ $item->created_at->format('d M Y, H:i') }}
                                                                </span>
                                                            </div>
                                                            <p class="stext-102 cl6 mb-3">
                                                                {{ $item->isi }}
                                                            </p>

                                                            <!-- Tombol Reply -->
                                                            @if (auth()->check())
                                                                <button
                                                                    class="stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 mb-3 btn-reply"
                                                                    data-parent="{{ $item->id }}"
                                                                    data-username="{{ $item->user->name }}">
                                                                    Balas
                                                                </button>

                                                                <!-- Form Reply (hidden by default) -->
                                                                <form method="POST"
                                                                    action="{{ route('forum.store', ['jasa_id' => $jasa->id]) }}"
                                                                    class="w-full reply-form mt-3 p-3 bg-light rounded"
                                                                    id="reply-form-{{ $item->id }}"
                                                                    style="display:none;">
                                                                    @csrf
                                                                    <div class="row p-b-15">
                                                                        <div class="col-12 p-b-5">
                                                                            <!-- Label akan ditambahkan di sini oleh JavaScript -->
                                                                            <textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10" name="isi" required placeholder="Tulis balasan..."></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <input type="hidden" name="user_id"
                                                                        value="{{ auth()->id() }}">
                                                                    <input type="hidden" name="jasa_id"
                                                                        value="{{ $jasa->id }}">
                                                                    <input type="hidden" name="parent_id"
                                                                        value="{{ $item->id }}">
                                                                    <input type="hidden" name="replied_user_name"
                                                                        value="{{ $item->user->name }}">
                                                                    <button type="submit"
                                                                        class="stext-101 cl0 size-101 bg7 bor11 hov-btn3 p-lr-15 trans-04 mb-3">
                                                                        Balas Diskusi
                                                                    </button>
                                                                </form>
                                                            @endif

                                                            <!-- Balasan Diskusi -->
                                                            @if (count($item->replies) > 0)
                                                                <div class="replies-container mt-4">
                                                                    @foreach ($item->replies as $reply)
                                                                        <div
                                                                            class="flex-w flex-t p-b-20 mt-2 border-top pt-3">
                                                                            <div
                                                                                class="wrap-pic-s size-50 bor0 of-hidden m-r-18 m-t-6">
                                                                                @if ($reply->user->profile_photo_path)
                                                                                    <img src="{{ asset('storage/' . $reply->user->profile_photo_path) }}"
                                                                                        alt="{{ $reply->user->name }}"
                                                                                        class="avatar-img">
                                                                                @else
                                                                                    <img src="{{ asset('assets/images/default-avatar.png') }}"
                                                                                        alt="{{ $reply->user->name }}"
                                                                                        class="avatar-img">
                                                                                @endif
                                                                            </div>
                                                                            <div class="size-207">
                                                                                <div class="flex-w flex-sb-m p-b-10">
                                                                                    <span class="mtext-107 cl2 p-r-20"
                                                                                        style="font-size: 14px;">
                                                                                        {{ $reply->user->name }}
                                                                                    </span>
                                                                                    <span class="fs-14 cl11"
                                                                                        style="font-size: 12px;">
                                                                                        {{ $reply->created_at->format('d M Y, H:i') }}
                                                                                    </span>
                                                                                </div>
                                                                                <p class="stext-102 cl6"
                                                                                    style="font-size: 14px;">
                                                                                    @if (isset($reply->replied_user_name))
                                                                                        <span
                                                                                            class="font-weight-bold text-primary">@{{ $reply - > replied_user_name }}</span>
                                                                                    @endif
                                                                                    {{ $reply->isi }}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @else
                                                <div class="text-center p-5">
                                                    <p class="stext-102 cl6">Belum ada diskusi. Jadilah yang pertama
                                                        berkomentar!</p>
                                                </div>
                                            @endif
                                        </div>

                                        @if (auth()->check())
                                            <!-- Form Diskusi -->
                                            <form method="POST"
                                                action="{{ route('forum.store', ['jasa_id' => $jasa->id]) }}"
                                                class="w-full">
                                                @csrf
                                                <h5 class="mtext-108 cl2 p-b-7">
                                                    Ada yang ingin anda diskusikan?
                                                </h5>
                                                @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                                <div class="row p-b-25">
                                                    <div class="col-12 p-b-5">
                                                        <label class="stext-102 cl3" for="review">Diskusi anda</label>
                                                        <textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10" id="review" name="isi" required></textarea>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                                                <input type="hidden" name="jasa_id" value="{{ $jasa->id }}">
                                                <button type="submit"
                                                    class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10">
                                                    Submit
                                                </button>
                                            </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="reviews" role="tabpanel">
                            <div class="row">
                                <div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
                                    <div class="p-b-30 m-lr-15-sm">
                                        <div class="flex-w flex-t p-b-68">
                                            <div class="wrap-pic-s size-109 bor0 of-hidden m-r-18 m-t-6">
                                                <img src="{{ asset('assets/images/logowa.png') }}" alt="AVATAR">
                                            </div>
                                            <div class="size-207">
                                                <div class="flex-w flex-sb-m p-b-17">
                                                    <span class="mtext-107 cl2 p-r-20">
                                                        Ariana Grande
                                                    </span>
                                                    <span class="fs-18 cl11">
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star"></i>
                                                        <i class="zmdi zmdi-star-half"></i>
                                                    </span>
                                                </div>
                                                <p class="stext-102 cl6">
                                                    Quod autem in homine praestantissimum atque optimum est, id deseruit.
                                                    Apud ceteros autem philosophos
                                                </p>
                                            </div>
                                        </div>

                                        @if (auth()->check())
                                            <form class="w-full">
                                                <h5 class="mtext-108 cl2 p-b-7">
                                                    Add a review
                                                </h5>

                                                <p class="stext-102 cl6">
                                                    Your email address will not be published. Required fields are marked *
                                                </p>

                                                <div class="flex-w flex-m p-t-50 p-b-23">
                                                    <span class="stext-102 cl3 m-r-16">
                                                        Your Rating
                                                    </span>

                                                    <span class="wrap-rating fs-18 cl11 pointer">
                                                        <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                                        <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                                        <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                                        <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                                        <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                                        <input class="dis-none" type="number" name="rating">
                                                    </span>
                                                </div>

                                                <div class="row p-b-25">
                                                    <div class="col-12 p-b-5">
                                                        <label class="stext-102 cl3" for="review">Your review</label>
                                                        <textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10" id="review" name="review"></textarea>
                                                    </div>

                                                    <div class="col-sm-6 p-b-5">
                                                        <label class="stext-102 cl3" for="name">Name</label>
                                                        <input class="size-111 bor8 stext-102 cl2 p-lr-20" id="name"
                                                            type="text" name="name"
                                                            value="{{ auth()->user()->name }}">
                                                    </div>

                                                    <div class="col-sm-6 p-b-5">
                                                        <label class="stext-102 cl3" for="email">Email</label>
                                                        <input class="size-111 bor8 stext-102 cl2 p-lr-20" id="email"
                                                            type="text" name="email"
                                                            value="{{ auth()->user()->email }}">
                                                    </div>
                                                </div>

                                                <button
                                                    class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10">
                                                    Submit
                                                </button>
                                            </form>
                                        @else
                                            <div class="text-center p-5">
                                                <p class="stext-102 cl6 text-danger">Untuk menambahkan review, silakan
                                                    <a href="{{ route('login') }}">login</a>.
                                                </p>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<style>
    .avatar-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 50%;
    }

    .reply-form {
        border-left: 3px solid #e6e6e6;
        transition: all 0.3s ease;
    }

    .reply-to-label {
        color: #888;
        font-style: italic;
        margin-bottom: 8px;
    }

    /* Tag username dalam balasan */
    .text-primary {
        color: #0275d8 !important;
        font-weight: bold;
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Menangani klik tombol reply
        document.querySelectorAll('.btn-reply').forEach(function(button) {
            button.addEventListener('click', function() {
                const parentId = this.getAttribute('data-parent');
                const parentUsername = this.getAttribute('data-username');
                const replyForm = document.getElementById('reply-form-' + parentId);

                // Update placeholder textarea dengan nama user yang dibalas
                const textarea = replyForm.querySelector('textarea');
                if (textarea) {
                    textarea.placeholder = `Balas ke: ${parentUsername}`;

                    // Tambahkan label visual di atas textarea
                    const replyLabel = replyForm.querySelector('.reply-to-label');
                    if (!replyLabel) {
                        const label = document.createElement('div');
                        label.className = 'reply-to-label stext-102 cl2 p-b-10';
                        label.innerHTML =
                            `<strong>Membalas pesan dari: ${parentUsername}</strong>`;
                        textarea.parentNode.insertBefore(label, textarea);
                    } else {
                        replyLabel.innerHTML =
                            `<strong>Membalas pesan dari: ${parentUsername}</strong>`;
                    }
                }

                // Toggle form reply
                if (replyForm.style.display === 'none' || replyForm.style.display === '') {
                    replyForm.style.display = 'block';
                    replyForm.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });
                    if (textarea) {
                        setTimeout(function() {
                            textarea.focus();
                        }, 500);
                    }
                } else {
                    replyForm.style.display = 'none';
                }
            });
        });
    });
</script>
