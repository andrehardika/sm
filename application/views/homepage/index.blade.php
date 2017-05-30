<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="image/favicon.png" rel="icon" />
  <title>Senyum Media Stationary</title>
  <meta name="description" content="">
  <!-- CSS Part Start-->
  <link rel="stylesheet" type="text/css" href="{{ base_url('assets/plugins/bootstrap/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ base_url('assets/plugins/fontawesome/css/font-awesome.min.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ base_url('assets/css/theme-homepage.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ base_url('assets/plugins/owlcarousel/css/owl.carousel.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ base_url('assets/plugins/owlcarousel/css/owl.transitions.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ base_url('assets/css/theme-homepage-responsive.css') }}" />
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans' type='text/css'>
  <!-- CSS Part End-->
</head>
<body>
  <div class="wrapper-wide">
    <div id="header">
      <!-- Top Bar Start-->
      <nav id="top" class="htop">
        <div class="container">
          <div class="row"> <span class="drop-icon visible-sm visible-xs"><i class="fa fa-align-justify"></i></span>
            <div class="pull-left flip left-top">
              <div class="links">
                <ul>
                  <li class="mobile"><i class="fa fa-phone"></i>+91 9898777656</li>
                  <li class="email"><a href="mailto:senyum@example.com"><i class="fa fa-envelope"></i>senyum@example.com</a></li>
                  <li><a href="#">Wish List (0)</a></li>
                  <!-- <li><a href="#">Checkout</a></li> -->
                </ul>
              </div>
            </div>
            <div id="top-links" class="nav pull-right flip">
              <ul>
                <li><a href="#">Masuk</a></li>
                <li><a href="#">Daftar</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <!-- Top Bar End-->
      <!-- Header Start-->
      <header class="header-row">
        <div class="container">
          <div class="table-container">
            <!-- Logo Start -->
            <div class="col-table-cell col-lg-6 col-md-6 col-sm-12 col-xs-12 inner">
              <div id="logo"><a href="{{ site_url('/') }}"><img class="img-responsive" src="{{ base_url('assets/images/logo.jpg') }}" title="Senyum Media" alt="Senyum Media" /></a></div>
            </div>
            <!-- Logo End -->
            <!-- Mini Cart Start-->
            <div class="col-table-cell col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div id="cart">
                <button type="button" data-toggle="dropdown" data-loading-text="Loading..." class="heading dropdown-toggle">
                  <span class="cart-icon pull-left flip"></span>
                  <span id="cart-total">Keranjang Belanja</span></button>
                  <ul class="dropdown-menu">
                    <li>
                      <table class="table">
                        <tbody>
                          <tr>
                            <td class="text-center"><a href="#"><img class="img-thumbnail" title="Nama Produk" alt="Nama Produk" src="{{ 'assets/images/product/sony_vaio_1-50x50.jpg' }}"></a></td>
                            <td class="text-left"><a href="#">Nama Produk</a></td>
                            <td class="text-right">x 1</td>
                            <td class="text-right">Rp 900</td>
                            <td class="text-center"><button class="btn btn-danger btn-xs remove" title="Remove" onClick="" type="button"><i class="fa fa-times"></i></button></td>
                          </tr>
                          <tr>
                            <td class="text-center"><a href="#"><img class="img-thumbnail" title="Nama Produk" alt="Nama Produk" src="{{ 'assets/images/product/sony_vaio_1-50x50.jpg' }}"></a></td>
                            <td class="text-left"><a href="#">Nama Produk</a></td>
                            <td class="text-right">x 1</td>
                            <td class="text-right">Rp 900</td>
                            <td class="text-center"><button class="btn btn-danger btn-xs remove" title="Remove" onClick="" type="button"><i class="fa fa-times"></i></button></td>
                          </tr>
                        </tbody>
                      </table>
                    </li>
                    <li>
                      <div>
                        <table class="table table-bordered">
                          <tbody>
                            <tr>
                              <td class="text-right"><strong>Sub-Total</strong></td>
                              <td class="text-right">Rp 1000,-</td>
                            </tr>
                            <tr>
                              <td class="text-right"><strong>Pajak (10%)</strong></td>
                              <td class="text-right">Rp 500</td>
                            </tr>
                            <tr>
                              <td class="text-right"><strong>Total</strong></td>
                              <td class="text-right">Rp 2.000</td>
                            </tr>
                          </tbody>
                        </table>
                        <p class="checkout"><a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Detail</a>&nbsp;&nbsp;&nbsp;<a href="#" class="btn btn-primary"><i class="fa fa-share"></i> Hapus</a></p>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- Mini Cart End-->
              <!-- Search Start-->
              <div class="col-table-cell col-lg-3 col-md-3 col-sm-6 col-xs-12 inner">
                <div id="search" class="input-group">
                  <input id="filter_name" type="text" name="search" value="" placeholder="Cari" class="form-control input-lg" />
                  <button type="button" class="button-search"><i class="fa fa-search"></i></button>
                </div>
              </div>
              <!-- Search End-->
            </div>
          </div>
        </header>
        <!-- Header End-->
        <!-- Main Menu Start-->
        <div class="container">
          <nav id="menu" class="navbar">
            <div class="navbar-header"> <span class="visible-xs visible-sm"> Menu <b></b></span></div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
              <ul class="nav navbar-nav">
                <li><a class="home_link" title="Home" href="{{ site_url('/') }}"><span>Home</span></a></li>
                <li class="mega-menu dropdown"><a>Kategori</a>
                  <div class="dropdown-menu">
                    <div class="column col-lg-2 col-md-3"><a href="#">Kategori</a>
                      <div>
                        <ul>
                          <li><a href="#">Kategori A <span>&rsaquo;</span></a>
                            <div class="dropdown-menu">
                              <ul>
                                <li><a href="#">Sub Kategori A <span>&rsaquo;</span></a>
                                  <div class="dropdown-menu">
                                    <ul>
                                      <li><a href="#">Sub sub kategori A</a></li>
                                    </ul>
                                  </div>
                                </li>
                                <li><a href="#">Sub Kategori B</a></li>
                              </ul>
                            </div>
                          </li>
                          <li><a href="#" >Kategori B</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="menu_brands dropdown"><a href="#">Produsen</a>
                  <div class="dropdown-menu">
                    <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/apple_logo-60x60.jpg" title="Apple" alt="Apple" /></a><a href="#">Produsen</a></div>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
        </div>
        <!-- Main Menu End-->
      </div>
      <div id="container">
        <div class="container">
          <div class="row">
            <!-- Left Part Start-->
            <aside id="column-left" class="col-sm-3 hidden-xs">
              <h3 class="subtitle">Kategori</h3>
              <div class="box-category">
                <ul id="cat_accordion">
                  <li><a href="#">Kategori</a> <span class="down"></span>
                    <ul>
                      <li><a href="#">Men</a> <span class="down"></span>
                        <ul>
                          <li><a href="#">Sub Kategori A</a> <span class="down"></span>
                            <ul>
                              <li><a href="#">Sub sub kategori A</a></li>
                            </ul>
                          </li>
                          <li><a href="#">Sub Kategori B</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Women</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <h3 class="subtitle">Populer</h3>
              <div class="side-item">
                <div class="product-thumb clearfix">
                  <div class="image"><a href="#"><img src="{{ base_url('assets/images/product/temp/produk/0.png') }}" alt="Brand Fashion Cotton T-Shirt" title="Brand Fashion Cotton T-Shirt" class="img-responsive" /></a></div>
                  <div class="caption">
                    <h4><a href="#">Produk</a></h4>
                    <p class="price"><span class="price-new">Rp 1.000</span> <span class="price-old">Rp 11.000</span> <span class="saving">-10%</span></p>
                  </div>
                </div>
                <div class="product-thumb clearfix">
                  <div class="image"><a href="#"><img src="{{ base_url('assets/images/product/temp/produk/20.png') }}" alt="iPhone5" title="iPhone5" class="img-responsive" /></a></div>
                  <div class="caption">
                    <h4><a href="#">Produk</a></h4>
                    <p class="price"><span class="price-new">Rp 1.000</span> <span class="price-old">Rp 11.000</span> <span class="saving">-10%</span></p>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span></div>
                  </div>
                </div>
              </div>
              <div class="banner owl-carousel">
                <div class="item"> <a href="#"><img src="{{ base_url('assets/images/banner/small-banner1-265x350.jpg') }}" alt="small banner" class="img-responsive" /></a> </div>
                <div class="item"> <a href="#"><img src="{{ base_url('assets/images/banner/small-banner-265x350.jpg') }}" alt="small banner1" class="img-responsive" /></a> </div>
              </div>
              <h3 class="subtitle">Terbaru</h3>
              <div class="side-item">
                <div class="product-thumb clearfix">
                  <div class="image"><a href="#"><img src="{{ base_url('assets/images/product/temp/produk/200.png') }}" alt="Hair Care Cream for Men" title="Hair Care Cream for Men" class="img-responsive" /></a></div>
                  <div class="caption">
                    <h4><a href="#">Produk</a></h4>
                    <p class="price"><span class="price-new">Rp 1.000</span> <span class="price-old">Rp 11.000</span> <span class="saving">-10%</span></p>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                  </div>
                </div>
                <div class="product-thumb clearfix">
                  <div class="image"><a href="#"><img src="{{ 'assets/images/product/temp/produk/13.png' }}" alt="Hair Care Products" title="Hair Care Products" class="img-responsive" /></a></div>
                  <div class="caption">
                    <h4><a href="#">Produk</a></h4>
                    <p class="price"><span class="price-new">Rp 1.000</span> <span class="price-old">Rp 11.000</span> <span class="saving">-10%</span></p>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                  </div>
                </div>
              </div>
            </aside>
            <!-- Left Part End-->
            <!--Middle Part Start-->
            <div id="content" class="col-sm-9">
              <!-- Slideshow Start-->
              <div class="slideshow single-slider owl-carousel">
                <div class="item"> <a href="#"><img class="img-responsive" src="{{ 'assets/images/product/temp/slider/228392039SM_Nusantara.jpg' }}" alt="banner 1" /></a> </div>
                <div class="item"> <a href="#"><img class="img-responsive" src="{{ 'assets/images/product/temp/slider/490690193baners2123.jpg' }}" alt="banner 2" /></a> </div>
                <div class="item"> <a href="#"><img class="img-responsive" src="{{ 'assets/images/product/temp/slider/871094852Mebelair1.jpg' }}" alt="banner 3" /></a> </div>
              </div>
              <!-- Slideshow End-->
              <!-- Produk Populer Start-->
              <h3 class="subtitle">Populer - <a class="viewall" href="#">lihat semua</a></h3>
              <div class="owl-carousel product_carousel">
                @for($i=0; $i<3; $i++)
                <div class="product-thumb clearfix">
                  <div class="image"><a href="#"><img src="{{ base_url('assets/images/product/temp/produk/194.png') }}" alt="Produk" title="Produk" class="img-responsive" /></a></div>
                  <div class="caption">
                    <h4><a href="#">Produk</a></h4>
                    <p class="price"><span class="price-new">Rp 10.000</span><span class="price-old">Rp 11.000</span><span class="saving">-10%</span></p>
                  </div>
                  <div class="button-group">
                    <button class="btn-primary" type="button" onClick="cart.add('42');"><span>Tambah ke Keranjang</span></button>
                    <div class="add-to-links">
                      <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i></button>
                      <button type="button" data-toggle="tooltip" title="Compare this Product" onClick=""><i class="fa fa-exchange"></i></button>
                    </div>
                  </div>
                </div>
                @endfor
              </div>
              <!-- Produk Populer End-->
              <!-- Banner Start-->
              <div class="marketshop-banner">
                <div class="row">
                  <div class="col-xs-12"><a href="#"><img src="{{  base_url('assets/images/banner/sample-banner-2-400x200.jpg') }}" alt="Sample Banner 3" title="Sample Banner 3" /></a></div>
                </div>
              </div>
              <!-- Banner End-->
              <!-- Produk Terbaru Start-->
              <h3 class="subtitle">Terbaru - <a class="viewall" href="#">lihat semua</a></h3>
              <div class="owl-carousel product_carousel">
                @for($i=0; $i<3; $i++)
                <div class="product-thumb clearfix">
                  <div class="image"><a href="#"><img src="{{ base_url('assets/images/product/temp/produk/190.png') }}" alt="Produk" title="Produk" class="img-responsive" /></a></div>
                  <div class="caption">
                    <h4><a href="#">Produk</a></h4>
                    <p class="price"><span class="price-new">Rp 10.000</span><span class="price-old">Rp 11.000</span><span class="saving">-10%</span></p>
                  </div>
                  <div class="button-group">
                    <button class="btn-primary" type="button" onClick="cart.add('42');"><span>Tambah ke Keranjang</span></button>
                    <div class="add-to-links">
                      <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i></button>
                      <button type="button" data-toggle="tooltip" title="Compare this Product" onClick=""><i class="fa fa-exchange"></i></button>
                    </div>
                  </div>
                </div>
                @endfor
              </div>
              <!-- Produk Terbaru End-->
              
              <!-- Brand Logo Carousel Start-->
              <h3 class="subtitle">Produsen</h3>
              <div id="carousel" class="owl-carousel nxt">
              <div class="item text-center"> <a href="#"><img src="{{ base_url('assets/images/product/temp/produsen/1.png') }}" alt="Palm" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="{{ base_url('assets/images/product/temp/produsen/2.png') }}" alt="Sony" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="{{ base_url('assets/images/product/temp/produsen/3.png') }}" alt="Canon" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="{{ base_url('assets/images/product/temp/produsen/4.png') }}" alt="Apple" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="{{ base_url('assets/images/product/temp/produsen/5.png') }}" alt="HTC" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="{{ base_url('assets/images/product/temp/produsen/6.png') }}" alt="Hewlett-Packard" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="{{ base_url('assets/images/product/temp/produsen/7.png') }}" alt="brand" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="{{ base_url('assets/images/product/temp/produsen/8.png') }}" alt="brand1" class="img-responsive" /></a> </div>
              </div>
              <!-- Brand Logo Carousel End -->
            </div>
            <!--Middle Part End-->
          </div>
        </div>
      </div>
      <!--Footer Start-->
      <footer id="footer">
        <div class="fpart-first">
          <div class="container">
            <div class="row">
              <div class="contact col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <h5>Contact Details</h5>
                <ul>
                  <li class="address"><i class="fa fa-map-marker"></i>Example Street 125, Jember</li>
                  <li class="mobile"><i class="fa fa-phone"></i>+91 9898777656</li>
                  <li class="email"><i class="fa fa-envelope"></i>Send email via our <a href="#">Contact Us</a>
                  </ul>
                </div>
                <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                  <h5>Information</h5>
                  <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Delivery Information</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                  </ul>
                </div>
                <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                  <h5>Customer Service</h5>
                  <ul>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Returns</a></li>
                    <li><a href="#">Site Map</a></li>
                  </ul>
                </div>
                <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                  <h5>Extras</h5>
                  <ul>
                    <li><a href="#">Brands</a></li>
                    <li><a href="#">Gift Vouchers</a></li>
                    <li><a href="#">Affiliates</a></li>
                    <li><a href="#">Specials</a></li>
                  </ul>
                </div>
                <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                  <h5>My Account</h5>
                  <ul>
                    <li><a href="#">My Account</a></li>
                    <li><a href="#">Order History</a></li>
                    <li><a href="#">Wish List</a></li>
                    <li><a href="#">Newsletter</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="fpart-second">
            <div class="container">
              <div id="powered" class="clearfix">
                <div class="powered_text pull-left flip">
                  <p>Copyright &copy;<a href="http://www.mascitra.com">Mascitra</a> - 2017</p>
                </div>
                <div class="social pull-right flip"> <a href="#" target="_blank"> <img data-toggle="tooltip" src="{{ base_url('assets/images/socialicons/facebook.png') }}" alt="Facebook" title="Facebook"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="{{ base_url('assets/images/socialicons/twitter.png') }}" alt="Twitter" title="Twitter"> </a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="{{ base_url('assets/images/socialicons/google_plus.png') }}" alt="Google+" title="Google+"> </a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="{{ base_url('assets/images/socialicons/pinterest.png') }}" alt="Pinterest" title="Pinterest"> </a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="{{ base_url('assets/images/socialicons/rss.png') }}" alt="RSS" title="RSS"> </a> </div>
              </div>
            </div>
          </div>
          <div id="back-top"><a data-toggle="tooltip" title="Back to Top" href="javascript:void(0)" class="backtotop"><i class="fa fa-chevron-up"></i></a></div>
        </footer>
        <!--Footer End-->
      </div>
      <!-- JS Part Start-->
      <script type="text/javascript" src="{{ base_url('assets/plugins/jquery/jquery-3.1.1.min.js') }}"></script>
      <script type="text/javascript" src="{{ base_url('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
      <script type="text/javascript" src="{{ base_url('assets/plugins/jquery-easing/jquery.easing.1.3.min.js') }}"></script>
      <script type="text/javascript" src="{{ base_url('assets/plugins/jquery-dcjqaccordion/jquery.dcjqaccordion.2.7.min.js') }}"></script>
      <script type="text/javascript" src="{{ base_url('assets/plugins/owlcarousel/js/owl.carousel.min.js') }}"></script>
      <script type="text/javascript" src="{{ base_url('assets/js/custom.js') }}"></script>
      <!-- JS Part End-->
    </body>
    </html>