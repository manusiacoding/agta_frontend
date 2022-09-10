@extends('layouts.app-master')

@section('content')
    <br>
    <br>
    <br>
    <br>
    <div class="wrapper" style="display: none;">
    <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach ($banners as $key => $banner)
                    <div class="carousel-item @if($key == 0) active @endif">
                        <a href="{{ route('produk.detail', ['slug' => $banner->produk->slug]) }}">
                            <img class="d-block w-100" src="{{ 'https://dashboard.agtastore.com/banners/'.$banner->gambar }}">
                        </a>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

	<section class="tabs-content pro-content">
		<div class="container">
            {{-- <center>
                <a href="{{ route('info') }}" class="btn btn-primary ml-1 mr-1 mb-5" style="width: 100%; max-width: 150px;">
                    <br>
                    <i class="fas fa-2x fa-store">
                        <span style="font-size: 15px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-weight: normal;">
                            <br>Info Toko
                        </span>
                    </i>
                </a>
                <a href="{{ route('rating') }}" class="btn btn-primary ml-1 mr-1 mb-5" style="width: 100%; max-width: 150px;">
                    <i class="far fa-2x fa-star">
                        <span style="font-size: 15px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-weight: normal;"><br>Rating</span>
                        <span style="font-size: 20px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-weight: normal;"><br><b>{{ $rating }}</b></span>
                    </i>
                </a>
                <a href="{{ route('blog') }}" class="btn btn-primary ml-1 mr-1 mb-5" style="width: 100%; max-width: 150px;">
                    <br>
                    <i class="fab fa-2x fa-blogger-b">
                        <span style="font-size: 15px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-weight: normal;">
                            <br>Blog
                        </span>
                    </i>
                </a>
            </center> --}}
			<div class="row ">
				<div class="col-12 col-md-6">
					<div class="pro-heading-title">
						<h2>AGTA Local & Import</h2>
						<p>Gudang Keluarga</p>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<div class="nav" role="tablist" id="tabCarousel">
                        <button id="semua-produk" onclick="showSemuaProduk()" style="background-color: red;" type="button" class="nav-link btn btn-secondary">Semua Produk</button>
                        <button id="kategori" onclick="showKategori()" style="background-color: black;" type="button" class="nav-link btn btn-secondary">Kategori</button>
					</div>
				</div>
			</div>
                <div class="row" id="konten-semua-produk">
                    @foreach ( $products as $product )
                        <div class="col-md-3 col-6 mt-2 mb-2">
                            <div class="product">
                                <article>
                                    <div class="pro-thumb">
                                        <img style="width: 100%; height: 100%;" class="img-fluid" src="{{ $product->model_produk ? asset('https://dashboard.agtastore.com/images/'.$product->model_produk->gambar_produk) : asset('images/product_images/product_image_1.jpg') }}" alt="Product-Image">
                                        <div class="pro-hover-icons">
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
                                    <div class="pro-info">
                                        <div class="pro-category">
                                            {{ $product->jenis_produk }}
                                        </div>
                                        <h3>
                                            <a href="{{ route('produk.detail', ['slug' => $product->slug]) }}">{{ $product->nama_produk }}</a>
                                        </h3>
                                        <div class="pro-price">
                                            <ins>Rp {{ number_format($product->harga_produk) }}</ins>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="row" id="konten-kategori">
                    <div class="col-6 col-lg-3 mt-3 mb-3">
                        <a href="{{ route('produk', ['kategori' => 'Rumah Tangga', 'urutkan' => 'Terbaru', 'keyword' => 'null']) }}">
                            <div class="product">
                                <article>
                                    <div class="pro-thumb img-fluid" style="background-color: black;">
										<center>
											<i class="fas fa-home fa-4x mt-5 mb-2" style="color: white;"></i>
											<h3 style="color: white;">Rumah Tangga</h3>
											<br>
											<br>
										</center>
                                    </div>
                                </article>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-lg-3 mt-3 mb-3">
                        <a href="{{ route('produk', ['kategori' => 'Buku Anak', 'urutkan' => 'Terbaru', 'keyword' => 'null']) }}">
                            <div class="product">
                                <article>
                                    <div class="pro-thumb img-fluid" style="background-color: black;">
										<center>
											<i class="fas fa-book fa-4x mt-5 mb-2" style="color: white;"></i>
											<h3 style="color: white;">Buku Anak</h3>
											<br>
											<br>
										</center>
                                    </div>
                                </article>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-lg-3 mt-3 mb-3">
                        <a href="{{ route('produk', ['kategori' => 'Pre Order', 'urutkan' => 'Terbaru', 'keyword' => 'null']) }}">
                            <div class="product">
                                <article>
                                    <div class="pro-thumb img-fluid" style="background-color: black;">
										<center>
											<i class="fas fa-clipboard-list fa-4x mt-5 mb-2" style="color: white;"></i>
											<h3 style="color: white;">Pre Order</h3>
											<br>
											<br>
										</center>
                                    </div>
                                </article>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-lg-3 mt-3 mb-3">
                        <a href="{{ route('produk', ['kategori' => 'Barang Rumah', 'urutkan' => 'Terbaru', 'keyword' => 'null']) }}">
                            <div class="product">
                                <article>
                                    <div class="pro-thumb img-fluid" style="background-color: black;">
										<center>
											<i class="fas fa-chair fa-4x mt-5 mb-2" style="color: white;"></i>
											<h3 style="color: white;">Barang Rumah</h3>
											<br>
											<br>
										</center>
                                    </div>
                                </article>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-lg-3 mt-3 mb-3">
                        <a href="{{ route('produk', ['kategori' => 'Mainan Anak', 'urutkan' => 'Terbaru', 'keyword' => 'null']) }}">
                            <div class="product">
                                <article>
                                    <div class="pro-thumb img-fluid" style="background-color: black;">
										<center>
											<i class="fas fa-gamepad fa-4x mt-5 mb-2" style="color: white;"></i>
											<h3 style="color: white;">Mainan Anak</h3>
											<br>
											<br>
										</center>
                                    </div>
                                </article>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-lg-3 mt-3 mb-3">
                        <a href="{{ route('produk', ['kategori' => 'Ready Supplier', 'urutkan' => 'Terbaru', 'keyword' => 'null']) }}">
                            <div class="product">
                                <article>
                                    <div class="pro-thumb img-fluid" style="background-color: black;">
										<center>
											<i class="far fa-check-square fa-4x mt-5 mb-2" style="color: white;"></i>
											<h3 style="color: white;">Ready Supplier</h3>
											<br>
											<br>
										</center>
                                    </div>
                                </article>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-lg-3 mt-3 mb-3">
                        <a href="{{ route('produk', ['kategori' => 'Kebutuhan Anak', 'urutkan' => 'Terbaru', 'keyword' => 'null']) }}">
                            <div class="product">
                                <article>
                                    <div class="pro-thumb img-fluid" style="background-color: black;">
										<center>
											<i class="fas fa-child fa-4x mt-5 mb-2" style="color: white;"></i>
											<h3 style="color: white;">Kebutuhan Anak</h3>
											<br>
											<br>
										</center>
                                    </div>
                                </article>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
		</div>
	</section>

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
        $('#konten-kategori').hide()

        function showKategori(){
            $("#kategori").css("background-color", "red");
            $("#semua-produk").css("background-color", "black");
            $('#konten-kategori').fadeIn()
            $('#konten-semua-produk').hide()
        }

        function showSemuaProduk(){
            $("#kategori").css("background-color", "black");
            $("#semua-produk").css("background-color", "red");
            $('#konten-semua-produk').fadeIn()
            $('#konten-kategori').hide()
        }

        $('#modal-model-produk').hide()

        function showModelProduk(data, harga_produk){
            $('#modal-model-produk').modal('show');
            $('#modal-detail-model-produk').html('')

            var arr = JSON.parse(data)

            $(arr).each(function(i, val) {
                if(val){
                    $(val).each(function(i_detail, val_detail) {
                        $('#modal-detail-model-produk').append(
                            '<div class="col-2 mt-2 mb-2">'+
                                // '<img src="{{ asset('photo') }}/'+val_detail.gambar_produk+'" style="width: 100%;">'+
                                '<img src="https://dashboard.agtastore.com/images/'+val_detail.gambar_produk+'" style="width: 100%;">'+
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
