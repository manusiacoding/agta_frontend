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
                                        <a class="nav-link active" id="pills-info-tab" data-toggle="pill" href="#pills-info" role="tab" aria-controls="pills-info" aria-selected="false">Blog</a>
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
                                                    @foreach ($blogs as $blog)
                                                        <div class="col-12 col-lg-12 ">
                                                            <div class="row">
                                                                <div class="col-12 col-md-12">
                                                                    <div class="blog">
                                                                        <div class="blog-thumb">
                                                                            {{-- <img class="img-fluid" src="{{ asset('https://dashboard.agtastore.com/blogs/'.$blog->gambar) }}" style="width: 100%;" alt="Blog-Image"> --}}
                                                                            <img class="img-fluid" src="{{ env('BLOG_PATH').$blog->gambar }}" style="width: 100%;" alt="Blog-Image">
                                                                        </div>
                                                                        <div class="blog-info">
                                                                            <br>
                                                                            <div class="blog-meta">
                                                                                <a><i class="far fa-calendar-alt"></i> {{ date('d M Y', strtotime($blog->created_at)) }} </a>
                                                                            </div>
                                                                            <br>
                                                                            <p>{!! $blog->deskripsi !!}</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
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
