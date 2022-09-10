@extends('layouts.app-master')

@section('content')
    <div class="pro-content page-content product-page product-page-one">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="slider-wrapper">
                        <div class="slider-for">
                            @foreach ($item['model_produk'] as $mp)
                                {{-- <a class="slider-for__item ex1 fancybox-button" href="{{ asset('photo/'.$mp->gambar_produk) }}" data-fancybox-group="fancybox-button" title="Lorem ipsum dolor sit amet"> --}}
                                <a class="slider-for__item ex1 fancybox-button" href="{{ env('PRODUCT_PATH').$mp->gambar_produk }}" data-fancybox-group="fancybox-button" title="Lorem ipsum dolor sit amet">
                                    {{-- <img src="{{ asset('photo/'.$mp->gambar_produk) }}" alt="Zoom Image" /> --}}
                                    <img src="{{ env('PRODUCT_PATH').$mp->gambar_produk }}" alt="Zoom Image" />
                                </a>
                            @endforeach
                        </div>
                        <div class="slider-nav">
                            @foreach ($item['model_produk'] as $mp)
                                <div class="slider-nav__item">
                                    {{-- <img src="{{ asset('photo/'.$mp->gambar_produk) }}" alt="Zoom Image" /> --}}
                                    <img src="{{ env('PRODUCT_PATH').$mp->gambar_produk }}" alt="Zoom Image" />
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <h2>{{ $item->nama_produk }}</h2>
                            <div class="pro-price">
                                <ins>Rp {{ number_format($item->harga_produk) }}</ins>
                            </div>
                            <div class="pro-info">
                                <div class="pro-single-info">
                                    <b>Kategori</b>
                                    <span>{{ $item->jenis_produk }}</span>
                                </div>
                            </div>
                            <div class="pro-info">
                                <!--<span>{!! $item->deskripsi_produk !!}</span>-->
                                <textarea class="form-control" rows="8" col="5" style="border:0;">{!! $item->deskripsi_produk !!}</textarea>
                            </div>

                            <form action="{{ route('produk.add-to-cart') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="row col-lg-8">
                                    @foreach ($item['model_produk'] as $mp)
                                        <div class="col-3 mt-2 mb-2">
                                            {{-- <img src="{{ asset('photo/'.$mp->gambar_produk) }}" style="width: 100%; border-radius: 10px;"> --}}
                                            <img src="{{ env('PRODUCT_PATH').$mp->gambar_produk }}" style="width: 100%; border-radius: 10px;">
                                        </div>
                                        <div class="col-5 mt-2 mb-2">
                                            {{ $mp->nama_model }}<br>
                                            Stok: {{ $mp->stok_produk }}
                                        </div>
                                        <div class="col-4 mt-2 mb-2">
                                            <div class="row p-0 m-0">
                                                <input type="number" name="jumlah[]" placeholder="Qty" class="form-control mr-2" value="0" min="0" max="{{ $mp->stok_produk }}">
                                                <input type="hidden" name="id_model[]" value="{{ $mp->id_model }}">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <br>
                                <button type="submit" style="width: 100%;"  class="btn btn-primary">Beli</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
