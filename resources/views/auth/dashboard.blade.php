@extends('layouts.app-master')
  <div class="wrapper" style="display: none;">
    <!-- //header style One-->
    <header id="headerOne" class="header-area header-one header-desktop">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-12 col-lg-2">
                  <div class="logo">
                      <a href="index.html" >
                        <img class="img-fluid" src="images/logo/logo2.png" alt="logo here">
                      </a>
                    </div>
              </div>
              <div class="col-12 col-lg-5">
                  <nav class="navbar navbar-expand-lg">
                      <div class="navbar-collapse" >
                        <ul class="navbar-nav">
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#">
                              Home
                            </a>
                            <div class="dropdown-menu">
                                <div class="dropdown-submenu">
                                    <a class="dropdown-item" href="index.html">1- Furniture
                                      <img src="./images/miscellaneous/home1.jpg" alt="home-1">
                                    </a>

                                  </div>
                                  <div class="dropdown-submenu">
                                      <a class="dropdown-item" href="index-2.html">2- Fashion
                                        <img src="./images/miscellaneous/home2.jpg" alt="home-2">
                                      </a>

                                    </div>
                                    <div class="dropdown-submenu">
                                        <a class="dropdown-item" href="index-3.html">3- Electronics
                                          <img src="./images/miscellaneous/home3.jpg" alt="home-3">
                                        </a>

                                      </div>
                                      <div class="dropdown-submenu">
                                        <a class="dropdown-item" href="index-4.html">4- Grocery
                                          <img src="./images/miscellaneous/home4.jpg" alt="home-4">
                                        </a>

                                      </div>
                                      <div class="dropdown-submenu">
                                        <a class="dropdown-item" href="index-5.html">5- Cosmetics
                                          <img src="./images/miscellaneous/home5.jpg" alt="home-5">
                                        </a>
                                      </div>
                                      <div class="dropdown-submenu">
                                        <a class="dropdown-item" href="index-6.html">6- Shoes
                                          <img src="./images/miscellaneous/home6.jpg" alt="home-6">
                                        </a>
                                      </div>
                                      <div class="dropdown-submenu">
                                        <a class="dropdown-item" href="index-7.html">7- Glasses
                                          <img src="./images/miscellaneous/home7.jpg" alt="home-7">
                                        </a>
                                      </div>
                                      <div class="dropdown-submenu">
                                        <a class="dropdown-item" href="index-8.html">8- Flowers
                                          <img src="./images/miscellaneous/home8.jpg" alt="home-8">
                                        </a>
                                      </div>
                                      <div class="dropdown-submenu">
                                        <a class="dropdown-item" href="index-9.html">9- Jewelry
                                          <img src="./images/miscellaneous/home9.jpg" alt="home-9">
                                        </a>
                                      </div>
                            </div>
                          </li>

                          <li class="nav-item">
                            <a class="nav-link" href="/shop" >
                              Product
                            </a>
                          </li>
                          <!-- Login dan sign up komputer -->
                        </ul>
                      </div>
                    </nav>
              </div>
              <div class="col-12 col-lg-5 d-flex justify-content-end">
                  <ul class="pro-header-right-options">

                        <li class="dropdown search-field">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownAccountButton31" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownAccountButton31">
                                <form>
                                    <div class="search-field-module">
                                        <input type="text" class="form-control" id="inlineFormInputGroup01" placeholder="Search Products">
                                        <button class="btn" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                  </form>

                            </div>
                          </li>
                      <li class="dropdown profile-tags">
                        <button class="btn btn-light dropdown-toggle" type="button" id="dropdownAccountButton42" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownAccountButton42">
                          <p>belum login</p>
                          <a class="dropdown-item" href="/login">Login</a>
                          <a class="dropdown-item" href="/register">Register</a>
                          <hr>
                          <p>sudah login</p>
                          <a class="dropdown-item" href="/dashboard">Dashboard</a>
                          <a class="dropdown-item" href="/logout">Logout</a>

                        </div>
                      </li>

                      <li class="dropdown">
                        <button class="btn btn-light dropdown-toggle" type="button" id="dropdownCartButton16" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-shopping-bag"></i>
                          <span class="badge badge-secondary">2</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownCartButton16">
                            <ul class="shopping-cart-items">
                              <li>
                                <div class="item-thumb">

                                  <div class="image">
                                    <img class="img-fluid" src="images/product_images/product_image_1.jpg" alt="Product Image">
                                  </div>
                                </div>
                                <div class="item-detail">
                                    <h3>Modern Single Sofa</h3>
                                    <div class="item-s">1 x $45.00 <i class="fas fa-trash"></i></div>
                                </div>
                              </li>
                              <li>
                                <div class="item-thumb">

                                  <div class="image">
                                    <img class="img-fluid" src="images/product_images/product_image_3.jpg" alt="Product Image">
                                  </div>
                                </div>
                                <div class="item-detail">
                                    <h3>Modern Wood Chair</h3>
                                    <span class="item-s">2 x $90.00 <i class="fas fa-trash"></i></span>
                                </div>
                              </li>
                              <li>
                                  <span class="item-summary">Total&nbsp;:&nbsp;<span>$145.00</span>
                                  </span>
                              </li>
                              <li>
                                  <a class="btn btn-link btn-block " href="/cart-page">View Cart</a>
                                  <a class="btn btn-secondary btn-block  " href="/checkout">Checkout</a>
                              </li>
                            </ul>


                        </div>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
    </header>

        <!-- //Sticky Header -->
    <header id="stickyHeader" class="header-area header-sticky d-none  bg-sticky-bar" >
      <div class="container">

        <div class="row align-items-center">
            <div class="col-12 col-lg-2">
                <div class="logo">
                    <a href="index.html" >
                      <img class="img-fluid" src="images/logo/logo2.png" alt="logo here">
                    </a>
                  </div>
            </div>
            <div class="col-12 col-lg-5">
                <nav class="navbar navbar-expand-lg">
                    <div class="navbar-collapse" >
                      <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#">
                            Home
                          </a>
                          <div class="dropdown-menu">
                            <div class="dropdown-submenu">
                                <a class="dropdown-item" href="index.html">1- Furniture
                                  <img src="./images/miscellaneous/home1.jpg" alt="home-1">
                                </a>

                              </div>
                              <div class="dropdown-submenu">
                                  <a class="dropdown-item" href="index-2.html">2- Fashion
                                    <img src="./images/miscellaneous/home2.jpg" alt="home-2">
                                  </a>

                                </div>
                                <div class="dropdown-submenu">
                                    <a class="dropdown-item" href="index-3.html">3- Electronics
                                      <img src="./images/miscellaneous/home3.jpg" alt="home-3">
                                    </a>

                                  </div>
                                  <div class="dropdown-submenu">
                                    <a class="dropdown-item" href="index-4.html">4- Grocery
                                      <img src="./images/miscellaneous/home4.jpg" alt="home-4">
                                    </a>

                                  </div>
                                  <div class="dropdown-submenu">
                                    <a class="dropdown-item" href="index-5.html">5- Cosmetics
                                      <img src="./images/miscellaneous/home5.jpg" alt="home-5">
                                    </a>
                                  </div>
                                  <div class="dropdown-submenu">
                                    <a class="dropdown-item" href="index-6.html">6- Shoes
                                      <img src="./images/miscellaneous/home6.jpg" alt="home-6">
                                    </a>
                                  </div>
                                  <div class="dropdown-submenu">
                                    <a class="dropdown-item" href="index-7.html">7- Glasses
                                      <img src="./images/miscellaneous/home7.jpg" alt="home-7">
                                    </a>
                                  </div>
                                  <div class="dropdown-submenu">
                                    <a class="dropdown-item" href="index-8.html">8- Flowers
                                      <img src="./images/miscellaneous/home8.jpg" alt="home-8">
                                    </a>
                                  </div>
                                  <div class="dropdown-submenu">
                                    <a class="dropdown-item" href="index-9.html">9- Jewelry
                                      <img src="./images/miscellaneous/home9.jpg" alt="home-9">
                                    </a>
                                  </div>
                          </div>
                        </li>

                        <li class="nav-item">
                          <a class="nav-link" href="/shop" >
                            Product
                          </a>
                        </li>
                        <!-- Pages login dan sign up -->
                      </ul>
                    </div>
                  </nav>
            </div>
            <div class="col-12 col-lg-5 d-flex justify-content-end">
                <ul class="pro-header-right-options">

                      <li class="dropdown search-field">
                          <button class="btn btn-light dropdown-toggle" type="button" id="dropdownAccountButton34" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-search"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownAccountButton34">
                              <form>
                                  <div class="search-field-module">
                                      <input type="text" class="form-control" id="inlineFormInputGroup0" placeholder="Search Products">
                                      <button class="btn" type="submit">
                                          <i class="fas fa-search"></i>
                                      </button>
                                  </div>
                                </form>

                          </div>
                        </li>
                    <li class="dropdown profile-tags">
                      <button class="btn btn-light dropdown-toggle" type="button" id="dropdownAccountButton45" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-user"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownAccountButton45">
                        <p>belum login</p>
                        <a class="dropdown-item" href="/login">Login</a>
                        <a class="dropdown-item" href="/register">Register</a>
                        <hr>
                        <p>sudah login</p>
                        <a class="dropdown-item" href="/dashboard">Dashboard</a>
                        <a class="dropdown-item" href="/logout">Logout</a>

                      </div>
                    </li>

                    <li class="dropdown">
                      <button class="btn btn-light dropdown-toggle" type="button" id="dropdownCartButton18" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-shopping-bag"></i>
                        <span class="badge badge-secondary">2</span>
                      </button>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownCartButton18">
                          <ul class="shopping-cart-items">
                            <li>
                              <div class="item-thumb">

                                <div class="image">
                                  <img class="img-fluid" src="images/product_images/product_image_1.jpg" alt="Product Image">
                                </div>
                              </div>
                              <div class="item-detail">
                                  <h3>Modern Single Sofa</h3>
                                  <div class="item-s">1 x $45.00 <i class="fas fa-trash"></i></div>
                              </div>
                            </li>
                            <li>
                              <div class="item-thumb">

                                <div class="image">
                                  <img class="img-fluid" src="images/product_images/product_image_3.jpg" alt="Product Image">
                                </div>
                              </div>
                              <div class="item-detail">
                                  <h3>Modern Wood Chair</h3>
                                  <span class="item-s">2 x $90.00 <i class="fas fa-trash"></i></span>
                              </div>
                            </li>
                            <li>
                                <span class="item-summary">Total&nbsp;:&nbsp;<span>$145.00</span>
                                </span>
                            </li>
                            <li>
                                <a class="btn btn-link btn-block " href="/cart-page">View Cart</a>
                                <a class="btn btn-secondary btn-block  " href="/checkout">Checkout</a>
                            </li>
                          </ul>


                      </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </header>
      <!-- //Mobile Header -->
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
                      <div class="logout-main">
                          <div class="welcome">
                              <span>Welcome&nbsp;Guest !</span>
                          </div>
                      </div>

                      <a class="main-manu btn" data-toggle="collapse" href="#homepages" role="button"
                      aria-expanded="false" aria-controls="shoppages">
                          Home

                      </a>
                      <div class="sub-manu collapse multi-collapse" id="homepages">
                          <ul class="unorder-list">
                            <li class="">
                              <a href="index.html" class="btn main-manu">
                                1- Furniture
                              </a>
                              <a href="index-2.html" class="btn main-manu">
                                2- Fashion
                              </a>
                              <a href="index-3.html" class="btn main-manu">
                                3- Electronics
                              </a>
                              <a href="index-4.html" class="btn main-manu">
                                4- Grocery
                            </a>
                            <a href="index-5.html" class="btn main-manu">
                              5- Cosmetics
                            </a>
                            <a href="index-6.html" class="btn main-manu">
                              6- Shoes
                            </a>
                            <a href="index-7.html" class="btn main-manu">
                              7- Glasses
                            </a>
                            <a href="index-8.html" class="btn main-manu">
                              8- Flowers
                            </a>
                            <a href="index-9.html" class="btn main-manu">
                              9- Jewelry
                            </a>
                            </li>
                          </ul>
                      </div>
                      <a class=" main-manu btn" href="/shop" role="button" aria-expanded="false" aria-controls="productpages">
                        Product
                      </a>
                        <a class=" main-manu btn" data-toggle="collapse" href="#staticpages" role="button" aria-expanded="false" aria-controls="staticpages">
                            Pages

                        </a>
                        <div class="sub-manu collapse multi-collapse" id="staticpages">
                          <ul class="unorder-list">
                              <li class="">
                                <a class="main-manu btn " data-toggle="collapse" href="#staticabout" role="button" aria-expanded="false" aria-controls="staticabout">
                                    About
                                </a>
                                <div class="sub-manu1 collapse multi-collapse" id="staticabout">
                                  <ul class="unorder-list">
                                      <li class="">
                                        <a href="about-page1.html" class="btn main-manu">
                                          About Page 1
                                        </a>
                                        <a href="about-page2.html" class="btn main-manu">
                                            About Page 2
                                          </a>
                                      </li>
                                  </ul>
                                </div>


                                <a class="main-manu btn " data-toggle="collapse" href="#staticcontact" role="button" aria-expanded="false" aria-controls="staticcontact">
                                    Contact

                                </a>
                                <div class="sub-manu1 collapse multi-collapse" id="staticcontact">
                                  <ul class="unorder-list">
                                      <li class="">
                                        <a href="contact-page1.html" class="btn main-manu">
                                          Contact Page 1
                                        </a>
                                        <a href="contact-page2.html" class="btn main-manu">
                                          Contact Page 2
                                        </a>
                                      </li>
                                  </ul>
                                </div>

                                <a class="main-manu btn" data-toggle="collapse" href="#staticlogin" role="button" aria-expanded="false" aria-controls="staticlogin">
                                  Login

                                </a>
                                <div class="sub-manu1 collapse multi-collapse" id="staticlogin">
                                  <ul class="unorder-list">
                                      <li class="">
                                        <a href="login-page1.html" class="btn main-manu">
                                          Login Page 1
                                        </a>
                                        <a href="login-page2.html" class="btn main-manu">
                                          Login Page 2
                                        </a>
                                      </li>
                                  </ul>
                                </div>

                                <a class="main-manu btn " data-toggle="collapse" href="#staticblog" role="button" aria-expanded="false" aria-controls="staticblog">
                                    Blogs

                                </a>
                                <div class="sub-manu1 collapse multi-collapse" id="staticblog">
                                  <ul class="unorder-list">
                                      <li class="">
                                        <a href="blog-page1.html" class="btn main-manu">
                                          Blog Page 1
                                        </a>
                                        <a href="blog-page2.html" class="btn main-manu">
                                            Blog Page 2
                                        </a>
                                        <a class="btn main-manu" href="blog-single-page.html">Blog Single</a>
                                      </li>
                                  </ul>
                                </div>

                                <a class="main-manu btn " data-toggle="collapse" href="#staticcart" role="button" aria-expanded="false" aria-controls="staticcart">
                                    Shopping Cart

                                </a>
                                <div class="sub-manu1 collapse multi-collapse" id="staticcart">
                                  <ul class="unorder-list">
                                      <li class="">
                                        <a href="cart-page1.html" class="btn main-manu">
                                          Cart Page 1
                                        </a>
                                        <a href="cart-page2.html" class="btn main-manu">
                                          Cart Page 2
                                        </a>
                                      </li>
                                  </ul>
                                </div>

                                <a href="/checkout" class="main-manu btn ">
                                  Checkout
                                </a>

                              </li>
                          </ul>
                        </div>

                        <a href="/dashboard" class="main-manu btn ">
                            My Account
                          </a>
                          <a href="/logout" class="main-manu btn ">
                              Logout
                            </a>
                  </nav>
              </div>
              <a href="index.html" class="logo">
                  <img class="img-fluid" src="images/logo/logo2.png" alt="logo here">
                </a>
              </div>



              <div class="col-6 pl-0">
                <ul class="pro-header-right-options">

                <li class="dropdown">
                  <button class="btn btn-light dropdown-toggle" type="button" id="dropdownCartButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-shopping-bag"></i>
                    <span class="badge badge-secondary">2</span>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownCartButton2">
                      <ul class="shopping-cart-items">
                        <li>
                          <div class="item-thumb">

                            <div class="image">
                              <img class="img-fluid" src="images/product_images/product_image_1.jpg" alt="Product Image">
                            </div>
                          </div>
                          <div class="item-detail">
                              <h3>Modern Single Sofa</h3>
                              <div class="item-s">1 x $45.00 <i class="fas fa-trash"></i></div>
                          </div>
                        </li>
                        <li>
                          <div class="item-thumb">

                            <div class="image">
                              <img class="img-fluid" src="images/product_images/product_image_2.jpg" alt="Product Image">
                            </div>
                          </div>
                          <div class="item-detail">
                              <h3>Modern Wood Chair</h3>
                              <span class="item-s">2 x $90.00 <i class="fas fa-trash"></i></span>
                          </div>
                        </li>
                        <li>
                            <span class="item-summary">Total&nbsp;:&nbsp;<span>$145.00</span>
                            </span>
                        </li>
                        <li>
                            <a class="btn btn-link btn-block " href="/cart-page">View Cart</a>
                            <a class="btn btn-secondary btn-block  " href="/checkout">Checkout</a>
                        </li>
                      </ul>


                  </div>
                </li>
            </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="header-navbar bg-menu-bar">
          <div class="container">
            <form class="form-inline">
                <div class="search-field-module">

                    <div class="search-field-wrap">
                        <input  type="search" placeholder="Search Products..." data-toggle="tooltip" data-placement="bottom" title="search item">
                        <button class="btn btn-secondary swipe-to-top" data-toggle="tooltip" data-placement="bottom" title="Search Products">
                        <i class="fa fa-search"></i></button>
                    </div>
                  </div>
            </form>
          </div>
        </div>
    </header>


