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
                                        <a class="nav-link active" id="pills-info-tab" data-toggle="pill" href="#pills-info" role="tab" aria-controls="pills-info" aria-selected="false">Informasi Toko</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-lg-9">
                            <div class="checkout-module">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="pills-info" role="tabpanel" aria-labelledby="pills-info-tab">
                                        <section class="order-content">
                                            <div class="row m-0">
                                                <a target="_blank" href="{{ $setting->link_shopee }}" class="btn shadow mb-2 ml-2 mr-2" style="border-radius: 10px;"><img src="{{ asset('photo/shopee.png') }}" style="width: 100%; max-width: 100px;"></a>
                                                <a target="_blank" href="{{ $setting->link_whatsapp }}" class="btn shadow mb-2 ml-2 mr-2" style="border-radius: 10px;"><img src="{{ asset('photo/wa.png') }}" style="width: 100%; max-width: 100px;"></a>
                                                <a target="_blank" href="{{ $setting->link_tentang_kami }}" class="btn shadow mb-2 ml-2 mr-2" style="border-radius: 10px;"><img src="{{ asset('photo/info.png') }}" style="width: 100%; max-width: 100px;"></a>
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
