<header id="headerOne" class="header-area header-one header-desktop">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12 col-lg-7">
				<div class="logo">
					<a href="{{ url('/') }}">
						<img class="img-fluid" src="{{ asset('photo/logo.png') }}" style="width: 100%; max-width: 125px;" alt="logo here">
					</a>
				</div>
			</div>
			<div class="col-12 col-lg-5 d-flex justify-content-end">
				<ul class="pro-header-right-options">
					<li class="dropdown search-field">
						<button class="btn btn-light dropdown-toggle" type="button" id="dropdownAccountButton31" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-search"></i>
						</button>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownAccountButton31">
							<form action="{{ route('produk', ['kategori' => $kategori ?? 'Semua', 'urutkan' => $urutkan ?? 'Terbaru', 'keyword' => 'null']) }}" method="GET">
                            @csrf
								<div class="search-field-module">
                                    @php
                                        $keyword = $keyword ?? null;
                                    @endphp
									<input type="text" class="form-control" name="keyword" value="{{ $keyword == 'null' ? '' : $keyword }}" placeholder="Cari Produk">
									<button class="btn" type="submit">
										<i class="fas fa-search"></i>
									</button>
								</div>
							</form>
						</div>
					</li>
                    <li class="dropdown">
                        <a href="{{ route('info') }}" class="btn btn-light dropdown-toggle"><i class="fas fa-store"></i></a>
					</li>
                    <li class="dropdown">
                        <a href="{{ route('rating') }}" class="btn btn-light dropdown-toggle"><i class="far fa-star"></i></a>
					</li>
                    <li class="dropdown">
                        <a href="{{ route('blog') }}" class="btn btn-light dropdown-toggle"><i class="fab fa-blogger-b"></i></a>
					</li>
					<li class="dropdown profile-tags">
						<button class="btn btn-light dropdown-toggle" type="button" id="dropdownAccountButton42" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-user"></i>
						</button>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownAccountButton42">
                            @auth
                                <a href="{{ route('akun') }}" class="main-manu btn ">Akun</a>
                                <a href="{{ route('order') }}" class="main-manu btn ">Pesanan</a>
                                <a href="{{ route('logout') }}" class="main-manu btn ">Logout</a>
                            @else
                                <a class="dropdown-item" href="{{ route('login.perform') }}">Masuk</a>
                                <a class="dropdown-item" href="{{ route('register.perform') }}">Daftar</a>
                            @endauth
						</div>
					</li>
                    <li class="dropdown">
                        @auth
                            <a href="{{ route('cart') }}" class="btn btn-light dropdown-toggle">
                                <i class="fas fa-shopping-bag"></i>
                                <span class="badge badge-secondary">{{ \DB::table('transaction_detail')->whereIdUser(auth()->user()->id_user ?? 0)->whereNull('id_transaksi')->count() }}</span>
                            </a>
                        @endauth
					</li>
				</ul>
			</div>
		</div>
	</div>
