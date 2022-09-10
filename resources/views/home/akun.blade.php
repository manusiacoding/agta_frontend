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
                                        <a class="nav-link active" id="pills-order-tab" data-toggle="pill" href="#pills-order" role="tab" aria-controls="pills-order" aria-selected="false">Akun</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-lg-9">
                            <div class="checkout-module">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="pills-order" role="tabpanel" aria-labelledby="pills-order-tab">
                                        <section class="order-content">
                                            <form action="{{ route('akun.update') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                                <div class="from-group mb-3">
                                                    <label class="ml-3">Nama</label>
                                                    <div class="input-group col-12">
                                                        <input type="text" name="name" class="form-control" placeholder="Masukkan nama anda" value="{{ auth()->user()->name }}" required>
                                                    </div>
                                                </div>
                                                <div class="from-group mb-3">
                                                    <label class="ml-3">Username</label>
                                                    <div class="input-group col-12">
                                                        <input type="text" class="form-control" placeholder="Masukkan username anda" value="{{ auth()->user()->username }}" readonly required>
                                                    </div>
                                                </div>
                                                <div class="from-group mb-3">
                                                    <label class="ml-3">Email</label>
                                                    <div class="input-group col-12">
                                                        <input type="text" class="form-control" placeholder="Masukkan email anda" value="{{ auth()->user()->email }}" readonly required>
                                                    </div>
                                                </div>
                                                <div class="from-group mb-3">
                                                    <label class="ml-3">Password</label>
                                                    <div class="input-group col-12">
                                                        <input type="password" name="password" class="form-control">
                                                    </div>
                                                    <div class="ml-3">
                                                        <i>Kosongkan jika tidak ingin mengganti password</i>
                                                    </div>
                                                </div>
                                                <div class="from-group mb-3">
                                                    <label class="ml-3">Telepon</label>
                                                    <div class="input-group col-12">
                                                        <input type="text" name="phone" class="form-control" placeholder="Masukkan telepon anda" value="{{ auth()->user()->phone }}" required>
                                                    </div>
                                                </div>
                                                <div class="from-group mb-3">
                                                    <label class="ml-3">Provinsi</label>
                                                    <div class="input-group col-12">
                                                        <select id="province" name="id_province" class="form-control" required>
                                                            <option value="" selected disabled>Pilih provinsi</option>
                                                            @foreach ($provinces as $province)
                                                                <option value="{{ $province->id }}" @if($province->id == auth()->user()->id_province) selected @endif>{{ $province->province }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="from-group mb-3">
                                                    <label class="ml-3">Kota</label>
                                                    <div class="input-group col-12">
                                                        <select id="city" name="id_city" class="form-control" required>
                                                            @foreach ($citys as $city)
                                                                <option value="{{ $city->id }}" @if($city->id == auth()->user()->id_city) selected @endif>{{ $city->city }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="from-group mb-3">
                                                    <label class="ml-3">Kecamatan</label>
                                                    <div class="input-group col-12">
                                                        <select id="subdistrict" name="id_subdistrict" class="form-control" required>
                                                            @foreach ($subdistricts as $subdistrict)
                                                                <option value="{{ $subdistrict->id }}" @if($subdistrict->id == auth()->user()->id_subdistrict) selected @endif>{{ $subdistrict->subdistrict }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="from-group mb-3">
                                                    <label class="ml-3">Alamat</label>
                                                    <div class="input-group col-12">
                                                        <textarea name="address" class="form-control" rows="5" placeholder="Masukkan alamat anda">{{ auth()->user()->address }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-12 text-right">
                                                    <button class="btn btn-primary">Simpan</button>
                                                </div>
                                            </form>
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

@section('js')
    <script>
        $('#province').on('change', function(){
            $('#city').html('')
            $('#subdistrict').html('')

            $('#city').append('<option value="" selected disabled>Pilih kota</option>')
            $.get("{{ url('') }}/city/"+this.value, function(data, status){
                $.each(data, function( i, val ) {
                    $('#city').append('<option value="'+val.id+'">'+val.city+'</option>')
                });
            });
        });

        $('#city').on('change', function(){
            $('#subdistrict').html('')

            $('#subdistrict').append('<option value="" selected disabled>Pilih kecamatan</option>')
            $.get("{{ url('/') }}/subdistrict/"+this.value, function(data, status){
                $.each(data, function( i, val ) {
                    $('#subdistrict').append('<option value="'+val.id+'">'+val.subdistrict+'</option>')
                });
            });
        });
    </script>
@endsection

