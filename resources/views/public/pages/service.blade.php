@extends('public.layouts.master')

@section('content')
    <section class="bg-img1 txt-center p-lr-15 p-tb-92">
        <h2 class="ltext-105 cl2 txt-center">
            {{ $title }}
        </h2>
    </section>
    <section class="bg0 p-t-62 p-b-60">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-12 p-b-80">
                    <div class="p-r-45 p-r-0-lg">
                        @forelse ($jasas as $jasa)
                            <div class="p-b-63">
                                <a href="{{ route('detail-service', $jasa->id) }}" class="hov-img0 how-pos5-parent">
                                    <img src="{{ asset('storage/' . $jasa->gambar) }}" alt="IMG-BLOG">

                                    <div class="flex-col-c-m size-123 bg9 how-pos5">
                                        <span class="ltext-107 cl2 txt-center">
                                            22
                                        </span>

                                        <span class="stext-109 cl3 txt-center">
                                            Maret 2025
                                        </span>
                                    </div>
                                </a>

                                <div class="p-t-32">
                                    <h4 class="p-b-15">
                                        <a href="{{ route('detail-service', $jasa->id) }}"
                                            class="ltext-108 cl2 hov-cl1 trans-04">
                                            {{ $jasa->nama }}
                                        </a>
                                    </h4>

                                    <p class="stext-117 cl6">
                                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                                        himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius
                                    </p>

                                    <div class="flex-w flex-sb-m p-t-18">
                                        <span class="flex-w flex-m stext-111 cl2 p-r-30 m-tb-10">
                                            <span>
                                                <span class="cl4">By</span> Admin
                                                <span class="cl12 m-l-4 m-r-6">|</span>
                                            </span>
                                            <span>
                                                8 Komentar
                                            </span>
                                        </span>
                                        <a href="{{ route('detail-service', $jasa->id) }}"
                                            class="stext-101 cl2 hov-cl1 trans-04 m-tb-10">
                                            Baca Selengkapnya
                                            <i class="fa fa-long-arrow-right m-l-9"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="text-center">Tidak ada data</h4>
                                </div>
                            </div>
                        @endforelse
                        <div class="flex-l-m flex-w w-full p-t-10 m-lr--7">
                            @for ($i = 1; $i <= $jasas->lastPage(); $i++)
                                <a href="{{ $jasas->url($i) }}"
                                    class="flex-c-m how-pagination1 trans-04 m-all-7 {{ $i == $jasas->currentPage() ? 'active-pagination1' : '' }}">
                                    {{ $i }}
                                </a>
                            @endfor
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
