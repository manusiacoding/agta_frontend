@extends('layouts.app-master')

@section('content')
    <section class="pro-content checkout-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-12">
                    <div class="row">
                        <div class="col-12 col-lg-3">
                            <div class="checkoutd-nav">
                                <ul class="nav flex-column nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-info-tab" data-toggle="pill" href="#pills-info" role="tab" aria-controls="pills-info" aria-selected="false">Rating</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-lg-9">
                            <div class="checkout-module">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="pills-info" role="tabpanel" aria-labelledby="pills-info-tab">
                                        <section class="pro-content blog-content pt-0 mt-0">
                                            <div class="container">
                                                <div class="row">
                                                    @foreach ($ratings as $rating)
                                                        <div class="col-12 col-lg-12">
                                                            <div class="blog-thumb">
                                                                {{-- <img class="img-fluid" src="{{ asset('photo/'.$rating->gambar_produk) }}" style="width: 100%; max-width:75px;" alt="Blog-Image"> --}}
                                                                <img class="img-fluid" src="{{ env('PRODUCT_PATH').$rating->gambar_produk }}" style="width: 100%; max-width:75px;" alt="Blog-Image">
                                                            </div>
                                                            <div class="blog-info">
                                                                <div class="blog-meta mt-2 mb-1">
                                                                    <a><i class="fas fa-user"></i> {{ $rating->user->name }}</a>
                                                                </div>
                                                                @if($rating->bintang_rating == 0)
                                                                    <i style="color: #007aff;" class="far  fa-star"></i>
                                                                    <i style="color: #007aff;" class="far  fa-star"></i>
                                                                    <i style="color: #007aff;" class="far  fa-star"></i>
                                                                    <i style="color: #007aff;" class="far  fa-star"></i>
                                                                    <i style="color: #007aff;" class="far  fa-star"></i>
                                                                @elseif($rating->bintang_rating == 1)
                                                                    <i style="color: #007aff;" class="fas  fa-star"></i>
                                                                    <i style="color: #007aff;" class="far  fa-star"></i>
                                                                    <i style="color: #007aff;" class="far  fa-star"></i>
                                                                    <i style="color: #007aff;" class="far  fa-star"></i>
                                                                    <i style="color: #007aff;" class="far  fa-star"></i>
                                                                @elseif($rating->bintang_rating == 2)
                                                                    <i style="color: #007aff;" class="fas  fa-star"></i>
                                                                    <i style="color: #007aff;" class="fas  fa-star"></i>
                                                                    <i style="color: #007aff;" class="far  fa-star"></i>
                                                                    <i style="color: #007aff;" class="far  fa-star"></i>
                                                                    <i style="color: #007aff;" class="far  fa-star"></i>
                                                                @elseif($rating->bintang_rating == 3)
                                                                    <i style="color: #007aff;" class="fas  fa-star"></i>
                                                                    <i style="color: #007aff;" class="fas  fa-star"></i>
                                                                    <i style="color: #007aff;" class="fas  fa-star"></i>
                                                                    <i style="color: #007aff;" class="far  fa-star"></i>
                                                                    <i style="color: #007aff;" class="far  fa-star"></i>
                                                                @elseif($rating->bintang_rating == 4)
                                                                    <i style="color: #007aff;" class="fas  fa-star"></i>
                                                                    <i style="color: #007aff;" class="fas  fa-star"></i>
                                                                    <i style="color: #007aff;" class="fas  fa-star"></i>
                                                                    <i style="color: #007aff;" class="fas  fa-star"></i>
                                                                    <i style="color: #007aff;" class="far  fa-star"></i>
                                                                @elseif($rating->bintang_rating == 5)
                                                                    <i style="color: #007aff;" class="fas  fa-star"></i>
                                                                    <i style="color: #007aff;" class="fas  fa-star"></i>
                                                                    <i style="color: #007aff;" class="fas  fa-star"></i>
                                                                    <i style="color: #007aff;" class="fas  fa-star"></i>
                                                                    <i style="color: #007aff;" class="fas  fa-star"></i>
                                                                @endif
                                                                <br>
                                                                <p>{!! $rating->deskripsi_rating !!}</p>
                                                                <hr style="border: 1px solid rgb(192, 192, 192);">
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </section>
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