</header>
<header id="stickyHeader" class="header-area header-sticky d-none  bg-sticky-bar pt-2 pb-2">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12 col-lg-7">
				<div class="logo">
					<a href="{{ url('/') }}">
						<img class="img-fluid" src="{{ asset('photo/logo.png') }}" style="width: 100%; max-width: 125px;" alt="logo here">
					</a>
				</div>
			</div>
			<div class="col-12 col-lg-5 d-flex justify-content-end">
				<ul class="pro-header-right-options">
					<li class="dropdown search-field">
						<button class="btn btn-light dropdown-toggle" type="button" id="dropdownAccountButton31" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-search"></i>
						</button>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownAccountButton31">
							<form action="{{ route('produk', ['kategori' => $kategori ?? 'Semua', 'urutkan' => $urutkan ?? 'Terbaru', 'keyword' => 'null']) }}" method="GET">
                            @csrf
								<div class="search-field-module">
                                    @php
                                        $keyword = $keyword ?? null;
                                    @endphp
									<input type="text" class="form-control" name="keyword" value="{{ $keyword == 'null' ? '' : $keyword }}" placeholder="Cari Produk">
									<button class="btn" type="submit">
										<i class="fas fa-search"></i>
									</button>
								</div>
							</form>
						</div>
					</li>
                    <li class="dropdown">
                        <a href="{{ route('info') }}" class="btn btn-light dropdown-toggle"><i class="fas fa-store"></i></a>
					</li>
                    <li class="dropdown">
                        <a href="{{ route('rating') }}" class="btn btn-light dropdown-toggle"><i class="far fa-star"></i></a>
					</li>
                    <li class="dropdown">
                        <a href="{{ route('blog') }}" class="btn btn-light dropdown-toggle"><i class="fab fa-blogger-b"></i></a>
					</li>
					<li class="dropdown profile-tags">
						<button class="btn btn-light dropdown-toggle" type="button" id="dropdownAccountButton42" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-user"></i>
						</button>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownAccountButton42">
                            @auth
                                <a href="{{ route('akun') }}" class="main-manu btn ">Akun</a>
                                <a href="{{ route('order') }}" class="main-manu btn ">Pesanan</a>
                                <a href="{{ route('logout') }}" class="main-manu btn ">Logout</a>
                            @else
                                <a class="dropdown-item" href="{{ route('login.perform') }}">Masuk</a>
                                <a class="dropdown-item" href="{{ route('register.perform') }}">Daftar</a>
                            @endauth
						</div>
					</li>
                    <li class="dropdown">
                        @auth
                            <a href="{{ route('cart') }}" class="btn btn-light dropdown-toggle">
                                <i class="fas fa-shopping-bag"></i>
                                <span class="badge badge-secondary">{{ \DB::table('transaction_detail')->whereIdUser(auth()->user()->id_user ?? 0)->whereNull('id_transaksi')->count() }}</span>
                            </a>
                        @endauth
					</li>
				</ul>
			</div>
		</div>
	</div>
</header>

<header id="headerMobile" class="header-area header-mobile">
	<div class="header-maxi bg-header-bar ">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-6 pr-0 flex-col">
					<div class="navigation-mobile-container">
						<a href="javascript:void(0)" class="navigation-mobile-toggler">
							<span class="fas fa-bars"></span>
						</a>
						<nav id="navigation-mobile">
							<a href="{{ url('/') }}" class="main-manu btn">Home</a>
							<a href="{{ route('info') }}" class="main-manu btn">Info Toko</a>
							<a href="{{ route('rating') }}" class="main-manu btn">Rating</a>
							<a href="{{ route('blog') }}" class="main-manu btn">Blog</a>
                            @auth
                                <a href="{{ route('akun') }}" class="main-manu btn">Akun</a>
                                <a href="{{ route('cart') }}" class="main-manu btn">Keranjang</a>
                                <a href="{{ route('order') }}" class="main-manu btn">Pesanan</a>
                                <a href="{{ route('logout') }}" class="main-manu btn">Logout</a>
                            @else
                                <a href="{{ route('login.perform') }}" class="main-manu btn">Masuk</a>
                                <a href="{{ route('register.perform') }}" class="main-manu btn">Daftar</a>
                            @endif
						</nav>
					</div>
					<a href="{{ url('/') }}" class="logo">
						<img class="img-fluid" src="{{ asset('photo/logo.png') }}" style="width: 100%; max-width: 125px;" alt="logo here">
					</a>
				</div>
				<div class="col-6 pl-0">
					<ul class="pro-header-right-options"></ul>
				</div>
			</div>
		</div>
	</div>
	<div class="header-navbar bg-menu-bar">
		<div class="container">
            <form class="form-inline" action="{{ route('produk', ['kategori' => $kategori ?? 'Semua', 'urutkan' => $urutkan ?? 'Terbaru', 'keyword' => 'null']) }}" method="GET">
            @csrf
				<div class="search-field-module">
                    @php
                        $keyword = $keyword ?? null;
                    @endphp
					<div class="search-field-wrap">
						<input type="text" class="form-control" name="keyword" value="{{ $keyword == 'null' ? '' : $keyword }}" placeholder="Cari Produk">
						<button type="submit" class="btn btn-secondary">
							<i class="fa fa-search"></i>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</header>
