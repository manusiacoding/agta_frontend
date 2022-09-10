<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>AGTA Local & Import</title>
		<meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed nibh vel tellus tincidunt molestie. Ut in libero ac elit pharetra auctor a eget nunc.">
		<meta name="keywords" content="HTML,CSS,XML,JavaScript">
		<meta name="author" content="">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="icon" type="image/png" href="{{ asset('photo/logo.png') }}">
		<!-- Fontawesome CSS Files -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<!-- Core CSS Files -->
		<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
		<!-- Slider Revolution CSS Files -->
		<link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/settings.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/layers.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/navigation.css') }}">
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
        <style>
            .footer-one {
                background-color: white;
                padding: 60px 0 0 0;
                margin: 60px 0 0 0;
            }
            .rounded{
                border-radius: 10px;
            }
            .chat-button{
                width:50px;
                height:50px;
                position:fixed;
                bottom:20px;
                right:20px;
                z-index:100;
            }
            .image-upload>input {
                display: none;
            }
        </style>
	</head>
	<body>
        @include('layouts.partials.navbar')
        @yield('content')
        @yield('shop')
        @yield('cart')
        @yield('check')
        @yield('code')

        <footer id="footerOne" class="footer-area footer-one footer-desktop">
            <div class="container-fluid p-0">
                <div class="copyright-content">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-12">
                                {{-- <div class="footer-info"> ©&nbsp;{{ date('Y') }} AGTA. <a href="privacy.html">Privacy</a>&nbsp;•&nbsp; <a href="term.html">Terms</a> --}}
                                <div class="footer-info"> ©&nbsp;{{ date('Y') }} AGTA Local & Import. All rights reserved</div>
                            </div>
                            {{-- <div class="col-12 col-md-6">
                                <ul class="socials">
                                    <li>
                                        <a href="#" class="fab fb fa-facebook-square"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fab tw fa-twitter-square"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fab sk fa-skype"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fab In fa-linkedin"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fab ig fa-instagram"></a>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <div class="mobile-overlay"></div>
        <!-- Product Modal -->
        <div class="modal fade" id="quickViewModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="container">
                            <div class="row ">
                                <div class="col-12 col-md-6">
                                    <div class="row ">
                                        <div id="quickViewCarousel" class="carousel slide" data-ride="carousel">
                                            <!-- The slideshow -->
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    {{-- <img class="img-fluid" src="images/gallery/preview/Product_image_01.jpg" alt="image"> --}}
                                                </div>
                                                <div class="carousel-item">
                                                    {{-- <img class="img-fluid" src="images/gallery/preview/Product_image_02.jpg" alt="image"> --}}
                                                </div>
                                                <div class="carousel-item">
                                                    {{-- <img class="img-fluid" src="images/gallery/preview/Product_image_03.jpg" alt="image"> --}}
                                                </div>
                                                <div class="carousel-item">
                                                    {{-- <img class="img-fluid" src="images/gallery/preview/Product_image_04.jpg" alt="image"> --}}
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#quickViewCarousel" data-slide="prev">
                                                <span class="fas fa-angle-left "></span>
                                            </a>
                                            <a class="carousel-control-next" href="#quickViewCarousel" data-slide="next">
                                                <span class="fas fa-angle-right "></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 pro-description">
                                    <div class="row">
                                        <div class="col-12 col-md-12">
                                            <div class="badges">
                                                <div class="badge badge-success">New</div>
                                                <div class="badge badge-info"> Featured </div>
                                                <div class="badge badge-danger"> Sale </div>
                                                <div class="badge badge-dark"> Out Of Stock </div>
                                            </div>
                                            <h3>Luxerious Bed </h3>
                                            <div class="pro-price">
                                                <ins>$358</ins>
                                                <del>$192</del>
                                            </div>
                                            <div class="pro-rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <a href="#review" class="btn-link">2 reviews</a>
                                            </div>
                                            <div class="pro-info">
                                                <div class="pro-single-info">
                                                    <b>Product ID :</b>
                                                    <span>1004</span>
                                                </div>
                                                <div class="pro-single-info">
                                                    <b>Categroy :</b>
                                                    <span>
                                                        <a href="#">Furniture</a>
                                                    </span>
                                                </div>
                                                <div class="pro-single-info">
                                                    <b>Tags :</b>
                                                    <ul>
                                                        <li>
                                                            <a href="#">Beds</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Chair</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Sofa</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="pro-single-info">
                                                    <b>Available :</b>
                                                    <span class="text-secondary">InStock</span>
                                                </div>
                                                <div class="pro-single-info">
                                                    <b>Min Order Limit :</b>
                                                    <span>
                                                        <a href="#">5</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="pro-options">
                                                <div class="color-option">
                                                    <b>Color : </b>
                                                    <ul class="product-model">
                                                        <li class="active">
                                                            <a class="green" href="javascript:void(0);"></a>
                                                        </li>
                                                        <li>
                                                            <a class="red" href="javascript:void(0);"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="size-option">
                                                    <b>Size : </b>
                                                    <ul class="product-model1">
                                                        <li class="active">
                                                            <a class="size-select" href="javascript:void(0);"> XS </a>
                                                        </li>
                                                        <li>
                                                            <a class="size-select" href="javascript:void(0);"> S </a>
                                                        </li>
                                                        <li>
                                                            <a class="size-select" href="javascript:void(0);">M</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="pro-quantiy">
                                                <div class="input-group-control">
                                                    <input type="text" id="quantity1" name="quantity" class="form-control" maxlength="2" value="10" size="2">
                                                    <span class="input-group-btn">
                                                        <button type="button" value="quantity1" class="quantity-plus1 btn btn-outline-secondary" data-type="plus" data-field="">
                                                            <i class="fas fa-plus"></i>
                                                        </button>
                                                        <button type="button" value="quantity1" class="quantity-minus1 btn btn-outline-secondary" data-type="minus" data-field="">
                                                            <i class="fas fa-minus"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                                <button type="button" class="btn btn-secondary btn-lg" onclick="notificationCart();">Add to Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <button class="switch btn btn-secondary btn-sm d-none" data-switch-dark>Dark</button>

        <i id="chat" class="far fa-comment-alt fa-2x chat-button" type="button" onclick="stopMyInterval()" data-toggle="modal" data-target="#chatModal"  style="background-color: black; color:white; padding: 11px; border-radius: 50%;"></i>

        <div class="modal fade" id="chatModal" tabindex="-1" role="dialog" aria-labelledby="chatModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="chatModalLabel">Chat</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="height: auto; max-height: 500px; overflow: auto;">
                        <div class="row" id="chats">
                            @auth
                                @foreach (\DB::table('transactions')->whereIdUser(auth()->user()->id_user)->whereIn('status', [4,5])->latest()->get() as $transaction)
                                    <div class="col-1 p-0 m-0">
                                        <img src="{{ asset('photo/logo.png') }}" style="width: 100%; margin-left: 10px;">
                                    </div>
                                    <div class="col-11 pl-4">
                                        <p class="p-2" style="background-color:rgb(230, 230, 230); border-radius: 5px;">
                                            <span style="color: #007aff;" class="font-weight-bold">
                                                ID Pesanan : AGTA-{{ $transaction->id_transaksi }} <br>

                                                Status :
                                                @if ($transaction->status == 4)
                                                    Pesanan Selesai
                                                @elseif ($transaction->status == 5)
                                                    Pesanan Dibatalkan
                                                @endif
                                            </span>
                                        </p>
                                    </div>
                                @endforeach

                                @if (\DB::table('transactions')->whereIdUser(auth()->user()->id_user)->whereIn('status', [4,5])->count() > 0)
                                    <div class="col-12 mb-4">
                                        <center>
                                            <a href="{{ url('order') }}" class="btn btn-primary">Lihat Pesanan</a>
                                        </center>
                                    </div>
                                @endif

                                @foreach (\DB::table('chats')->whereIdPenerima(auth()->user()->id_user)->orWhere('id_pengirim', auth()->user()->id_user)->orderBy('id_chat', 'ASC')->get() as $chat)
                                    @if($chat->id_pengirim == auth()->user()->id_user)
                                        @if($chat->tipe == 0)
                                            <div class="col-1 p-0 m-0">
                                                &nbsp;
                                            </div>
                                            <div class="col-11 pl-4">
                                                <p class="p-2" style="background-color:#007aff; color:white; border-radius: 5px;">{{ $chat->pesan }}</p>

                                            </div>
                                            <div class="col-12 text-right" style="margin-top: -15px;">
                                                {{-- {{ date('d M Y H:i', strtotime($chat->created_at)) }} --}}
                                            </div>
                                            <br>
                                        @else
                                            <div class="col-1 p-0 m-0">
                                                &nbsp;
                                            </div>
                                            <div class="col-11 pl-4">
                                                <p class="p-2" style="background-color:#007aff; color:white; border-radius: 5px;">
                                                    <img src="{{ asset('photo/'.$chat->pesan) }}" style="width: 100%;">
                                                </p>
                                            </div>
                                            <div class="col-12 text-right" style="margin-top: -15px;">
                                                {{-- {{ date('d M Y H:i', strtotime($chat->created_at)) }} --}}
                                            </div>
                                            <br>
                                        @endif
                                    @else
                                        @if($chat->tipe == 0)
                                            <div class="col-1 p-0 m-0">
                                                <img src="{{ asset('photo/logo.png') }}" style="width: 100%; margin-left: 10px;">
                                            </div>
                                            <div class="col-11 pl-4">
                                                <p class="p-2" style="background-color:rgb(230, 230, 230); border-radius: 5px;">{{ $chat->pesan }}</p>
                                            </div>
                                            <div class="col-1 p-0 m-0">
                                                &nbsp;
                                            </div>
                                            <div class="col-11 text-left pl-4" style="margin-top: -15px;">
                                                {{-- {{ date('d M Y H:i', strtotime($chat->created_at)) }} --}}
                                            </div>
                                            <br>
                                        @else
                                            <div class="col-1 p-0 m-0">
                                                <img src="{{ asset('photo/logo.png') }}" style="width: 100%; margin-left: 10px;">
                                            </div>
                                            <div class="col-11 pl-4">
                                                <p class="p-2" style="background-color:rgb(230, 230, 230); border-radius: 5px;">
                                                    <img src="{{ 'https://dashboard.agtastore.com/chats/'.$chat->pesan }}" style="width: 100%;">
                                                </p>
                                            </div>
                                            <div class="col-12 text-left" style="margin-top: -15px;">
                                                {{-- {{ date('d M Y H:i', strtotime($chat->created_at)) }} --}}
                                            </div>
                                            <div class="col-1 p-0 m-0">
                                                &nbsp;
                                            </div>
                                            <div class="col-11 text-left pl-4" style="margin-top: -15px;">
                                                {{-- {{ date('d M Y H:i', strtotime($chat->created_at)) }} --}}
                                            </div>
                                            <br>
                                        @endif
                                    @endif
                                @endforeach
                            @endauth
                        </div>
                    </div>
                    <div class="container mb-1">
                        @auth
                            <form id="kirim-pesan" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="row">
                                    <div class="col-10 mt-2 m-0 p-0">
                                        <center>
                                            <input type="text" class="form-control mt-1 ml-4" id="pesan" placeholder="Tulis pesan.." autocomplete="off" style="width: 90%;" required>
                                        </center>
                                    </div>
                                    <div class="col-2 mt-2 m-0 p-0">
                                        <center>
                                            <div class="image-upload">
                                                <label for="file-input">
                                                    <i class="far fa-3x fa-image" style="color: #007aff;"></i>
                                                </label>
                                                <input id="file-input" name="pesan_gambar" type="file" onchange="storeImage(event)" />
                                            </div>
                                        </center>
                                    </div>
                                </div>
                            </form>
                        @else
                            <center>
                                <a href="{{ url('login') }}" class="btn btn-primary mb-4">Login</a>
                            </center>
                        @endauth
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
		<!-- All custom scripts here -->
		<script src="{{ asset('js/scripts.js') }}"></script>
		<!-- Slider Revolution core JavaScript files -->
		<script src="{{ asset('revolution/js/jquery.themepunch.tools.min.js') }}"></script>
		<script src="{{ asset('revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
		<!-- Slider Revolution extension scripts. ONLY NEEDED FOR LOCAL TESTING -->
		<script src="{{ asset('revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
		<script src="{{ asset('revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
		<script src="{{ asset('revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
		<script src="{{ asset('revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
		<script src="{{ asset('revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
		<script src="{{ asset('revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
		<script src="{{ asset('revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
		<script src="{{ asset('revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
		<script src="{{ asset('revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        @if(session('success'))
            <script>
                swal.fire({
                    title: 'Success!',
                    text: "{{ session('success') }}",
                    icon: 'success',
                    confirmButtonColor: 'black',
                })
            </script>
        @endif

        @if(session('failed'))
            <script>
                swal.fire({
                    title: 'Error!',
                    text: "{{ session('failed') }}",
                    icon: 'warning',
                    confirmButtonColor: 'black',
                })
            </script>
        @endif

        <script>
            const myInterval = setInterval(openChat, 1);

            function openChat(){
                document.getElementById('chats').scrollIntoView({block: 'end' });
            }

            function stopMyInterval() {
                setTimeout(function() {
                    clearInterval(myInterval);
                }, 200);
            }

            function storeImage(event){
                $("#kirim-pesan").ajaxSubmit({
                    url: "{{ route('chat.store-image') }}",
                    type: 'POST',
                    success: function(data) {
                        $('#chats').append(
                            '<div class="col-1 p-0 m-0">'+
                                '&nbsp;'+
                            '</div>'+
                            '<div class="col-11 pl-4">'+
                                '<p class="p-2" style="background-color:#007aff; color:white; border-radius: 5px;">'+
                                    '<img src="'+URL.createObjectURL(event.target.files[0])+'" style="width: 100%;">'+
                                '</p>'+
                            '</div>'
                        )
                        document.getElementById('chats').scrollIntoView({ behavior: 'smooth', block: 'end' });
                    }
                })
            }

            $("#kirim-pesan").submit(function( event ) {
                $.ajax({
                    type: 'POST',
                    _token: "{{ csrf_token() }}",
                    url: "{{ route('chat.store-text') }}",
                    data: {
                        'pesan': $('#pesan').val(),
                    },
                    success: function(result){
                        $('#chats').append(
                            '<div class="col-1 p-0 m-0">'+
                                '&nbsp;'+
                            '</div>'+
                            '<div class="col-11 pl-4">'+
                                '<p class="p-2" style="background-color:#007aff; color:white; border-radius: 5px;">'+$('#pesan').val()+'</p>'+
                            '</div>'
                        )
                        $("#pesan").val('')
                        document.getElementById('chats').scrollIntoView({ behavior: 'smooth', block: 'end' });
                    }
                });
                event.preventDefault();
            });
        </script>

        @yield('js')
	</body>
</html>
