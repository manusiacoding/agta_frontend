@extends('layouts.app-master')

@section('content')
    <div class="wrapper" style="display: none;">
        <div class="container-fuild">
            <div class="page-header" style="background-color: white;">
                <div class="container">
                    <h1 class="page-title">Daftar</h1>
                </div>
            </div>
        </div>
        <section class="pro-content account-content mt-0 pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-lg-6">
                        <img src="{{ asset('photo/logo.png') }}" style="width: 100%; margin-top:50%;">
                    </div>
                    <div class="col-12 col-sm-12 col-lg-6">
                        <div class="registration-process">
                            <form action="{{ route('register.perform') }}" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <div class="from-group mb-3">
                                    <label class="ml-3">Nama</label>
                                    <div class="input-group col-12">
                                        <input type="text" name="name" class="form-control" placeholder="Masukkan nama anda" value="{{ old('nama') }}" required>
                                    </div>
                                </div>
                                <div class="from-group mb-3">
                                    <label class="ml-3">Username</label>
                                    <div class="input-group col-12">
                                        <input type="text" name="username" class="form-control" placeholder="Masukkan username anda" value="{{ old('username') }}" required>
                                    </div>
                                </div>
                                <div class="from-group mb-3">
                                    <label class="ml-3">Email</label>
                                    <div class="input-group col-12">
                                        <input type="text" name="email" class="form-control" placeholder="Masukkan email anda" value="{{ old('email') }}" required>
                                    </div>
                                </div>
                                <div class="from-group mb-3">
                                    <label class="ml-3">Password</label>
                                    <div class="input-group col-12">
                                        <input type="password" name="password" class="form-control" placeholder="Masukkan password anda" required>
                                    </div>
                                </div>
                                <div class="from-group mb-3">
                                    <label class="ml-3">Telepon</label>
                                    <div class="input-group col-12">
                                        <input type="text" name="phone" class="form-control" placeholder="Masukkan telepon anda" value="{{ old('phone') }}" required>
                                    </div>
                                </div>
                                <div class="from-group mb-3">
                                    <label class="ml-3">Provinsi</label>
                                    <div class="input-group col-12">
                                        <select id="province" name="id_province" class="form-control" required>
                                            <option value="" selected disabled>Pilih provinsi</option>
                                            @foreach ($provinces as $province)
                                                <option value="{{ $province->id }}">{{ $province->province }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="from-group mb-3">
                                    <label class="ml-3">Kota</label>
                                    <div class="input-group col-12">
                                        <select id="city" name="id_city" class="form-control" required></select>
                                    </div>
                                </div>
                                <div class="from-group mb-3">
                                    <label class="ml-3">Kecamatan</label>
                                    <div class="input-group col-12">
                                        <select id="subdistrict" name="id_subdistrict" class="form-control" required></select>
                                    </div>
                                </div>
                                <div class="from-group mb-3">
                                    <label class="ml-3">Alamat</label>
                                    <div class="input-group col-12">
                                        <textarea name="address" class="form-control" rows="5" placeholder="Masukkan alamat anda">{{ old('address') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12">
                                    <center>
                                        <button class="btn btn-primary" style="width: 48%">Daftar</button>
                                        <a href="{{ route('login.show') }}" class="btn btn-primary" style="width: 48%">Masuk</a>
                                    </center>
                                </div>
                            </form>
                        </div>
                        <div class="col-12 col-sm-12">
                            <div class="registration-socials">
                                <div class="col-12 col-sm-12">
                                    <center>
                                        <a href="{{ url('/') }}" class="btn btn-primary" style="width: 90%;">Home</a>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="mobile-overlay"></div>
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
