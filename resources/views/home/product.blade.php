@extends('layouts.app-master')

@section('content')
    <div class="wrapper" style="display: none;">
        <div class="pro-content page-content shop-page shop-page-two">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-3">
                        <form action="{{ route('produk', ['kategori' => $kategori, 'urutkan' => $urutkan, 'keyword' => $keyword]) }}" method="GET">
                        @csrf
                            <div class="widget">
                                <a class="dropdown-toggle" data-toggle="collapse" href="#collapse-widget-1" role="button" aria-expanded="false" aria-controls="collapse-widget-1"> Kategori </a>
                                <div class="collapse show" id="collapse-widget-1">
                                    <div class="card card-body">
                                        <div class="color-range">
                                            <ul class="unorder-list">
                                                <li class="list-item">
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" value="Semua" @if($kategori == 'Semua') checked @endif name="kategori">Semua </label>
                                                    </div>
                                                </li>
                                                <li class="list-item">
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" value="Rumah Tangga" @if($kategori == 'Rumah Tangga') checked @endif name="kategori">Rumah Tangga </label>
                                                    </div>
                                                </li>
                                                <li class="list-item">
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" value="Buku Anak" @if($kategori == 'Buku Anak') checked @endif name="kategori">Buku Anak </label>
                                                    </div>
                                                </li>
                                                <li class="list-item">
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" value="Pre Order" @if($kategori == 'Pre Order') checked @endif name="kategori">Pre Order </label>
                                                    </div>
                                                </li>
                                                <li class="list-item">
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" value="Barang Rumah" @if($kategori == 'Barang Rumah') checked @endif name="kategori">Barang Rumah </label>
                                                    </div>
                                                </li>
                                                <li class="list-item">
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" value="Mainan Anak" @if($kategori == 'Mainan Anak') checked @endif name="kategori">Mainan Anak </label>
                                                    </div>
                                                </li>
                                                <li class="list-item">
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" value="Ready Supplier" @if($kategori == 'Ready Supplier') checked @endif name="kategori">Ready Supplier </label>
                                                    </div>
                                                </li>
                                                <li class="list-item">
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" value="Kebutuhan Anak" @if($kategori == 'Kebutuhan Anak') checked @endif name="kategori">Kebutuhan Anak </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget">
                                <a class="dropdown-toggle" data-toggle="collapse" href="#collapse-widget-2" role="button" aria-expanded="false" aria-controls="collapse-widget-2"> Urutkan Berdasarkan<br>Produk </a>
                                <div class="collapse show" id="collapse-widget-2">
                                    <div class="card card-body">
                                        <div class="color-range">
                                            <ul class="unorder-list">
                                                <li class="list-item">
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="urutkan" value="Terbaru" @if($urutkan == 'Terbaru') checked @endif>Terbaru </label>
                                                    </div>
                                                </li>
                                                <li class="list-item">
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="urutkan" value="Terlama" @if($urutkan == 'Terlama') checked @endif>Terlama </label>
                                                    </div>
                                                </li>
                                                <li class="list-item">
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="urutkan" value="Harga Terendah" @if($urutkan == 'Harga Terendah') checked @endif>Harga Terendah </label>
                                                    </div>
                                                </li>
                                                <li class="list-item">
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="urutkan" value="Harga Tertinggi" @if($urutkan == 'Harga Tertinggi') checked @endif>Harga Tertinggi </label>
                                                    </div>
                                                </li>
                                                <li class="list-item">
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="urutkan" value="Nama Produk (A-Z)" @if($urutkan == 'Nama Produk (A-Z)') checked @endif>Nama Produk (A-Z) </label>
                                                    </div>
                                                </li>
                                                <li class="list-item">
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="urutkan" value="Nama Produk (Z-A)" @if($urutkan == 'Nama Produk (Z-A)') checked @endif>Nama Produk (Z-A) </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mb-3" style="width: 100%;">Filter Produk</button>
                        </form>
                    </div>
                    <div class="col-12 col-lg-9">
                        <h5 class="font-weight-bold">Total Produk <span style="color: red;">{{ count($products) }}</span></h5>
                        <div id="swap" class="productbar">
                            <div class="row">
                                @foreach ($products as $product)
                                    <div class="col-12">
                                        <div class="product product-list">
                                            <article>
                                                <div class="row align-items-start">
                                                    <div class="col-12 col-lg-3">
                                                        <div class="pro-thumb">
                                                            <img class="img-fluid" src="{{ $product->model_produk ? asset('photo/'.$product->model_produk->gambar_produk) : asset('images/product_images/product_image_1.jpg') }}" alt="Product-Image">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-9">
                                                        <div class="pro-info">
                                                            <div class="pro-category"> {{ $product->jenis_produk }} </div>
                                                            <h3>
                                                                <a href="product-page1.html">{{ $product->nama_produk }}</a>
                                                            </h3>
                                                            <p>{!! substr($product->deskripsi_produk, 0, 300) !!}..</p>
                                                            <div class="pro-price">
                                                                <ins>Rp {{ number_format($product->harga_produk) }}</ins>
                                                            </div>
                                                        </div>
                                                        <div class="row align-items-end">
                                                            <div class="col-12 col-lg-6">
                                                                <div class="icons">
                                                                    <button class="btn-light icon" onclick="showModelProduk('{{ $product->array_model_produk }}','{{ $product->harga_produk_rp }}')">
                                                                        <i class="fas fa-shopping-bag"></i>
                                                                    </button>
                                                                    <a href="{{ route('produk.detail', ['slug' => $product->slug]) }}" class="btn-light icon">
                                                                        <i class="fas fa-eye"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-overlay"></div>
    <a href="#" class="btn-secondary " id="back-to-top" title="Back to top">&uarr;</a>

    <div class="modal fade show" id="modal-model-produk" tabindex="-1" role="dialog" style="display: block; padding-right: 17px;" aria-modal="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Pilih Model Produk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('produk.add-to-cart') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="row" id="modal-detail-model-produk"></div>
                        <button type="submit" style="width: 100%;"  class="btn btn-primary">Beli</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $('#modal-model-produk').hide()

        function showModelProduk(data, harga_produk){
            $('#modal-model-produk').modal('show');
            $('#modal-detail-model-produk').html('')

            var arr = JSON.parse(data)
            // var harga = JSON.parse(harga_produk)

            $(arr).each(function(i, val) {
                if(val){
                    $(val).each(function(i_detail, val_detail) {
                        $('#modal-detail-model-produk').append(
                            '<div class="col-2 mt-2 mb-2">'+
                                '<img src="{{ asset('photo') }}/'+val_detail.gambar_produk+'" style="width: 100%;">'+
                            '</div>'+
                            '<div class="col-7 mt-2 mb-2">'+
                                'Purple<br>'+
                                'Rp '+harga_produk+' Stok: '+val_detail.stok_produk+
                            '</div>'+
                            '<div class="col-3 mt-2 mb-2">'+
                                '<div class="row p-0 m-0">'+
                                    '<input type="number" name="jumlah[]" placeholder="Qty" class="form-control mr-2" value="0" min="0" max="'+val_detail.stok_produk+'">'+
                                    '<input type="hidden" name="id_model[]" value="'+val_detail.id_model+'">'+
                                    // '<button type="submit" style="width: 45%;" name="id_model" value="'+val_detail.id_model+'" class="btn btn-primary">Beli</button>'+
                                '</div>'+
                            '</div>'
                        );
                    });
                }
            });
        }

        function showDetailProduk(id){
            console.log(id)
            $('#modal-model-produk2').modal('show');
        }
    </script>
@endsection
