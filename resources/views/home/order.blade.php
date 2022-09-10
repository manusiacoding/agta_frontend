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
                                        <a class="nav-link active" id="pills-order-tab" data-toggle="pill" href="#pills-order" role="tab" aria-controls="pills-order" aria-selected="false">Pesanan</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-lg-9">
                            <div class="checkout-module">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="pills-order" role="tabpanel" aria-labelledby="pills-order-tab">
                                        <section class="order-content">

                                            <div class="accordian">
                                                <table class="table top-table order-table">
                                                    <tbody>
                                                        <tr class="d-flex">
                                                            <td class="col-12 font-weight-bold col-md-1">No</td>
                                                            <td class="col-12 font-weight-bold col-md-2">ID Pemesanan</td>
                                                            <td class="col-12 font-weight-bold col-md-4">Status</td>
                                                            <td class="col-12 font-weight-bold col-md-2">Total Harga</td>
                                                            <td class="col-12 font-weight-bold col-md-2">Tanggal Pemesanan</td>
                                                            <td class="col-12 font-weight-bold col-md-1">Aksi</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            @php $no = 1; @endphp
                                            @foreach ($transactions as $transaction)
                                                <div class="accordian">
                                                    <table class="table top-table order-table">
                                                        <tbody>
                                                            <tr class="d-flex">
                                                                <td class="col-12 col-md-1"> {{ $no++ }} </td>
                                                                <td class="col-12 col-md-2"> AGTA-{{ $transaction->id_transaksi }} </td>
                                                                <td class="col-12 col-md-4">
                                                                    <div class="text-secondary font-weight-bold">
                                                                        @if ($transaction->status == 0)
                                                                            Bukti pembayaran sedang divalidasi
                                                                        @elseif ($transaction->status == 1)
                                                                            Bukti pembayaran tidak sesuai
                                                                        @elseif ($transaction->status == 2)
                                                                            Pesanan Dikirim
                                                                        @elseif ($transaction->status == 3)
                                                                            Pesanan Diterima, Silahkan beri ulasan
                                                                        @elseif ($transaction->status == 4)
                                                                            Pesanan Selesai
                                                                        @elseif ($transaction->status == 5)
                                                                            Pesanan Dibatalkan
                                                                        @endif
                                                                    </div>
                                                                </td>
                                                                <td class="col-12 col-md-2"> Rp {{ number_format($transaction->total_harga) }} </td>
                                                                <td class="col-12 col-md-2"> {{ date('d M Y', strtotime($transaction->created_at)) }} </td>
                                                                <td class="col-12 col-md-1">
                                                                    <a class="btn btn-link" data-toggle="collapse" href="#orderDetail-{{ $transaction->id_transaksi }}" role="button" aria-expanded="false"> Lihat </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="collapse" id="orderDetail-{{ $transaction->id_transaksi }}">
                                                        <div class="card card-body">
                                                            <section class="orderdetail-{{ $transaction->id_transaksi }}-content">
                                                                <div class="row">
                                                                    <div class="col-12 col-md-6">
                                                                        <h3>ID Pemesanan AGTA-{{ $transaction->id_transaksi }}</h3>
                                                                        <table class="table order-id">
                                                                            <tbody>
                                                                                <tr class="d-flex">
                                                                                    <td class="col-6 col-md-4">
                                                                                        <strong>Status</strong>
                                                                                    </td>
                                                                                    <td class="pending col-6 col-md-8" style="text-align: left !important;">
                                                                                        @if ($transaction->status == 0)
                                                                                            Bukti pembayaran sedang divalidasi
                                                                                        @elseif ($transaction->status == 1)
                                                                                            Bukti pembayaran tidak sesuai
                                                                                        @elseif ($transaction->status == 2)
                                                                                            Pesanan Dikirim
                                                                                        @elseif ($transaction->status == 3)
                                                                                            Pesanan Diterima, Silahkan beri ulasan
                                                                                        @elseif ($transaction->status == 4)
                                                                                            Pesanan Selesai
                                                                                        @elseif ($transaction->status == 5)
                                                                                            Pesanan Dibatalkan
                                                                                        @endif
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="d-flex">
                                                                                    <td class="col-6 col-md-4">
                                                                                        <strong>Tanggal Pemesanan</strong>
                                                                                    </td>
                                                                                    <td class="underline col-6 col-md-8">{{ date('d M Y', strtotime($transaction->created_at)) }}</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="col-12 col-md-6">
                                                                        <h3>Rincian Pengiriman</h3>
                                                                        <table class="table order-id">
                                                                            <tbody>
                                                                                <tr class="d-flex">
                                                                                    <td class="address col-12 col-md-12">
                                                                                        <strong>{{ $transaction->shipping_courier_name }} ({{ $transaction->shipping_service.' '.$transaction->shipping_etd.' Hari' }})</strong>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="d-flex">
                                                                                    <td class="address col-12 col-md-12">
                                                                                        <b>Nama : </b> {{ $transaction->user->name }}<br>
                                                                                        <b>Telepon : </b> {{ $transaction->user->phone }}<br>
                                                                                        <b>Alamat : </b> {{ $transaction->alamat }}, {{ $transaction->subdisctrict }}, {{ $transaction->city }}, {{ $transaction->province }}
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <table class="table orderdetail-{{ $transaction->id_transaksi }}-content top-table">
                                                                    <tbody>
                                                                        @foreach ($transaction['detail'] as $detail)
                                                                            <form action="{{ route('order.rating') }}" method="POST" enctype="multipart/form-data">
                                                                            @csrf
                                                                                <tr class="d-flex pb-0 mb-0 mt-3">
                                                                                    <td class="col-12 col-md-2">
                                                                                        {{-- <img class="img-fluid" src="{{ asset('photo/'.$detail->gambar_produk) }}" alt="Image"> --}}
                                                                                        <img class="img-fluid" src="{{ env('PRODUCT_PATH').$detail->gambar_produk }}" alt="Image">
                                                                                    </td>
                                                                                    <td class="col-12 col-md-3">
                                                                                        <div class="item-detail">
                                                                                            <span class="pro-category">{{ $detail->produk->nama_produk }}</span>
                                                                                            <h3>{{ $detail->model_produk->nama_model }} </h3>
                                                                                            <div class="item-attributes"></div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td class="col-12 col-md-2 item-price">Rp {{ number_format($detail->harga_produk) }}</td>
                                                                                    <td class="col-12 col-md-2">
                                                                                        <div class="input-group-control">
                                                                                            <input type="text" class="form-control" value="{{ $detail->jumlah_produk }}" readonly>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td class="col-12 col-md-3 item-total">Rp {{ number_format($detail->total_harga) }}</td>
                                                                                </tr>
                                                                                @if ($transaction->status > 2)
                                                                                    @if($detail->status_rating == false)
                                                                                        <tr class="mt-0 pt-0 ml-1 mr-1">
                                                                                            <td class="col-12 col-md-12 ml-3 mr-3">
                                                                                                <i id="star-{{ $detail->id_transaksi_detail }}-1" onclick="set1Star('{{ $detail->id_transaksi_detail }}')" type="button" style="color: #007aff;" class="far fa-2x fa-star mt-1"></i>
                                                                                                <i id="star-{{ $detail->id_transaksi_detail }}-2" onclick="set2Star('{{ $detail->id_transaksi_detail }}')" type="button" style="color: #007aff;" class="far fa-2x fa-star mt-1"></i>
                                                                                                <i id="star-{{ $detail->id_transaksi_detail }}-3" onclick="set3Star('{{ $detail->id_transaksi_detail }}')" type="button" style="color: #007aff;" class="far fa-2x fa-star mt-1"></i>
                                                                                                <i id="star-{{ $detail->id_transaksi_detail }}-4" onclick="set4Star('{{ $detail->id_transaksi_detail }}')" type="button" style="color: #007aff;" class="far fa-2x fa-star mt-1"></i>
                                                                                                <i id="star-{{ $detail->id_transaksi_detail }}-5" onclick="set5Star('{{ $detail->id_transaksi_detail }}')" type="button" style="color: #007aff;" class="far fa-2x fa-star mt-1"></i>

                                                                                                <input type="hidden" name="id_transaksi_detail" value="{{ $detail->id_transaksi_detail }}">
                                                                                                <input type="hidden" name="bintang" id="star-{{ $detail->id_transaksi_detail }}-bintang" value="0">
                                                                                                <input type="text" name="deskripsi" class="form-control ml-2 mr-2 mt-1" placeholder="Komentar anda...">

                                                                                                <button type="submit" class="btn btn-primary ml-2 mr-4" style="width: 100%; max-width: 150px;">Beri ulasan</button>
                                                                                            </td>
                                                                                        </tr>
                                                                                    @else
                                                                                        <tr class="mt-0 pt-0 ml-1 mr-1">
                                                                                            <td class="col-12 col-md-12 ml-3 mr-3">
                                                                                                @if($detail->bintang_rating == 0)
                                                                                                    <div>
                                                                                                        <i style="color: #007aff;" class="far fa-2x fa-star"></i>
                                                                                                        <i style="color: #007aff;" class="far fa-2x fa-star"></i>
                                                                                                        <i style="color: #007aff;" class="far fa-2x fa-star"></i>
                                                                                                        <i style="color: #007aff;" class="far fa-2x fa-star"></i>
                                                                                                        <i style="color: #007aff;" class="far fa-2x fa-star"></i>
                                                                                                    </div>
                                                                                                    <div></div>
                                                                                                @elseif($detail->bintang_rating == 1)
                                                                                                    <div>
                                                                                                        <i style="color: #007aff;" class="fas fa-2x fa-star"></i>
                                                                                                        <i style="color: #007aff;" class="far fa-2x fa-star"></i>
                                                                                                        <i style="color: #007aff;" class="far fa-2x fa-star"></i>
                                                                                                        <i style="color: #007aff;" class="far fa-2x fa-star"></i>
                                                                                                        <i style="color: #007aff;" class="far fa-2x fa-star"></i>
                                                                                                    </div>
                                                                                                    <div></div>
                                                                                                @elseif($detail->bintang_rating == 2)
                                                                                                    <div>
                                                                                                        <i style="color: #007aff;" class="fas fa-2x fa-star"></i>
                                                                                                        <i style="color: #007aff;" class="fas fa-2x fa-star"></i>
                                                                                                        <i style="color: #007aff;" class="far fa-2x fa-star"></i>
                                                                                                        <i style="color: #007aff;" class="far fa-2x fa-star"></i>
                                                                                                        <i style="color: #007aff;" class="far fa-2x fa-star"></i>
                                                                                                    </div>
                                                                                                    <div></div>
                                                                                                @elseif($detail->bintang_rating == 3)
                                                                                                    <div>
                                                                                                        <i style="color: #007aff;" class="fas fa-2x fa-star"></i>
                                                                                                        <i style="color: #007aff;" class="fas fa-2x fa-star"></i>
                                                                                                        <i style="color: #007aff;" class="fas fa-2x fa-star"></i>
                                                                                                        <i style="color: #007aff;" class="far fa-2x fa-star"></i>
                                                                                                        <i style="color: #007aff;" class="far fa-2x fa-star"></i>
                                                                                                    </div>
                                                                                                    <div></div>
                                                                                                @elseif($detail->bintang_rating == 4)
                                                                                                    <div>
                                                                                                        <i style="color: #007aff;" class="fas fa-2x fa-star"></i>
                                                                                                        <i style="color: #007aff;" class="fas fa-2x fa-star"></i>
                                                                                                        <i style="color: #007aff;" class="fas fa-2x fa-star"></i>
                                                                                                        <i style="color: #007aff;" class="fas fa-2x fa-star"></i>
                                                                                                        <i style="color: #007aff;" class="far fa-2x fa-star"></i>
                                                                                                    </div>
                                                                                                    <div></div>
                                                                                                @elseif($detail->bintang_rating == 5)
                                                                                                    <div>
                                                                                                        <i style="color: #007aff;" class="fas fa-2x fa-star"></i>
                                                                                                        <i style="color: #007aff;" class="fas fa-2x fa-star"></i>
                                                                                                        <i style="color: #007aff;" class="fas fa-2x fa-star"></i>
                                                                                                        <i style="color: #007aff;" class="fas fa-2x fa-star"></i>
                                                                                                        <i style="color: #007aff;" class="fas fa-2x fa-star"></i>
                                                                                                    </div>
                                                                                                    <div></div>
                                                                                                @endif
                                                                                            </td>
                                                                                            <td class="mt-0 pt-0">
                                                                                                {{ $detail->deskripsi_rating }}
                                                                                            </td>
                                                                                        </tr>
                                                                                    @endif
                                                                                @endif
                                                                            </form>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                                <div class="row justify-content-end mt-3">
                                                                    <div class="col-12">
                                                                        <div class="bill-total">
                                                                            <ul>
                                                                                <li>Harga Normal Produk : </li>
                                                                                <li>Ongkos Kirim : </li>
                                                                                <li class="text-danger">Total Harga : </li>
                                                                            </ul>
                                                                            <ul>
                                                                                <li>Rp {{ number_format($transaction->total_harga_produk) }}</li>
                                                                                <li id="ongkos-kirim">Rp {{ number_format($transaction->shipping_value) }}</li>
                                                                                <li id="total-harga" class="text-danger">Rp {{ number_format($transaction->total_harga) }}</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-12 col-md-6">
                                                                        <h3> Bukti Transfer </h3>
                                                                        <table class="table order-id">
                                                                            <tbody>
                                                                                <tr class="d-flex">
                                                                                    <td class="address col-12">
                                                                                        <a href="{{ asset('photo/'.$transaction->bukti_transfer) }}" target="_blank"><img src="{{ asset('photo/'.$transaction->bukti_transfer) }}" style="width: 100%;"></a>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="col-12 col-md-6">
                                                                        <h3> Catatan </h3>
                                                                        <table class="table order-id">
                                                                            <tbody>
                                                                                <tr class="d-flex">
                                                                                    <td class="address col-12">
                                                                                        <p>{{ $transaction->catatan ?? '-' }}</p>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                            @if ($transaction->status == 0)
                                                                <a onclick="return confirm('Apakah Anda yakin ingin membatalkan pesanan ini?')" href="{{ route('order.cancel', ['id' => $transaction->id_transaksi]) }}" class="btn btn-primary">Batalkan Pesanan</a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                        </section>
                                    </div>
                                    {{-- <div class="tab-pane fade show active" id="pills-shipping" role="tabpanel" aria-labelledby="pills-shipping-tab">
                                        <h3>Shipping address</h3>
                                        <form>
                                            <div class="form-row">
                                                <div class="from-group col-md-6 mb-3">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="inlineFormInputGroup026" placeholder="First Name">
                                                    </div>
                                                </div>
                                                <div class="from-group col-md-6 mb-3">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="inlineFormInputGroup1" placeholder="Last Name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="from-group col-md-6 mb-3">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="inlineFormInputGroup82" placeholder="Phone">
                                                    </div>
                                                </div>
                                                <div class="from-group col-md-6 mb-3">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="inlineFormInputGroup3" placeholder="Address">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="from-group col-md-6 mb-3">
                                                    <div class="input-group select-control">
                                                        <select class="form-control" id="inlineFormInputGroup4">
                                                            <option selected>Select Country</option>
                                                            <option value="1">USA</option>
                                                            <option value="2">Canada</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="from-group col-md-6 mb-3">
                                                    <div class="input-group select-control">
                                                        <select class="form-control" id="inlineFormInputGroup5">
                                                            <option selected>Select State</option>
                                                            <option value="1">New York</option>
                                                            <option value="2">Taxes</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="from-group col-md-6 mb-3">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="inlineFormInputGroup79" placeholder="City">
                                                    </div>
                                                </div>
                                                <div class="from-group col-md-6 mb-3">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="inlineFormInputGroup77" placeholder="Postal Code">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 justify-content-end btn-cont">
                                                <div class="row">
                                                    <a data-toggle="pill" href="#pills-billing" class="btn btn-secondary">Continue</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="pills-billing" role="tabpanel" aria-labelledby="pills-billing-tab">
                                        <h3>Billing Address</h3>
                                        <form>
                                            <div class="form-row">
                                                <div class="from-group col-md-6 mb-3">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="inlineFormInputGroup09" placeholder="First Name">
                                                    </div>
                                                </div>
                                                <div class="from-group col-md-6 mb-3">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="inlineFormInputGroup12" placeholder="Last Name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="from-group col-md-6 mb-3">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="inlineFormInputGroup8" placeholder="Phone">
                                                    </div>
                                                </div>
                                                <div class="from-group col-md-6 mb-3">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="inlineFormInputGroup34" placeholder="Address">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="from-group col-md-6 mb-3">
                                                    <div class="input-group select-control">
                                                        <select class="form-control" id="inlineFormInputGroup45">
                                                            <option selected>Select Country</option>
                                                            <option value="1">USA</option>
                                                            <option value="2">Canada</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="from-group col-md-6 mb-3">
                                                    <div class="input-group select-control">
                                                        <select class="form-control" id="inlineFormInputGroup56">
                                                            <option selected>Select State</option>
                                                            <option value="1">New York</option>
                                                            <option value="2">Taxes</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="from-group col-md-6 mb-3">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="inlineFormInputGroup70" placeholder="City">
                                                    </div>
                                                </div>
                                                <div class="from-group col-md-6 mb-3">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="inlineFormInputGroup78" placeholder="Postal Code">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-sm-12  justify-content-between btn-cont">
                                                    <div class="form-group">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck0">
                                                            <label class="form-check-label" for="defaultCheck0"> Same shipping and billing address. </label>
                                                            <small id="checkboxHelp1" class="form-text text-muted"></small>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a data-toggle="pill" href="#pills-shipping" class="btn btn-light">Back</a>
                                                        <a data-toggle="pill" href="#pills-method" class="btn btn-secondary">Continue</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="pills-method" role="tabpanel" aria-labelledby="pills-method-tab">
                                        <h3>Shipping Methods</h3>
                                        <p>Please select a prefered shipping method to use on this order</p>
                                        <div class="row">
                                            <div class="col-12 col-sm-6 mb-4">
                                                <h4>Flate Rate</h4>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"> Flat Rate --- $11 </label>
                                                    <small id="emailHelp" class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <h4>UPS Shipping</h4>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                                    <label class="form-check-label" for="defaultCheck2"> 24 hours --- $15 </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
                                                    <label class="form-check-label" for="defaultCheck3"> 48 hours --- $10 </label>
                                                </div>
                                                <div class="form-check mb-4">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck4">
                                                    <label class="form-check-label" for="defaultCheck4"> 48 hours --- $5 </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-lg-12 justify-content-end btn-cont">
                                                <a data-toggle="pill" href="#pills-billing" class="btn btn-light  cta">Back</a>
                                                <a data-toggle="pill" href="#pills-order" class="btn btn-secondary  cta">Continue</a>
                                            </div>
                                        </div>
                                    </div> --}}
                                    {{-- <div class="tab-pane fade" id="pills-order" role="tabpanel" aria-labelledby="pills-order-tab">
                                        <table class="table top-table">
                                            <tbody>
                                                <tr class="d-flex">
                                                    <td class="col-12 col-md-2">
                                                        <img class="img-fluid" src="images/product_images/product_image_1.jpg" alt="Imagetag">
                                                    </td>
                                                    <td class="col-12 col-md-4">
                                                        <div class="item-detail">
                                                            <span class="pro-category">Decore, Furniture</span>
                                                            <h3>Modren Single Sofa </h3>
                                                            <div class="item-attributes"></div>
                                                        </div>
                                                    </td>
                                                    <td class="col-12 col-md-1 item-price">$385</td>
                                                    <td class="col-12 col-md-3 justify-content-center">
                                                        <div class="input-group-control">
                                                            <input type="text" id="quantity1" name="quantity" class="form-control" value="10" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="col-12 col-md-2 item-total">$700</td>
                                                </tr>
                                                <tr class="d-flex">
                                                    <td class="col-12 col-md-2">
                                                        <img class="img-fluid" src="images/product_images/product_image_2.jpg" alt="Imagetag">
                                                    </td>
                                                    <td class="col-12 col-md-4">
                                                        <div class="item-detail">
                                                            <span class="pro-category">Decore, Furniture</span>
                                                            <h3>Modren Wood Chair </h3>
                                                            <div class="item-attributes"></div>
                                                        </div>
                                                    </td>
                                                    <td class="col-12 col-md-1 item-price">$385</td>
                                                    <td class="col-12 col-md-3 justify-content-center">
                                                        <div class="input-group-control">
                                                            <input type="text" id="quantity2" name="quantity" class="form-control" value="10" readonly>
                                                        </div>
                                                    </td>
                                                    <td class="col-12 col-md-2 item-total">$700</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="row justify-content-end">
                                            <div class="col-12">
                                                <div class="bill-total">
                                                    <ul>
                                                        <li>Subtotal</li>
                                                        <li>Shipping</li>
                                                        <li>Discount(Coupon)</li>
                                                        <li class="text-danger">Total</li>
                                                    </ul>
                                                    <ul>
                                                        <li>$50</li>
                                                        <li>$100</li>
                                                        <li>$50</li>
                                                        <li class="text-danger">$100</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12">
                                            <div class="row">
                                                <div class="heading">
                                                    <h4>Order Notes</h4>
                                                </div>
                                                <div class="form-group" style="width:100%; padding:0;">
                                                    <label for="exampleFormControlTextarea1">Please write notes of your order</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12">
                                            <div class="row">
                                                <div class="heading">
                                                    <h4>Payment Methods</h4>
                                                </div>
                                                <ul class="payement-way">
                                                    <li>
                                                        <!-- Default checked -->
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input" id="defaultChecked" name="defaultExampleRadios" checked>
                                                            <label class="custom-control-label" for="defaultChecked">
                                                                <img src="images/miscellaneous/instamojo.png" alt="Image">
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <!-- Default unchecked -->
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input" id="defaultUnchecked1" name="defaultExampleRadios">
                                                            <label class="custom-control-label" for="defaultUnchecked1">
                                                                <img src="images/miscellaneous/hyperpay.png" alt="Image">
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input" id="defaultUnchecked2" name="defaultExampleRadios">
                                                            <label class="custom-control-label" for="defaultUnchecked2">
                                                                <img src="images/miscellaneous/cod.png" alt="Image">
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input" id="defaultUnchecked3" name="defaultExampleRadios">
                                                            <label class="custom-control-label" for="defaultUnchecked3">
                                                                <img src="images/miscellaneous/stripe.png" alt="Image">
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input" id="defaultUnchecked4" name="defaultExampleRadios">
                                                            <label class="custom-control-label" for="defaultUnchecked4">
                                                                <img src="images/miscellaneous/paypal.png" alt="Image">
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 justify-content-end btn-cont">
                                            <div class="row">
                                                <a href="thankyou.html" class="btn btn-secondary">Place Order</a>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script>
        function set1Star(id){
            if($('#star-'+id+'-1').hasClass('far')){
                $('#star-'+id+'-1').removeClass("far").addClass('fas')
                $('#star-'+id+'-2').removeClass("fas").addClass('far')
                $('#star-'+id+'-3').removeClass("fas").addClass('far')
                $('#star-'+id+'-4').removeClass("fas").addClass('far')
                $('#star-'+id+'-5').removeClass("fas").addClass('far')
                $('#star-'+id+'-bintang').val(1)
            }else if($('#star-'+id+'-1').hasClass('fas')){
                $('#star-'+id+'-1').removeClass("fas").addClass('far')
                $('#star-'+id+'-2').removeClass("fas").addClass('far')
                $('#star-'+id+'-3').removeClass("fas").addClass('far')
                $('#star-'+id+'-4').removeClass("fas").addClass('far')
                $('#star-'+id+'-5').removeClass("fas").addClass('far')
                $('#star-'+id+'-bintang').val(0)
            }
        }

        function set2Star(id){
            if($('#star-'+id+'-1').hasClass('far')){
                $('#star-'+id+'-1').removeClass("far").addClass('fas')
                $('#star-'+id+'-2').removeClass("far").addClass('fas')
                $('#star-'+id+'-3').removeClass("fas").addClass('far')
                $('#star-'+id+'-4').removeClass("fas").addClass('far')
                $('#star-'+id+'-5').removeClass("fas").addClass('far')
                $('#star-'+id+'-bintang').val(2)
            }else if($('#star-'+id+'-1').hasClass('fas')){
                $('#star-'+id+'-1').removeClass("fas").addClass('far')
                $('#star-'+id+'-2').removeClass("fas").addClass('far')
                $('#star-'+id+'-3').removeClass("fas").addClass('far')
                $('#star-'+id+'-4').removeClass("fas").addClass('far')
                $('#star-'+id+'-5').removeClass("fas").addClass('far')
                $('#star-'+id+'-bintang').val(0)
            }
        }

        function set3Star(id){
            if($('#star-'+id+'-1').hasClass('far')){
                $('#star-'+id+'-1').removeClass("far").addClass('fas')
                $('#star-'+id+'-2').removeClass("far").addClass('fas')
                $('#star-'+id+'-3').removeClass("far").addClass('fas')
                $('#star-'+id+'-4').removeClass("fas").addClass('far')
                $('#star-'+id+'-5').removeClass("fas").addClass('far')
                $('#star-'+id+'-bintang').val(3)
            }else if($('#star-'+id+'-1').hasClass('fas')){
                $('#star-'+id+'-1').removeClass("fas").addClass('far')
                $('#star-'+id+'-2').removeClass("fas").addClass('far')
                $('#star-'+id+'-3').removeClass("fas").addClass('far')
                $('#star-'+id+'-4').removeClass("fas").addClass('far')
                $('#star-'+id+'-5').removeClass("fas").addClass('far')
                $('#star-'+id+'-bintang').val(0)
            }
        }

        function set4Star(id){
            if($('#star-'+id+'-1').hasClass('far')){
                $('#star-'+id+'-1').removeClass("far").addClass('fas')
                $('#star-'+id+'-2').removeClass("far").addClass('fas')
                $('#star-'+id+'-3').removeClass("far").addClass('fas')
                $('#star-'+id+'-4').removeClass("far").addClass('fas')
                $('#star-'+id+'-5').removeClass("fas").addClass('far')
                $('#star-'+id+'-bintang').val(4)
            }else if($('#star-'+id+'-1').hasClass('fas')){
                $('#star-'+id+'-1').removeClass("fas").addClass('far')
                $('#star-'+id+'-2').removeClass("fas").addClass('far')
                $('#star-'+id+'-3').removeClass("fas").addClass('far')
                $('#star-'+id+'-4').removeClass("fas").addClass('far')
                $('#star-'+id+'-5').removeClass("fas").addClass('far')
                $('#star-'+id+'-bintang').val(0)
            }
        }

        function set5Star(id){
            if($('#star-'+id+'-1').hasClass('far')){
                $('#star-'+id+'-1').removeClass("far").addClass('fas')
                $('#star-'+id+'-2').removeClass("far").addClass('fas')
                $('#star-'+id+'-3').removeClass("far").addClass('fas')
                $('#star-'+id+'-4').removeClass("far").addClass('fas')
                $('#star-'+id+'-5').removeClass("far").addClass('fas')
                $('#star-'+id+'-bintang').val(5)
            }else if($('#star-'+id+'-1').hasClass('fas')){
                $('#star-'+id+'-1').removeClass("fas").addClass('far')
                $('#star-'+id+'-2').removeClass("fas").addClass('far')
                $('#star-'+id+'-3').removeClass("fas").addClass('far')
                $('#star-'+id+'-4').removeClass("fas").addClass('far')
                $('#star-'+id+'-5').removeClass("fas").addClass('far')
                $('#star-'+id+'-bintang').val(0)
            }
        }

    </script>
@endsection
