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
                                        <a class="nav-link active" id="pills-cart-tab" data-toggle="pill" href="#pills-cart" role="tab" aria-controls="pills-cart" aria-selected="false">Keranjang</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-lg-9">
                            <div class="checkout-module">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="pills-cart" role="tabpanel" aria-labelledby="pills-cart-tab">
                                        @if (count($transaction_details) > 0)
                                            <form action="{{ route('cart.update') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                                <div class="heading">
                                                    <h4>Produk</h4>
                                                </div>
                                                <table class="table top-table">
                                                    <tbody>
                                                        @foreach ($transaction_details as $td)
                                                            <tr class="d-flex">
                                                                <td class="col-12 col-md-2">
                                                                    {{-- <img class="img-fluid" src="{{ asset('photo/'.$td->gambar_produk) }}" alt="Imagetag"> --}}
                                                                    <img class="img-fluid" src="{{ env('PRODUCT_PATH').$td->gambar_produk }}" alt="Imagetag">
                                                                </td>
                                                                <td class="col-12 col-md-3">
                                                                    <div class="item-detail">
                                                                        <span class="pro-category">{{ $td->produk->nama_produk }}</span>
                                                                        <h3>{{ $td->nama_model }} </h3>
                                                                        <div class="item-attributes"></div>
                                                                    </div>
                                                                </td>
                                                                <td class="col-12 col-md-2 item-price">Rp {{ number_format($td->harga_produk) }}</td>
                                                                <td class="col-12 col-md-2 justify-content-center">
                                                                    <div class="input-group-control">
                                                                        <input type="hidden" name="id_model_produk[]" value="{{ $td->id_model_produk }}">
                                                                        <input type="number" min="0" max="{{ $td['model_produk']['stok_produk'] }}" name="jumlah_model_produk[]" class="form-control" value="{{ $td->jumlah_produk }}" required>
                                                                    </div>
                                                                </td>
                                                                <td class="col-12 col-md-2 font-weight-bold" style="font-size: 18px;">Rp {{ number_format($td->total_harga) }}</td>
                                                                <td class="col-12 col-md-1">
                                                                    <a href="{{ route('cart.delete', ['id' => $td->id_transaksi_detail]) }}" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fa fa-times fa-2x"></i></a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                <div class="col-12 col-sm-12 justify-content-end btn-cont">
                                                    <div class="row">
                                                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <form action="{{ route('cart.checkout') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                                <div class="heading">
                                                    <h4>Metode Pengiriman</h4>
                                                </div>
                                                <table class="table top-table">
                                                    <tbody>
                                                        <tr class="d-flex">
                                                            <td class="col-2 col-md-1">
                                                                <input onclick="numberWithCommas('{{ $setting->harga_kurir_agta_sameday }}')" class="form-control ml-4" type="radio" name="pengiriman" value="agtas,Kurir Agta Sameday,{{ $setting->service_kurir_agta_sameday }},,{{ $setting->harga_kurir_agta_sameday }},{{ $setting->estimasi_kurir_agta_sameday }}," style="width: 25px;" required>
                                                            </td>
                                                            <td class="col-10 col-md-2">
                                                                <img class="img-fluid" src="{{ asset('photo/logo.png') }}" style="height: 100%; background-color: white;">
                                                            </td>
                                                            <td class="col-12 col-md-7">
                                                                <div class="item-detail pt-3">
                                                                    <span class="pro-category">Kurir Agta Sameday</span>
                                                                    <h3>{{ $setting->service_kurir_agta_sameday }} ({{ $setting->estimasi_kurir_agta_sameday }} Hari)</h3>
                                                                    <div class="item-attributes"></div>
                                                                </div>
                                                            </td>
                                                            <td class="col-12 col-md-2 item-total">Rp {{ number_format($setting->harga_kurir_agta_sameday) }}</td>
                                                        </tr>
                                                        <tr class="d-flex">
                                                            <td class="col-2 col-md-1">
                                                                <input onclick="numberWithCommas('{{ $setting->harga_kurir_agta_cargo }}')" class="form-control ml-4" type="radio" name="pengiriman" value="agtac,Kurir Agta Cargo,{{ $setting->service_kurir_agta_cargo }},,{{ $setting->harga_kurir_agta_cargo }},{{ $setting->estimasi_kurir_agta_cargo }}," style="width: 25px;" required>
                                                            </td>
                                                            <td class="col-10 col-md-2">
                                                                <img class="img-fluid" src="{{ asset('photo/logo.png') }}" style="height: 100%; background-color: white;">
                                                            </td>
                                                            <td class="col-12 col-md-7">
                                                                <div class="item-detail pt-3">
                                                                    <span class="pro-category">Kurir Agta Cargo</span>
                                                                    <h3>{{ $setting->service_kurir_agta_cargo }} ({{ $setting->estimasi_kurir_agta_cargo }} Hari)</h3>
                                                                    <div class="item-attributes"></div>
                                                                </div>
                                                            </td>
                                                            <td class="col-12 col-md-2 item-total">Rp {{ number_format($setting->harga_kurir_agta_cargo) }}</td>
                                                        </tr>
                                                        @foreach ($shippings['rajaongkir']['results'] as $shipping)
                                                            @foreach ($shipping['costs'] as $cost)
                                                                <tr class="d-flex">
                                                                    <td class="col-2 col-md-1">
                                                                        <input onclick="numberWithCommas('{{ $cost['cost'][0]['value'] }}')" class="form-control ml-4" type="radio" name="pengiriman" value="{{ $shipping['code'] }},{{ $shipping['name'] }},{{ $cost['service'] }},{{ $cost['description'] }},{{ $cost['cost'][0]['value'] }},{{ $cost['cost'][0]['etd'] }},{{ $cost['cost'][0]['note'] }}" style="width: 25px;" required>
                                                                    </td>
                                                                    <td class="col-10 col-md-2">
                                                                        @if($shipping['code'] == 'jne')
                                                                            <img class="img-fluid" src="{{ asset('photo/jne.png') }}" style="height: 100%; background-color: white;">
                                                                        @elseif($shipping['code'] == 'wahana')
                                                                            <img class="img-fluid" src="{{ asset('photo/wahana.png') }}" style="height: 100%; background-color: white;">
                                                                        @elseif($shipping['code'] == 'J&T')
                                                                            <img class="img-fluid" src="{{ asset('photo/jnt.png') }}" style="height: 100%; background-color: white;">
                                                                        @elseif($shipping['code'] == 'lion')
                                                                            <img class="img-fluid" src="{{ asset('photo/lion.png') }}" style="height: 100%; background-color: white;">
                                                                        @elseif($shipping['code'] == 'anteraja')
                                                                            <img class="img-fluid" src="{{ asset('photo/anteraja.png') }}" style="height: 100%; background-color: white;">
                                                                        @endif
                                                                    </td>
                                                                    <td class="col-12 col-md-7">
                                                                        <div class="item-detail pt-3">
                                                                            <span class="pro-category">{{ $shipping['name'] }}</span>
                                                                            <h3>{{ $cost['service'] }} ({{ $cost['cost'][0]['etd'] }} Hari)</h3>
                                                                            <div class="item-attributes"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="col-12 col-md-2 item-total">Rp {{ number_format($cost['cost'][0]['value']) }}</td>
                                                                </tr>
                                                            @endforeach
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                <div class="heading">
                                                    <h4>Ringkasan Pembelanjaan</h4>
                                                </div>
                                                <div class="row justify-content-end">
                                                    <div class="col-12">
                                                        <div class="bill-total">
                                                            <ul>
                                                                <li>Harga Normal Produk : </li>
                                                                <li>Ongkos Kirim : </li>
                                                                <li class="text-danger">Total Harga : </li>
                                                            </ul>
                                                            <ul>
                                                                <li>Rp {{ number_format($total_harga) }}</li>
                                                                <li id="ongkos-kirim">Rp 0</li>
                                                                <li id="total-harga" class="text-danger">Rp {{ number_format($total_harga) }}</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="heading">
                                                    <h4>Bukti Transfer</h4>
                                                    <h4>Dana    : 081617772013</h4>
                                                    <h4>Mandiri : 9000012667052</h4>
                                                    <h4>BCA : 8692222236</h4>
                                                    <h4>A.N AKHMAD RHAMDANI</h4>
                                                </div>
                                                <input type="file" class="form-control" name="bukti_transfer" required>
                                                <br>
                                                <br>
                                                <div class="col-12 col-sm-12 justify-content-end btn-cont">
                                                    <div class="row">
                                                        <button type="submit" class="btn btn-primary">Pesan Sekarang</button>
                                                    </div>
                                                </div>
                                            </form>
                                        @else
                                            <div class="tab-pane fade show active heading" id="pills-cart" role="tabpanel" aria-labelledby="pills-cart-tab">
                                                <center>
                                                    <h4>Belum ada produk</h4>
                                                </center>
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

@section('js')
    <script>
        function numberWithCommas(x){
            result = x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            total_harga = parseInt("{{ $total_harga }}")+parseInt(x);
            total_harga = total_harga.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
            $('#ongkos-kirim').text('Rp '+result)
            $('#total-harga').text('Rp '+total_harga)
        }
    </script>
@endsection
