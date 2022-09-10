@extends('layouts.app-master')

@section('content')
    <div class="wrapper" style="display: none;">
        <div class="container-fuild">
            <div class="page-header" style="background-color: white;">
                <div class="container">
                    <h1 class="page-title">Login</h1>
                </div>
            </div>
        </div>
        <section class="pro-content account-content mt-0 pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-lg-6">
                        <img src="{{ asset('photo/logo.png') }}" style="width: 100%;">
                    </div>
                    <div class="col-12 col-sm-12 col-lg-6">
                        <div class="registration-process">
                            <form action="{{ route('login.perform') }}" method="post">
                            @csrf
                                <div class="from-group mb-3">
                                    <div class="input-group col-12">
                                        <input type="text" name="username" class="form-control" placeholder="Masukkan username anda" value="{{ old('username') }}" required>
                                    </div>
                                </div>
                                <div class="from-group mb-3">
                                    <div class="input-group col-12">
                                        <input type="password" name="password" class="form-control" placeholder="Masukkan password anda" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12">
                                    <center>
                                        <button class="btn btn-primary" style="width: 48%">Masuk</button>
                                        <a href="{{ route('register.show') }}" class="btn btn-primary" style="width: 48%">Daftar</a>
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