<!-- Page Header -->
<div class="container-fuild">
  <div class="page-header" style="background-image: url('images/miscellaneous/page-header.png')">
    <div class="container">
      <h1 class="page-title">Dashboard<span>Introduce Yourself</span></h1>
    </div><!-- End .container -->
  </div>
  <nav aria-label="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </div>
  </nav>


</div>
<!-- Dashbord Content -->
<div class="pro-content checkout-area">

<div class="container">
  <div class="row">
      <div class="col-12 col-xl-12">
          <div class="row">
              <div class="col-12 col-lg-3 ">
               <div class="checkoutd-nav">
                  <ul class="nav flex-column nav-pills mb-3" id="pills-tab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link  active" id="pills-shipping-tab" data-toggle="pill"
                        href="#pills-shipping" role="tab" aria-controls="pills-shipping"
                        aria-selected="true">Profile</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " id="pills-billing-tab" data-toggle="pill"
                        href="#pills-billing" role="tab" aria-controls="pills-billing"
                        aria-selected="false">Orders</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " id="pills-method-tab" data-toggle="pill"
                        href="#pills-method" role="tab" aria-controls="pills-method"
                        aria-selected="false">Shipping Addresses</a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link " id="pills-order-tab" data-toggle="pill"
                          href="#pills-order" role="tab" aria-controls="pills-order"
                          aria-selected="false">Logout</a>
                        </li>
                    </ul>
               </div>

            </div>
            <div class="col-12 col-lg-9">
                <div class="checkout-module">


                    <div class="tab-content" >
                      <div class="tab-pane fade show active" id="pills-shipping" role="tabpanel" aria-labelledby="pills-shipping-tab">

                      <!-- Profile Content -->
                      <section class="profile-content">
                              <div class="heading-title">
                                  <h2> Personal Information
                                  </h2>
                                  <p>Lorem ipsum dolor sit amet, consectetur
                                  </p>
                                </div>
                            <form>
                                <div class="form-row">
                                    <div class="from-group col-md-12 mb-3">
                                        <div class="input-group ">

                                          <input type="text" class="form-control" id="inlineFormInputGroup00" placeholder="Enter Your First Name">
                                        </div>
                                      </div>
                                      <div class="from-group col-md-12 mb-3">
                                        <div class="input-group ">

                                          <input type="text" class="form-control" id="inlineFormInputGroup1" placeholder="Enter Your Last Name">
                                        </div>
                                      </div>
                                </div>
                                <div class="form-row">
                                        <div class="from-group col-md-12 mb-3">
                                            <div class="input-group"  >

                                                <input type="text" name="email" class="form-control" id="inlineFormInputGroup88" placeholder="Enter Your Email">
                                            </div>
                                          </div>

                                </div>
                                <div class="form-row">
                                    <div class="from-group col-md-12 mb-3">
                                        <div class="input-group select-control">

                                            <select class="form-control" id="inlineFormInputGroup4">
                                                <option selected>Gender</option>
                                                <option  value="1">Male</option>
                                                <option value="2">Female</option>
                                              </select>
                                        </div>
                                      </div>
                                </div>

                                <div class="form-row">
                                      <div class="from-group col-md-12 mb-3">
                                          <div class="input-group"  >

                                              <input type="text" class="form-control" id="inlineFormInputGroup7" placeholder="Enter Your PhoneNumber">
                                          </div>
                                        </div>

                                </div>


                                  <div class="col-12 col-sm-12 justify-content-end btn-cont">
                                    <div class="row">

                                      <a data-toggle="pill" href="#" class="btn btn-secondary">Update</a>
                                    </div>
                                  </div>
                            </form>
                        </section>
                      </div>
                      <div class="tab-pane fade" id="pills-billing" role="tabpanel" aria-labelledby="pills-billing-tab">
                          <section class="order-content">
                              <div class="heading-title">
                                  <h2> Orders
                                  </h2>
                                  <p>Lorem ipsum dolor sit amet, consectetur
                                  </p>
                                </div>
                                <div class="accordian">
                                    <table class="table top-table order-table">
                                        <tbody>
                                          <tr class="d-flex">
                                            <td class="col-12 col-md-3 first-item">
                                                25th April 2019
                                            </td>
                                            <td class="col-12 col-md-2">354365G4</td>
                                            <td class="col-12 col-md-3">
                                                <div class="text-secondary">Pending</div>
                                              </td>
                                            <td class="col-12 col-md-2">
                                              $890.00
                                            </td>
                                            <td class="col-12 col-md-2">
                                                <a class="btn btn-link" data-toggle="collapse" href="#orderDetail" role="button" aria-expanded="false">
                                                    View
                                                  </a>
                                              </td>

                                          </tr>
                                          </tbody>
                                    </table>
                                    <div class="collapse" id="orderDetail">
                                        <div class="card card-body">
                                            <section class="orderdetail-content">

                                                <div class="row">
                                                  <div class="col-12 col-md-5">
                                                      <h3>Order ID 35468430</h3>
                                                      <table class="table order-id">
                                                          <tbody>
                                                              <tr class="d-flex">
                                                                <td class="col-6 col-md-6"> <strong>Order Status</strong> </td>
                                                                <td class="pending col-6 col-md-6" ><p>Pending</p></td>
                                                              </tr>
                                                              <tr class="d-flex">
                                                                  <td class="col-6 col-md-6"><strong>Order Date</strong></td>
                                                                  <td  class="underline col-6 col-md-6" >28/04/2019</td>
                                                                </tr>
                                                            </tbody>
                                                      </table>

                                                  </div>
                                                  <div class="col-12 col-md-7">
                                                      <h3>Payment Methods</h3>
                                                  <table class="table order-id">
                                                      <tbody>
                                                          <tr class="d-flex">
                                                            <td class="address col-12 col-md-6"><strong>Shipping Address</strong></td>


                                                          </tr>
                                                          <tr class="d-flex">
                                                              <td  class="address col-12 col-md-12">Address Details, Near, City Name, Country Name</td>

                                                            </tr>
                                                        </tbody>
                                                  </table>

                                                  </div>
                                                </div>

                                                <div class="row">

                                                    <div class="col-12 col-md-5">
                                                            <h3>
                                                                Shipping Details
                                                            </h3>

                                                        <table class="table order-id">
                                                          <tbody>
                                                              <tr class="d-flex">
                                                                <td class="address col-12"><strong>Shipping Address</strong></td>
                                                              </tr>
                                                              <tr  class="d-flex">
                                                                  <td class="address col-12">Address Details, Near, City Name, Country Name</td>
                                                                </tr>
                                                            </tbody>
                                                      </table>

                                                    </div>
                                                    <div class="col-12 col-md-7">
                                                            <h3>
                                                                Billing Details
                                                            </h3>

                                                            <table class="table order-id">
                                                                <tbody>
                                                                    <tr class="d-flex">
                                                                      <td class="address col-12"><strong>Shipping Address</strong></td>
                                                                    </tr>
                                                                    <tr  class="d-flex">
                                                                        <td class="address col-12">Address Details, Near, City Name, Country Name</td>
                                                                      </tr>
                                                                  </tbody>
                                                            </table>

                                                    </div>
                                                  </div>

                                                  <table class="table orderdetail-content top-table">
                                                      <tbody>
                                                          <tr class="d-flex">
                                                              <td class="col-12 col-md-2">
                                                                    <img class="img-fluid" src="images/product_images/product_image_1.jpg" alt="Image">
                                                              </td>
                                                              <td class="col-12 col-md-4">
                                                                  <div class="item-detail">
                                                                      <span class="pro-category">Ladies Watch</span>
                                                                      <h3>Copper and Daimond Watch
                                                                      </h3>
                                                                      <div class="item-attributes"></div>

                                                                  </div>
                                                              </td>
                                                              <td class="col-12 col-md-1 item-price">$385</td>
                                                              <td class="col-12 col-md-3" >
                                                                  <div class="input-group-control">
                                                                      <input type="text" id="quantity12" name="quantity" class="form-control" value="10" readonly>
                                                                </div>
                                                              </td>
                                                              <td class="col-12 col-md-2 item-total">$700</td>


                                                          </tr>
                                                          <tr class="d-flex">
                                                              <td class="col-12 col-md-2">
                                                                    <img class="img-fluid" src="images/product_images/product_image_2.jpg" alt="Image">
                                                              </td>
                                                              <td class="col-12 col-md-4">
                                                                  <div class="item-detail">
                                                                      <span class="pro-category">Ladies Watch</span>
                                                                      <h3>Copper and Daimond Watch
                                                                      </h3>
                                                                      <div class="item-attributes"></div>

                                                                  </div>
                                                              </td>
                                                              <td class="col-12 col-md-1 item-price">$385</td>
                                                              <td class="col-12 col-md-3" >
                                                                  <div class="input-group-control">
                                                                      <input type="text" id="quantity4" name="quantity" class="form-control" value="10" readonly>

                                                                </div>
                                                              </td>
                                                              <td class="col-12 col-md-2 item-total">$700</td>


                                                          </tr>
                                                          <tr class="d-flex">
                                                              <td class="col-12 col-md-2">
                                                                    <img class="img-fluid" src="images/product_images/product_image_3.jpg" alt="Image">
                                                              </td>
                                                              <td class="col-12 col-md-4">
                                                                  <div class="item-detail">
                                                                      <span class="pro-category">Ladies Watch</span>
                                                                      <h3>Copper and Daimond Watch
                                                                      </h3>
                                                                      <div class="item-attributes"></div>

                                                                  </div>
                                                              </td>
                                                              <td class="col-12 col-md-1 item-price">$385</td>
                                                              <td class="col-12 col-md-3" >
                                                                  <div class="input-group-control">

                                                                      <input type="text" id="quantity2" name="quantity" class="form-control" value="10" readonly>

                                                                </div>
                                                              </td>
                                                              <td class="col-12 col-md-2 item-total">$700</td>


                                                          </tr>
                                                      </tbody>
                                                    </table>

                                                <div class="row">
                                                    <div class="col-12 col-sm-12">
                                                        <div class="comments-area">
                                                            <h3>Order Comments </h3>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis justo lacus,
                                                              eu venenatis urna varius vitae. Vestibulum felis risus, tempus vitae consequat vel,
                                                              porta at lacus. Curabitur sit amet scelerisque libero, sit amet feugiat ligula.
                                                              Proin quis ex consectetur odio blandit vestibulum. Nullam fringilla pulvinar porttitor.
                                                              Proin aliquet sapien fermentum justo placerat, et lacinia est egestas. Suspendisse ultricies finibus ex.
                                                              Fusce sit amet est vel nisi ultricies cursus. Etiam ultricies malesuada dignissim.</p>
                                                        </div>
                                                      </div>
                                                </div>
                                      </section>
                                        </div>
                                      </div>
                                </div>

                                  <div class="accordian">
                                      <table class="table top-table order-table">
                                          <tbody>
                                            <tr class="d-flex">
                                              <td class="col-12 col-md-3 first-item">
                                                  25th April 2019
                                              </td>
                                              <td class="col-12 col-md-2">354585G4</td>
                                              <td class="col-12 col-md-3">
                                                  <div class="text-secondary">Pending</div>
                                                </td>
                                              <td class="col-12 col-md-2">
                                                $890.00
                                              </td>
                                              <td class="col-12 col-md-2">
                                                  <a class="btn btn btn-link" data-toggle="collapse" href="#orderDetail2" role="button" aria-expanded="false">
                                                    View
                                                    </a>

                                                </td>

                                            </tr>
                                            </tbody>
                                      </table>
                                      <div class="collapse" id="orderDetail2">
                                          <div class="card card-body">
                                              <section class="orderdetail-content">

                                                  <div class="row">
                                                    <div class="col-12 col-md-5">
                                                        <h3>Order ID 35468430</h3>
                                                        <table class="table order-id">
                                                            <tbody>
                                                                <tr class="d-flex">
                                                                  <td class="col-6 col-md-6"> <strong>Order Status</strong> </td>
                                                                  <td class="pending col-6 col-md-6" ><p>Pending</p></td>
                                                                </tr>
                                                                <tr class="d-flex">
                                                                    <td class="col-6 col-md-6"><strong>Order Date</strong></td>
                                                                    <td  class="underline col-6 col-md-6" >28/04/2019</td>
                                                                  </tr>
                                                              </tbody>
                                                        </table>

                                                    </div>
                                                    <div class="col-12 col-md-7">
                                                        <h3>Payment Methods</h3>
                                                    <table class="table order-id">
                                                        <tbody>
                                                            <tr class="d-flex">
                                                              <td class="address col-12 col-md-6"><strong>Shipping Address</strong></td>


                                                            </tr>
                                                            <tr class="d-flex">
                                                                <td  class="address col-12 col-md-12">Address Details, Near, City Name, Country Name</td>

                                                              </tr>
                                                          </tbody>
                                                    </table>

                                                    </div>
                                                  </div>

                                                  <div class="row">

                                                      <div class="col-12 col-md-5">
                                                              <h3>
                                                                  Shipping Details
                                                              </h3>

                                                          <table class="table order-id">
                                                            <tbody>
                                                                <tr class="d-flex">
                                                                  <td class="address col-12"><strong>Shipping Address</strong></td>
                                                                </tr>
                                                                <tr  class="d-flex">
                                                                    <td class="address col-12">Address Details, Near, City Name, Country Name</td>
                                                                  </tr>
                                                              </tbody>
                                                        </table>

                                                      </div>
                                                      <div class="col-12 col-md-7">
                                                              <h3>
                                                                  Billing Details
                                                              </h3>

                                                              <table class="table order-id">
                                                                  <tbody>
                                                                      <tr class="d-flex">
                                                                        <td class="address col-12"><strong>Shipping Address</strong></td>
                                                                      </tr>
                                                                      <tr  class="d-flex">
                                                                          <td class="address col-12">Address Details, Near, City Name, Country Name</td>
                                                                        </tr>
                                                                    </tbody>
                                                              </table>

                                                      </div>
                                                    </div>

                                                    <table class="table orderdetail-content top-table">
                                                        <tbody>
                                                            <tr class="d-flex">
                                                                <td class="col-12 col-md-2">
                                                                      <img class="img-fluid" src="images/product_images/product_image_4.jpg" alt="Image">
                                                                </td>
                                                                <td class="col-12 col-md-4">
                                                                    <div class="item-detail">
                                                                        <span class="pro-category">Ladies Watch</span>
                                                                        <h3>Copper and Daimond Watch
                                                                        </h3>
                                                                        <div class="item-attributes"></div>

                                                                    </div>
                                                                </td>
                                                                <td class="col-12 col-md-1 item-price">$385</td>
                                                                <td class="col-12 col-md-3" >
                                                                    <div class="input-group-control">

                                                                        <input type="text" id="quantity21" name="quantity" class="form-control" value="10" readonly>


                                                                  </div>
                                                                </td>
                                                                <td class="col-12 col-md-2 item-total">$700</td>


                                                            </tr>
                                                            <tr class="d-flex">
                                                                <td class="col-12 col-md-2">
                                                                      <img class="img-fluid" src="images/product_images/product_image_1.jpg" alt="Image">
                                                                </td>
                                                                <td class="col-12 col-md-4">
                                                                    <div class="item-detail">
                                                                        <span class="pro-category">Ladies Watch</span>
                                                                        <h3>Copper and Daimond Watch
                                                                        </h3>
                                                                        <div class="item-attributes"></div>

                                                                    </div>
                                                                </td>
                                                                <td class="col-12 col-md-1 item-price">$385</td>
                                                                <td class="col-12 col-md-3" >
                                                                    <div class="input-group-control">
                                                                        <input type="text" id="quantity3" name="quantity" class="form-control" value="10" readonly>


                                                                  </div>
                                                                </td>
                                                                <td class="col-12 col-md-2 item-total">$700</td>


                                                            </tr>
                                                            <tr class="d-flex">
                                                                <td class="col-12 col-md-2">
                                                                      <img class="img-fluid" src="images/product_images/product_image_2.jpg" alt="Image">
                                                                </td>
                                                                <td class="col-12 col-md-4">
                                                                    <div class="item-detail">
                                                                        <span class="pro-category">Ladies Watch</span>
                                                                        <h3>Copper and Daimond Watch
                                                                        </h3>
                                                                        <div class="item-attributes"></div>

                                                                    </div>
                                                                </td>
                                                                <td class="col-12 col-md-1 item-price">$385</td>
                                                                <td class="col-12 col-md-3 justify-content-center" >
                                                                    <div class="input-group-control">

                                                                        <input type="text" id="quantity33" name="quantity" class="form-control" value="10" readonly>


                                                                  </div>
                                                                </td>
                                                                <td class="col-12 col-md-2 item-total">$700</td>


                                                            </tr>
                                                        </tbody>
                                                      </table>

                                                  <div class="row">
                                                      <div class="col-12 col-sm-12">
                                                          <div class="comments-area">
                                                              <h3>Order Comments </h3>
                                                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis justo lacus,
                                                                eu venenatis urna varius vitae. Vestibulum felis risus, tempus vitae consequat vel,
                                                                porta at lacus. Curabitur sit amet scelerisque libero, sit amet feugiat ligula.
                                                                Proin quis ex consectetur odio blandit vestibulum. Nullam fringilla pulvinar porttitor.
                                                                Proin aliquet sapien fermentum justo placerat, et lacinia est egestas. Suspendisse ultricies finibus ex.
                                                                Fusce sit amet est vel nisi ultricies cursus. Etiam ultricies malesuada dignissim.</p>
                                                          </div>
                                                        </div>
                                                  </div>
                                        </section>
                                          </div>
                                        </div>
                                  </div>
                            </section>
                      </div>
                      <div class="tab-pane fade" id="pills-method" role="tabpanel" aria-labelledby="pills-method-tab">
                             <table class="table shipping-content">
                                <thead>
                                  <tr>
                                    <th scope="col">DEFAULT ADDRESS</th>
                                    <th scope="col" class="d-none d-md-block">ACTION</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>

                                    <td>
                                            <div class="form-check">

                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck0">
                                                <label class="form-check-label" for="defaultCheck0">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                </label>
                                                <small id="checkboxHelp1" class="form-text text-muted"></small>
                                              </div>

                                    </td>

                                    <td class="edit-tag">
                                      <ul>
                                        <li><a href="#"> <i class="fas fa-pen"></i> </a></li>
                                        <li><a href="#"> <i class="fas fa-trash-alt"></i></a></li>
                                      </ul>

                                    </td>
                                  </tr>


                                </tbody>
                              </table>
                              <h3 class="">Add Shipping Address </h3>

                              <form>
                                  <div class="form-row">
                                      <div class="from-group col-md-6 mb-3">
                                          <div class="input-group ">

                                            <input type="text" class="form-control" id="inlineFormInputGroup02" placeholder="First Name">
                                          </div>
                                        </div>
                                        <div class="from-group col-md-6 mb-3">
                                          <div class="input-group ">

                                            <input type="text" class="form-control" id="inlineFormInputGroup15" placeholder="Last Name">
                                          </div>
                                        </div>
                                  </div>
                                  <div class="form-row">
                                          <div class="from-group col-md-6 mb-3">
                                              <div class="input-group"  >

                                                  <input type="text" class="form-control" id="inlineFormInputGroup8" placeholder="Phone">
                                              </div>
                                            </div>
                                        <div class="from-group col-md-6 mb-3">
                                            <div class="input-group ">

                                              <input type="text" class="form-control" id="inlineFormInputGroup3" placeholder="Address">
                                            </div>
                                          </div>
                                  </div>
                                  <div class="form-row">
                                      <div class="from-group col-md-6 mb-3">
                                          <div class="input-group select-control">

                                              <select class="form-control" id="inlineFormInputGroup42">
                                                  <option selected>Select Country</option>
                                                  <option  value="1">USA</option>
                                                  <option value="2">Canada</option>
                                                </select>
                                          </div>
                                        </div>
                                        <div class="from-group col-md-6 mb-3">
                                            <div class="input-group select-control">

                                                <select class="form-control" id="inlineFormInputGroup5">
                                                    <option selected>Select State</option>
                                                    <option  value="1">New York</option>
                                                    <option value="2">Taxes</option>
                                                  </select>
                                            </div>
                                          </div>

                                  </div>

                                  <div class="form-row">
                                      <div class="from-group col-md-6 mb-3">
                                          <div class="input-group"  >

                                              <input type="text" class="form-control" id="inlineFormInputGroup72" placeholder="City">
                                          </div>
                                        </div>
                                        <div class="from-group col-md-6 mb-3">
                                            <div class="input-group"  >

                                                <input type="text" class="form-control" id="inlineFormInputGroup71" placeholder="Postal Code">
                                            </div>
                                          </div>

                                  </div>


                                    <div class="col-12 col-sm-12 justify-content-end btn-cont">
                                      <div class="row">

                                        <a data-toggle="pill" href="#pills-billing" class="btn btn-secondary">Add</a>
                                      </div>
                                    </div>
                                </form>
                      </div>
                      <div class="tab-pane fade" id="pills-order" role="tabpanel" aria-labelledby="pills-order-tab">

                      </div>
                    </div>
                </div>
            </div>

          </div>
      </div>

  </div>
</div>
</div>


    <!-- //footer style One -->
  <footer id="footerOne"  class="footer-area footer-one footer-desktop">
    <div class="container-fluid p-0">
      <div class="copyright-content">
          <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                  <div class="footer-info">
                      ©&nbsp;2019 Company, Inc. <a href="privacy.html">Privacy</a>&nbsp;•&nbsp;<a href="term.html">Terms</a>
                  </div>

                </div>
                <div class="col-12 col-md-6">
                    <ul class="socials">
                        <li><a href="#" class="fab fb fa-facebook-square"></a></li>
                        <li><a href="#" class="fab tw fa-twitter-square"></a></li>
                        <li><a href="#" class="fab sk fa-skype"></a></li>
                        <li><a href="#" class="fab In fa-linkedin"></a></li>
                        <li><a href="#" class="fab ig fa-instagram"></a></li>
                    </ul>
                </div>
            </div>
          </div>
        </div>
    </div>
</footer>

  </div>
<div class="mobile-overlay"></div>
